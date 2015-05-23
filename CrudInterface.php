<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace aetiv\crudtrait;

use Yii;
use yii\db\ActiveRecordInterface;
use yii\db\ActiveRecord;

/**
 * Interface CrudInterface - if controller use Crud Trait HE need implement crud interface
 * @package aetiv\crudtrait
 */
interface CrudInterface
{
    /**
     * Base CRUD model
     * @return ActiveRecordInterface|ActiveRecord
     */
    public function getModel();

    /**
     * Search model of the CRUD
     * @return ActiveRecordInterface|ActiveRecord
     */
    public function getSearchModel();
}
