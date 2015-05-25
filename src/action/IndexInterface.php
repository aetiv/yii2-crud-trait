<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 25.05.15
 * Time: 23:14
 */

namespace aetiv\crudtrait\action;

interface IndexInterface
{
    /**
     * Search model of the CRUD
     * @return ActiveRecordInterface|ActiveRecord
     */
    public function getSearchModel();
}
