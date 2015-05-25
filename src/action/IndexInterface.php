<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 25.05.15
 * Time: 23:14
 */

namespace aetiv\crudtrait\action;

use yii\db\ActiveRecord;
use yii\db\ActiveRecordInterface;

interface IndexInterface
{
    /**
     * Search model of the CRUD
     * @return ActiveRecordInterface|ActiveRecord
     */
    public function getSearchModel();

    /**
     * Render Index Page
     * @return string
     */
    public function actionIndex();
}
