<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class CreateTrait
 * @package aetiv\crudtrait
 */
trait CreateTrait
{
    public function actionCreate()
    {
        /** @var ActiveRecord $model */
        $model = $this->getModel();
        $scenarios = $model->scenarios();
        if (isset($scenarios['create'])) {
            $model->scenario = 'create';
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $this->view->params['menuControl'] = [
                'back' => [
                    'visible' => true,
                ],
                'change-admin-lang' => [
                    'visible' => true
                ]
            ];

            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
}
