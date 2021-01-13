<?php
/**
 * Created by PhpStorm.
 * User: KIENTRUC.com
 * Date: 4/5/2018
 * Time: 8:56 AM
 */

namespace app\models;

use yii\base\Model;
use linslin\yii2\curl;
use yii;

class FunPub extends Model
{
    /**
     * @param $str
     * @return mixed|string
     * xu ly chuoi string in hoa
     */
    public static function inHoaChuCai($str)
    {
        $str = mb_strtolower($str, 'UTF-8');
        $data_str = explode(' ', $str);
        foreach ($data_str as $k => $v) {
            $data_str[$k] = mb_strtoupper(mb_substr($v, 0, 1, 'UTF-8'), 'UTF-8') . mb_strtolower(mb_substr($v, 1, mb_strlen($v), 'UTF-8')
                    , 'UTF-8');
        }
        $str = implode(' ', $data_str);
        return $str;
    }

    /**
     * @param $post
     * @param $len
     * @return array
     */
    public static function cutStringPHP($post,$len){

        $post = preg_replace('/\s+/', ' ', $post);
        $post = preg_replace("((http|ftp)+(s)?:\/\/[^<>\s]+)",'',$post);

        $str = ['txt'=>'','cut'=>0];
        if(strlen($post)<$len && $post){
            $str['txt'] = $post;
            return $str;
        }
        if($post) {
            $words = preg_split('//', $post);
            $i = 0;
            $tam = '';
            do{
                $str['txt'] .= $words[$i];
                $i++;
                if($words[$i]==' '){
                    $tam = $str['txt'];
                }
            }while ($i < $len && isset($words[$i]));
            $str['txt'] = $tam;
            $str['cut'] = 1;
        }
        return $str;
    }

    /**
     * @param $ptime
     * @return false|string
     */
    public static function getCountTime($ptime)
    {
        $etime = time() - $ptime;
        $result = '';
        if ($etime < 1) {
            $result = 'mới xong';
        } else {

            $a = [
                365 * 24 * 60 * 60 => 'year',
                30 * 24 * 60 * 60 => 'month',
                7 * 24 * 60 * 60 => 'week',
                24 * 60 * 60 => 'day',
                60 * 60 => 'hour',
                60 => 'minute',
                1 => 'second',
            ];
            $a_plural = [
                'year' => 'năm',
                'month' => 'tháng',
                'week' => 'tuần',
                'day' => 'ngày',
                'hour' => 'giờ',
                'minute' => 'phút',
                'second' => 'giây',
            ];

            foreach ($a as $secs => $str) {
                $d = $etime / $secs;

                if ($d >= 1) {

                    switch ($str) {
                        case 'year':
                        case 'month':
                            $result = date('d/m/Y', $ptime);
                            break;
                        default:
                            $r = round($d);
                            $result = $r . ' ' . $a_plural[$str] . ' trước';
                            break;
                    }
                    break;

                }
            }
        }
        return $result;
    }

    /**
     * @throws \Exception
     * @param $url
     * @param array $options
     * @param $method
     * @return string|array|mixed
     */
    public static function Curl_index($url, $options = [], $method)
    {

        $response = [];

        $curl = new curl\Curl();

        if (!Yii::$app->user->isGuest) {
            $user = Yii::$app->user->identity;
            $curl = $curl->setHeaders([
                'Authorization' => 'Bearer ' . $user['token_api'],
            ]);
        } else {
            $curl = $curl->setHeaders([
                'Authorization' => 'Bearer ',
            ]);
        }

        switch ($method) {
            case 'post':
                $curl = $curl->setRawPostData($options);
                $response = $curl->post($url);
                # code...
                break;
            case 'put':
                $curl = $curl->setPostParams($options);
                $response = $curl->put($url);
                # code...
                break;
            case 'delete':
                $curl = $curl->setRequestBody(json_encode($options));
                $response = $curl->delete($url);
                # code...
                break;
            case 'get':
                $curl = $curl->setRequestBody(json_encode($options));
                $response = $curl->get($url);
                # code...
                break;
            default:
                # code...
                break;
        }

        return $response;

    }

