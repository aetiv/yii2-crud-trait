<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait\action;

interface CrudAwareInterface
{
    /**
     * Base CRUD model
     * @return ActiveRecordInterface|ActiveRecord
     */
    public function getModel();
}
