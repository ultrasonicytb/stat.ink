<?php
/**
 * @copyright Copyright (C) 2016 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace app\assets;

use yii\web\AssetBundle;

class BattleThumbListAsset extends AssetBundle
{
    public $sourcePath = '@app/resources/.compiled/stat.ink';
    public $js = [
        'battle-thumb-list.js',
    ];
    public $css = [
        'battle-thumb-list.css',
    ];
    public $depends = [
        AppAsset::class,
    ];
}