    /**
     * @param $str
     * @return bool|string
     */
    public static function createLink($str)
    {
        if (!$str) {
            return false;
        }
        $unicode = [
            'a' => ['á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ặ', 'ằ', 'ẳ', 'ẵ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'],
            'A' => ['Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ặ', 'Ằ', 'Ẳ', 'Ẵ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ'],
            'd' => ['đ'],
            'D' => ['Đ'],
            'e' => ['é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'],
            'E' => ['É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ'],
            'i' => ['í', 'ì', 'ỉ', 'ĩ', 'ị'],
            'I' => ['Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị'],
            'o' => ['ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'],
            'O' => ['Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ'],
            'u' => ['ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'],
            'U' => ['Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự'],
            'y' => ['ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'],
            'Y' => ['Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'],
            '-' => ['(', ')', '$', ' ', '  ', '?', '!', '#', '%', '^', '&', '*', ',', '"', "'", '&quot;', '.', ':', ';', '/', '\\', '”', '“', '+', '=', '_', '|', '>', '<', '–', '—'],
        ];
        $str = trim($str);
        foreach ($unicode as $nonUnicode => $uni) {
            foreach ($uni as $value) {
                $str = str_replace($value, $nonUnicode, $str);
            }
        }
        $str = ltrim($str, "-");
        $str = rtrim($str, "-");
        $str = preg_replace('/\-(?=\-)/', '', $str);

        // Replace non-AlNum characters with space
        $str = preg_replace('/[^A-Za-z0-9\-]/', '', $str);

        return strtolower($str);
    }

    /**
     * @param $url
     * @param bool $raw
     * @return array|bool
     */
    public static function getUrlData($url, $raw = false)
    {
        $result = false;

        $contents = self::getUrlContents($url, null, 0);

        if (isset($contents) && is_string($contents)) {
            $title = null;
            $metaTags = null;
            $metaProperties = null;

            preg_match('/<title>([^>]*)<\/title>/si', $contents, $match);

            if (isset($match) && is_array($match) && count($match) > 0) {
                $title = strip_tags($match[1]);
            }

            preg_match_all('/<[\s]*meta[\s]*(name|property)="?' . '([^>"]*)"?[\s]*' . 'content="?([^>"]*)"?[\s]*[\/]?[\s]*>/si', $contents, $match);

            if (isset($match) && is_array($match) && count($match) == 4) {
                $originals = $match[0];
                $names = $match[2];
                $values = $match[3];

                if (count($originals) == count($names) && count($names) == count($values)) {
                    $metaTags = [];
                    $metaProperties = $metaTags;
                    if ($raw) {
                        if (version_compare(PHP_VERSION, '5.4.0') == -1) {
                            $flags = ENT_COMPAT;
                        } else {
                            $flags = ENT_COMPAT | ENT_HTML401;
                        }
                    }

                    for ($i = 0, $limiti = count($names); $i < $limiti; $i++) {
                        if ($match[1][$i] == 'name') {
                            $meta_type = 'metaTags';
                        } else {
                            $meta_type = 'metaProperties';
                        }
                        if ($raw) {
                            ${$meta_type}[$names[$i]] = [
                                'html' => htmlentities($originals[$i], $flags, 'UTF-8'),
                                'value' => $values[$i],
                            ];
                        } else {
                            ${$meta_type}[$names[$i]] = [
                                'html' => $originals[$i],
                                'value' => $values[$i],
                            ];
                        }
                    }
                }
            }

            $result = [
                'title' => $title,
                'metaTags' => $metaTags,
                'metaProperties' => $metaProperties,
            ];
        }

        return $result;
    }

