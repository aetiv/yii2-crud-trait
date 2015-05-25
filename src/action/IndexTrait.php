<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait\action;

use Yii;
use yii\data\ActiveDataProvider;

trait IndexTrait
{
    public function actionIndex()
    {
        $model = $this->getSearchModel();
        /** @var ActiveDataProvider $dataProvider */
        $dataProvider = $model->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
}
