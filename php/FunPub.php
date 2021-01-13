<?php

class FunPub
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
            $data_str[$k] = mb_strtoupper(mb_substr($v, 0, 1, 'UTF-8'), 'UTF-8') . mb_strtolower(
                mb_substr($v, 1, mb_strlen($v), 'UTF-8'),
                'UTF-8'
            );
        }
        $str = implode(' ', $data_str);
        return $str;
    }

    /**
     * @param $post
     * @param $len
     * @return array
     */
    public static function cutStringPHP($post, $len)
    {

        $post = preg_replace('/\s+/', ' ', $post);
        $post = preg_replace("((http|ftp)+(s)?:\/\/[^<>\s]+)", '', $post);

        $str = ['txt' => '', 'cut' => 0];
        if (strlen($post) < $len && $post) {
            $str['txt'] = $post;
            return $str;
        }
        if ($post) {
            $words = preg_split('//', $post);
            $i = 0;
            $tam = '';
            do {
                $str['txt'] .= $words[$i];
                $i++;
                if ($words[$i] == ' ') {
                    $tam = $str['txt'];
                }
            } while ($i < $len && isset($words[$i]));
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

        $curl = new Curl();

        // if (!Yii::$app->user->isGuest) {
        //     $user = Yii::$app->user->identity;
        //     $curl = $curl->setHeaders([
        //         'Authorization' => 'Bearer ' . $user['token_api'],
        //     ]);
        // } else {
            $curl = $curl->setHeaders([
                'Authorization' => 'Bearer ',
            ]);
        // }

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
}