    /**
     * @param $url
     * @param null $maximumRedirections
     * @param int $currentRedirection
     * @return bool|string
     */
    public static function getUrlContents($url, $maximumRedirections = null, $currentRedirection = 0)
    {
        $result = false;

        $contents = @file_get_contents($url);

        // Check if we need to go somewhere else

        if (isset($contents) && is_string($contents)) {
            preg_match_all('/<[\s]*meta[\s]*http-equiv="?REFRESH"?' . '[\s]*content="?[0-9]*;[\s]*URL[\s]*=[\s]*([^>"]*)"?' . '[\s]*[\/]?[\s]*>/si', $contents, $match);

            if (isset($match) && is_array($match) && count($match) == 2 && count($match[1]) == 1) {
                if (!isset($maximumRedirections) || $currentRedirection < $maximumRedirections) {
                    return self::getUrlContents($match[1][0], $maximumRedirections, ++$currentRedirection);
                }

                $result = false;
            } else {
                $result = $contents;
            }
        }

        return $contents;
    }

    /**
     * @param $data
     */
    public static function createMeta($data)
    {
        Yii::$app->view->title = $data['title'];

        // Yii::$app->view->registerLinkTag([
        //     'rel' => 'icon',
        //     'type' => 'images/png',
        //     'href' => 'uploads/setup/1492048590_fava.ico'
        // ]);

        self::taotag('link', ['rel' => 'canonical','href' => isset($data['url']) ? $data['url'] : '']);

        Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $data['description'],
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $data['keywords'],
        ]);

        Yii::$app->view->registerMetaTag([
            'name' => 'DC.title',
            'content' => $data['title'],
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'geo.region',
            'content' => 'VN-SG',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'geo.placename',
            'content' => 'HoChiMinh City',
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'geo.position',
            'content' => '10.768536,106.660271',
        ]);

        /****/
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'fb:app_id',
        //     'content' => '685480354937581',
        //     'property' => 'fb:app_id',
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'fb:pages',
        //     'content' => '848546668563574',
        //     'property' => 'fb:pages',
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'article:publisher',
        //     'content' => 'https://www.facebook.com/kientruccom/',
        //     'property' => 'article:publisher',
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'article:section',
        //     'property' => 'article:section',
        //     'content' => $data['category'],
        // ]);

        /****/
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:type',
            'property' => 'og:type',
            'content' => 'article',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:site_name',
            'property' => 'og:site_name',
            'content' => 'fxinsites.com',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:title',
            'property' => 'og:title',
            'content' => $data['title'],
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:description',
            'property' => 'og:description',
            'content' => $data['description'],
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:url',
            'content' => isset($data['url']) ? $data['url'] : Yii::$app->params['ssl'] . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        ]);

        Yii::$app->view->registerMetaTag([
            //'name' => 'og:image',
            'property' => 'og:image',
            'content' => $data['image'] ? $data['image'] : Yii::$app->params['ssl'] . '://' . $_SERVER['HTTP_HOST'] . '/assets/images/logo.png',
        ]);
        /*
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:image',
            'property' => 'og:image:secure_url',
            'content' => $data['image'] ? $data['image']:Yii::$app->params['ssl']. '://'.$_SERVER['HTTP_HOST'].'/assets/images/logo.png',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:width',
            'content' => '200',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:height',
            'content' => '500',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:alt',
            'content' => 'Hình ảnh cho facebook',
        ]);
        Yii::$app->view->registerMetaTag([
            //'name' => 'og:url',
            'property' => 'og:image:type',
            'content' => 'image/jpeg',
        ]);
        */

        /****/
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'twitter:widgets:csp',
        //     'content' => 'on',
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'twitter:card',
        //     'content' => 'summary',
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'twitter:site',
        //     'content' => '@kientruccom',
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'twitter:creator',
        //     'content' => '@kientruccom',
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'twitter:title',
        //     'content' => $data['title'],
        // ]);
        // Yii::$app->view->registerMetaTag([
        //     'name' => 'twitter:description',
        //     'content' => $data['description'],
        // ]);

    }

    /**
     * @param array $options
     * @param null $key
     */
    public static function taotag($element, $options = [], $content = '')
    {
        Yii::$app->view->metaTags[] = static::taotagHtml($element, $content, $options);
    }

    /**
     * @param $name
     * @param string $content
     * @param array $options
     * @return string
     */
    private static function taotagHtml($name, $content = '', $options = [])
    {
        if ($name === null || $name === false) {
            return $content;
        }
        return "<$name" . yii\helpers\BaseHtml::renderTagAttributes($options) . ' />';
    }
}