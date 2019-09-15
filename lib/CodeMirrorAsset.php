<?php
namespace yii2cmf\codemirror;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\web\View;

class CodeMirrorAsset extends AssetBundle
{

    public $sourcePath = '@vendor/yii2cmf/yii2-codemirror-asset';

    public $jsOptions = [
        'position' => View::POS_END
    ];

    public $js = [
        'lib/codemirror.js',
    ];

    public $css = [
        'lib/codemirror.css'
    ];

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $depends = [
        JqueryAsset::class
    ];

    public function init()
    {
        parent::init();
        if (isset(\Yii::$app->view->params['codemirror_theme'])) {
            $this->css[] = 'lib/theme/'.\Yii::$app->view->params['codemirror_theme'].'.css';
            \Yii::$app->view->registerJsVar('codemirror_theme', \Yii::$app->view->params['codemirror_theme']);
        }
        if (isset(\Yii::$app->view->params['codemirror_mode'])) {
            $this->js[] = 'lib/mode/'.\Yii::$app->view->params['codemirror_mode'].'/'.\Yii::$app->view->params['codemirror_mode'].'.js';
            \Yii::$app->view->registerJsVar('codemirror_mode', \Yii::$app->view->params['codemirror_mode']);
        } else {
            $this->js[] = 'lib/mode/clike/clike.js';
        }

    }
}