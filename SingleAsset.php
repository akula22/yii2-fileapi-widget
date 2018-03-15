<?php

namespace akula22\fileapi;

use yii\web\AssetBundle;

/**
 * Single upload asset bundle.
 */
class SingleAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
	public $sourcePath = '@akula22/fileapi/assets';

    /**
     * @inheritdoc
     */
	public $css = [
	    'css/single.css'
	];

    /**
     * @inheritdoc
     */
	public $depends = [
		'akula22\fileapi\Asset'
	];
}
