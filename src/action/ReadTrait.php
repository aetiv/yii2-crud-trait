<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait\action;

use Yii;
use yii\db\ActiveRecord;

trait ReadTrait
{
    /**
     * Render view(view item)
     * @return string
     */
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

        return $this->render('view', [
            'model' => $model->findOne($id),
        ]);
    }
}
