<?php

 /**
 * This class is used to embed textarea autosize JQuery Plugin to my Yii2 Projects
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 * @license MIT
 */

namespace net\frenzel\textareaautosize;

use Yii;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\jui\InputWidget;

class yii2textareaautosize extends InputWidget
{
    /**
     * @var array clientOptions the HTML attributes for the widget container tag.
     */
    public $clientOptions = [];

    /**
     * @var array HTML attributes for the displayed input
     */
    private $_displayOptions = [];

    /**
     * @inerhit doc
     */
    private $_pluginName = 'textareaautosize';

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {        
        ob_start();
        ob_implicit_flush(false);

        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }        
        parent::init();
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $id = $this->options['id'];
        $view = $this->getView();
        CoreAsset::register($view);
        $cleanOptions = $this->getClientOptions();
        $js[] = "jQuery('textarea.element-$id').textareaAutoSize($cleanOptions);";
        $view->registerJs(implode("\n", $js),View::POS_READY);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {        
        $assets = ob_get_clean();
        echo $assets;

        $this->renderInput();
        $this->registerAssets();        
    } 

    /**
     * Renders the widget.
     */
    public function renderInput()
    {   
        Html::addCssClass($this->_displayOptions, 'element-' . $this->options['id']);
        Html::addCssClass($this->_displayOptions, 'form-control');
        $this->_displayOptions['rows'] = 1;
        $input = Html::activeTextarea($this->model, $this->attribute, $this->_displayOptions);
        echo $input;
    }

    /**
     * @return array the options for the text field
     */
    protected function getClientOptions()
    {
        return Json::encode($this->clientOptions);
    }

}
