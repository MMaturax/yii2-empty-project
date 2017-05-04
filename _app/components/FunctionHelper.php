<?php

namespace app\components;

use Yii;

class FunctionHelper
{

	public static function generateKeyViaTime($time = 0) {
		return md5(Yii::$app->params['apiTokenKey'] . $time . Yii::$app->params['apiTokenKey']);
	}

}