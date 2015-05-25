<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait;

use aetiv\crudtrait\action\CreateInterface;
use aetiv\crudtrait\action\DeleteInterface;
use aetiv\crudtrait\action\IndexInterface;
use aetiv\crudtrait\action\ReadInterface;
use aetiv\crudtrait\action\UpdateInterface;
use Yii;
use yii\db\ActiveRecordInterface;
use yii\db\ActiveRecord;

/**
 * Interface CrudInterface - if controller use Crud Trait HE need implement crud interface
 * @package aetiv\crudtrait
 */
interface CrudInterface extends IndexInterface, CreateInterface, UpdateInterface, DeleteInterface, ReadInterface
{
}
