<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait;

use Yii;
use yii\db\ActiveRecordInterface;
use yii\db\ActiveRecord;

trait DeleteTrait
{
    public function actionDelete()
    {
        /** @var ActiveRecordInterface|ActiveRecord $model */
        $model = $this->getModel();
        $scenarios = $model->scenarios();
        if (isset($scenarios['delete'])) {
            $model->scenario = 'delete';
        }

        $pk = 'id';
        if (method_exists($this, 'getPrimaryKeyName')) {
            $pk = $this->getPrimaryKeyName();
        }

        $id = Yii::$app->request->get($pk);
        $model->findOne($id)->delete();
        return $this->redirect(['index']);
    }
}
