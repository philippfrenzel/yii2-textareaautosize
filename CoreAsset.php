<?php

namespace net\frenzel\textareaautosize;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class CoreAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/textarea-autosize/dist';

    /**
     * [$css description]
     * @var array
     */
    public $css = [];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'jquery.textarea_autosize.min.js',
    ];
}
