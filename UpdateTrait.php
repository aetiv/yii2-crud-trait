<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class UpdateTrait
 * @package aetiv\crudtrait
 */
trait UpdateTrait
{

    public function actionUpdate()
    {
        /** @var ActiveRecord $model */
        $model = $this->getModel();
        $scenarios = $model->scenarios();
        if (isset($scenarios['update'])) {
            $model->scenario = 'update';
        }

        $pk = 'id';
        if (method_exists($this, 'getPrimaryKeyName')) {
            $pk = $this->getPrimaryKeyName();
        }

        $id = Yii::$app->request->get($pk);
        $model = $model->findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            return $this->redirect(['index']);
        } else {
            $this->view->params['menuControl'] = [
                'back' => [
                    'visible' => true,
                ],
                'change-admin-lang' => [
                    'visible' => true,
                ]
            ];
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
}
