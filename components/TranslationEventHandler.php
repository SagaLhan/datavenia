<?php

namespace app\components;

use Yii;
use yii\i18n\MissingTranslationEvent;

class TranslationEventHandler
{
    /**
     * @param MissingTranslationEvent $event
     */
    public static function handleMissingTranslation(MissingTranslationEvent $event)
    {
        if (YII_ENV_DEV) {
            $filename = Yii::getAlias('@app') . '/messages/' . Yii::$app->language . '/' . $event->category . '.php';
            $translations = require($filename);
            $event->translatedMessage = 'MISSING: ' . $event->category . '.' . $event->message . ' FOR LANGUAGE ' . $event->language . ' @';
            $translations[$event->message] = $event->message;
            file_put_contents($filename, '<?php return ' . var_export($translations, true) . ';');
        }
    }
}