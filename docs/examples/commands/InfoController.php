<?php

namespace yii\console\controllers;

/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2017 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\console\Controller;
use yii\helpers\Inflector;

/**
 * Display
 * @package yii\console\controllers
 */
class InfoController extends Controller
{
    public function actionIndex(){
        $this->stdout("eucliid v0.1 - Enhanced Unified CLI for Yii 2.0 Framework build with Docker\n");
    }
}