<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\Cookie;
use yii\web\ErrorAction;
use yii\web\Response;

class SiteController extends Controller
{
    static $languages = ['nl-NL', 'en-US'];

    public function behaviors()
    {
        return [
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
        ];
    }

    public function init()
    {
        parent::init();

        $cookies = Yii::$app->request->cookies;
        $language = $cookies->getValue('language', 'nl-NL');
        if (!in_array($language, static::$languages)) {
            $language = 'nl-NL';
        }
        Yii::$app->language = $language;
    }


    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Change the application language and store it in the session
     *
     * @param string $lang
     * @return Response
     */
    public function actionSetLanguage($lang = '')
    {
        if (in_array($lang, static::$languages)) {
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new Cookie([
                'name' => 'language',
                'value' => $lang,
                'expire' => strtotime('+1 year')
            ]));
        }

        if (Yii::$app->request->referrer) {
            return $this->redirect(Yii::$app->request->referrer);
        }

        return $this->goHome();
    }
}
