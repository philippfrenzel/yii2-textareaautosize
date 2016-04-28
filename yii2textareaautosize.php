<?php

 /**
 * This class is used to embed textarea autosize JQuery Plugin to my Yii2 Projects
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 * @license MIT
 */

namespace net\frenzel\textareaautosize;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;

class yii2textareaautosize extends InputWidget
{
	/**
	 * @var array the HTML attributes for the input tag.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $options = [];

    /**
     * @inerhit doc
     */

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {        
        parent::init();
		if(empty($this->options['rows'])) {
			$this->options['rows'] = 1;
		}
        Html::addCssClass($this->options, ['form-control', $this->options['id']]);
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $id = $this->options['id'];
        $view = $this->getView();
        CoreAsset::register($view);
        $js = "$('textarea." . $id . "').textareaAutoSize();";
        $view->registerJs($js, View::POS_READY);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {        
        $this->registerAssets();        
		if ($this->hasModel()) {
			echo Html::activeTextarea($this->model, $this->attribute, $this->options);
		} else {
			echo Html::textarea($this->name, $this->value, $this->options);
		}
    } 
}
