<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 17/07/2018
 * Time: 14:39
 */

namespace app\components;


use yii\helpers\Html;
use yii\helpers\Json;

class ActiveField extends \yii\widgets\ActiveField
{
    public function datepickerInput($options = [])
    {
        DatePickerAsset::register($this->form->getView());
        $this->registerScript(isset($options['clientOptions']) ? $options['clientOptions'] : false);
        $this->registerEvent(isset($options['clientEvents']) ? $options['clientEvents'] : false);

        return $this;
    }

    public function calendarInput($options = [])
    {
        $clientOptions = !empty($options['clientOptions']) ? $options['clientOptions'] : [];
        $clientEvents = !empty($options['clientEvents']) ? $options['clientEvents'] : [];
        $options = !empty($options['options']) ? $options['options'] : [];

        if (!isset($options['id'])) {
            $options['id'] = $clientOptions['id'] = $clientEvents['id'] = Html::getInputId($this->model, $this->attribute) . '_inline';
        }

        $this->parts['{input}'] = Html::tag('div', Html::activeHiddenInput($this->model, $this->attribute, $this->inputOptions), $options);

        DatePickerAsset::register($this->form->getView());
        $this->registerScript($clientOptions);
        $this->registerEvent($clientEvents);

        return $this;
    }

    protected function registerScript($options = [])
    {
        if($options === false) {
            return;
        }

        if(!isset($options['language']) && ($language = $this->getLanguage()) !== null) {
            $options['language'] = $language;
        }

        $configure = !empty($options) ? Json::encode($options) : '';
        if (!isset($options['id'])) {
            $options['id'] = Html::getInputId($this->model, $this->attribute);
        }
        $this->form->getView()->registerJs("jQuery('#{$options['id']}').datepicker($configure);");
    }
    protected function registerEvent($options = [])
    {
        if($options === false) {
            return;
        }

        if (!isset($options['id'])) {
            $id = Html::getInputId($this->model, $this->attribute);
        } else {
            $id = $options['id'];
            unset($options['id']);
        }
        foreach ($options as $event => $handle) {
            $this->form->getView()->registerJs("jQuery('#{$id}').on('$event', $handle);");
        }
    }

    protected function getLanguage()
    {
        $language = str_replace('-', '_', strtolower(\Yii::$app->language));
        if(strpos($language, '_') !== false) {
            $language = explode('_', $language)[0];
        }
        if($language === 'en') {
            $language = null;
        }
        return $language;
    }
}