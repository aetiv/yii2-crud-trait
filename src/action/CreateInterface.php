<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait\action;

interface CreateInterface extends CrudAwareInterface
{
    /**
     * Create item
     * @return string
     */
    public function actionCreate();
}
