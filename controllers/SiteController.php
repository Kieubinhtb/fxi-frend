<?php

namespace app\controllers;

use app\models\FunPub;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @param $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        $flag = false;
        switch ($action->id) {
            case 'subscribe-email':
                //case 'add-project':
                $flag = true;
                break;
        }
        $this->enableCsrfValidation = $flag ? false : true;
        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Yii::$app->view->title = 'So sánh sàn';
        $l = Yii::$app->params['apiHref'] . '/pages/home';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        // $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=4&categories=276';
        // $km = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        // $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=4&categories=1937';
        // $pt = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        // $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=4&categories=145';
        // $dg = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        return $this->render('index', [
            'data' => $data,
            // 'km' => $km,
            // 'pt' => $pt,
            // 'dg' => $dg,
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionDetailBroker($link)
    {
        $l = Yii::$app->params['apiHref'] . '/pages/broker?link=' . $link;
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        Yii::$app->view->title = 'Chi tiết sàn ' . $data['data']['items']['detail']['name'];
        if ($data['success']) {
            // if ($data['data']['items']['detail']['wp_tag']) {
            //     $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=4&tags=' . $data['data']['items']['detail']['wp_tag'];
            // } else {
            //     $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=4';
            // }
            // $news = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
            return $this->render('detail-broker', [
                'data' => $data,
                // 'news' => $news
            ]);
        }
        return $this->redirect('/site/error');
    }

    public function actionCreateReview()
    {
        $post = Yii::$app->request->post();

        $l = Yii::$app->params['apiHref'] . '/reviews';
        $data = json_decode(FunPub::Curl_index($l, $post, 'post'), JSON_UNESCAPED_UNICODE);
        // if ($data['success']) {
        //     Yii::$app->session->setFlash(['error' => 0, 'msg' => 'Thành công!']);
        // } else {
        //     Yii::$app->session->setFlash(['error' => 1, 'msg' => 'Thất bại!']);
        // }
        return $this->redirect(Yii::$app->request->referrer ? Yii::$app->request->referrer : '/');
    }

    public function actionSubmitRequirements()
    {
        $post = Yii::$app->request->post();
        // rating_layouts: 
        // rating_contents: 
        // rating_colors: 
        // message: 
        $l = Yii::$app->params['apiHref'] . '/requirements';
        return FunPub::Curl_index($l, [
            'layout' => $post['rating_layouts'],
            'content' => $post['rating_contents'],
            'color' => $post['rating_colors'],
            'info' => $post['message'],
        ], 'post');
    }

    public function actionSubscribeEmail()
    {
        $post = Yii::$app->request->post();
        $l = Yii::$app->params['apiHref'] . '/emails';
        return FunPub::Curl_index($l, ['email' => $post['subscribe-email']], 'post');
    }


    public function actionFilter()
    {
        // Yii::$app->view->title = 'Tìm kiếm sàn forex';
        $get = Yii::$app->request->get();
        $page = isset($get['page']) ? $get['page'] : 1;
        $l = Yii::$app->params['apiHref'] . '/pages/filter?page=' . $page;

        $arr = [];
        if (isset($get['name']) && $get['name']) $arr['name'] = $get['name'];
        if (isset($get['deposit-min']) && $get['deposit-min']) $arr['deposit'] = json_encode(['min' => $get['deposit-min'], 'max' => $get['deposit-max']]);
        if (isset($get['leverage-min']) && $get['leverage-min']) $arr['lever'] = json_encode(['min' => $get['leverage-min'], 'max' => $get['leverage-max']]);
        if (isset($get['product']) && $get['product']) $arr['product'] = json_encode($get['product']);
        if (isset($get['account']) && $get['account']) $arr['account'] = json_encode($get['account']);
        if (isset($get['trade']) && $get['trade']) $arr['trade'] = 1;
        if (isset($get['promotion']) && $get['promotion']) $arr['promotion'] = 1;
        if (isset($get['contry']) && $get['contry']) $arr['contry'] = json_encode($get['contry']);
        if (isset($get['language']) && $get['language']) $arr['language'] = 1;
        if (isset($get['sort']) && $get['sort']) $arr['sort'] = $get['sort'];

        $hasFilter = $arr ? 1 : 0;

        $data = json_decode(FunPub::Curl_index($l, $arr, 'get'), JSON_UNESCAPED_UNICODE);

        if ($data['success']) {
            return $this->render('filter', ['data' => $data, 'filter' => $hasFilter]);
        }
        return $this->redirect('site/error');
    }


    public function actionMoreReview()
    {
        $get = Yii::$app->request->get();
        $l = Yii::$app->params['apiHref'] . '/reviews?broker=' . $get['broker'] . '&page=' . $get['page'];
        return FunPub::Curl_index($l, [], 'get');
    }

    public function actionMoreBroker()
    {
        $get = Yii::$app->request->get();
        $l = Yii::$app->params['apiHref'] . '/brokers?page=' . $get['page'];
        return FunPub::Curl_index($l, [], 'get');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionCompare()
    {
        // Yii::$app->view->title = 'So sánh sàn';
        $str = Yii::$app->request->url;
        $pattern = "/brokers=([0-9a-z\-]+)/";
        preg_match_all($pattern, $str, $matches_out); // Outputs 4
        $compare = json_encode($matches_out[1]);
        if (!$matches_out[1]) {
            if (\Yii::$app->mobileDetect->isMobile()) {
                $compare = json_encode([
                    'fxpro',
                    'fbs',
                ]);
            } else if (\Yii::$app->mobileDetect->isTablet()) {
                $compare = json_encode([
                    'fxpro',
                    'fbs',
                ]);
            } else {
                $compare = json_encode([
                    'fxpro',
                    'fbs',
                    'xtb',
                    'exness'
                ]);
            }
        }
        // FxPro, XTB, Exness, FBS (desktop), FxPro, FBS (mobile)

        $l = Yii::$app->params['apiHref'] . '/pages/compare';
        $data = json_decode(FunPub::Curl_index($l, ['compare' => $compare], 'get'), JSON_UNESCAPED_UNICODE);

        // $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=6&categories=145';
        // $dg = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        return $this->render('compare', [
            'data' => $data,
            // 'dg' => $dg,
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionReview()
    {
        // Yii::$app->view->title = 'Đánh giá sàn';
        $get = Yii::$app->request->get();
        $tab = isset($get['tab']) ? $get['tab'] : 'tat-ca';
        $page = isset($get['page']) ? $get['page'] : 1;

        $l = Yii::$app->params['apiHref'] . '/brokers/review?tab=' . $tab . '&page=' . $page;
        $dataPage = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        $l = Yii::$app->params['apiHref'] . '/pages/review';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        // $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=6&categories=145';
        // $dg = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        if ($data['success']) {
            return $this->render('review', [
                'data' => $data,
                'dataPage' => $dataPage,
                'tab' => $tab,
                // 'dg' => $dg,
            ]);
        }
        return $this->redirect('site/error');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionVechungtoi()
    {
        return $this->render('about');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionPolicy()
    {
        $l = Yii::$app->params['apiHref'] . '/pages/policy';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        return $this->render('policy', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionTerm()
    {
        $l = Yii::$app->params['apiHref'] . '/pages/term';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        return $this->render('term', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionDisclaimer()
    {
        $l = Yii::$app->params['apiHref'] . '/pages/disclaimer';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        return $this->render('disclaimer', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionReputation()
    {
        // Yii::$app->view->title = 'Sàn giao dịch uy tín';
        $get = Yii::$app->request->get();
        $page = isset($get['page']) ? $get['page'] : 1;

        $l = Yii::$app->params['apiHref'] . '/pages/reputation?page=' . $page;
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        return $this->render('reputation', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionSignal()
    {
        // Yii::$app->view->title = 'Tín hiệu giao dịch';
        $l = Yii::$app->params['apiHref'] . '/pages/signal';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=6&categories=2219';
        $monopoly = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        $l = 'https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=8&categories=1937';
        $signal = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);

        return $this->render('signal', [
            'data' => $data,
            'signal' => $signal,
            'monopoly' => $monopoly
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionEconomicCalendar()
    {
        // Yii::$app->view->title = 'Lịch kinh tế';
        $l = Yii::$app->params['apiHref'] . '/pages/economic-calendar';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        return $this->render('economic-calendar', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionGoldPrice()
    {
        // Yii::$app->view->title = 'Giá vàng';
        $l = Yii::$app->params['apiHref'] . '/pages/gold-price';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        return $this->render('gold-price', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionContact()
    {
        // Yii::$app->view->title = 'Liên hệ';
        $l = Yii::$app->params['apiHref'] . '/pages/contact';
        $data = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
        return $this->render('contact', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionSubmitContact()
    {
        $post = Yii::$app->request->post();
        $l = Yii::$app->params['apiHref'] . '/contacts';
        return FunPub::Curl_index($l, [
            'name' => $post['full_name'],
            'email' => $post['email'],
            'phone' => $post['tel'],
            'info' => $post['message'],
        ], 'post');
    }

    public function actionGettelegram()
    {
        $get = Yii::$app->request->get();
        $l = Yii::$app->params['apiHref'] . '/cronjobs/telegram-msg?id=' . $get['id'];
        return FunPub::Curl_index($l, [], 'get');
    }

    public function actionLandingPage()
    {
        $this->layout = 'empty-main';
        return $this->render('LP/index');
    }

    public function actionLandingPageTwo()
    {
        $this->layout = 'empty-main';
        return $this->render('LP/thank-you');
    }

    public function actionLandingPageThree()
    {
        $this->layout = 'empty-main';
        return $this->render('merry-christmas-2020/index');
    }    

    public function actionLandingPageFour()
    {
        $this->layout = 'empty-main';
        return $this->render('merry-christmas-2020/thank-you');
    }  

    public function actionLandingPageThreeEn()
    {
        $this->layout = 'empty-main';
        return $this->render('merry-christmas-2020/en/index');
    }    

    public function actionLandingPageFourEn()
    {
        $this->layout = 'empty-main';
        return $this->render('merry-christmas-2020/en/thank-you');
    } 

    public function actionConvertDetail($link)
    {
        $this->redirect('/thong-tin-danh-gia-san-' . str_replace("/", "", $link));
    }
}
