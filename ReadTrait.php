<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait;

use Yii;
use yii\db\ActiveRecord;

trait ReadTrait
{
    public function actionView()
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

        $this->view->params['menuControl'] = [
            'update' => [
                'visible' => true,
                'url' => ['update', $pk => $model->$pk]
            ],
            'delete' => [
                'visible' => true,
                'url' => ['delete', $pk => $model->$pk]
            ],
            'back' => [
                'visible' => true,
            ],
            'change-admin-lang' => [
                'visible' => true,
            ]
        ];

        return $this->render('view', [
            'model' => $model->findOne($id),
        ]);
    }
}
