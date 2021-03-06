<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait\action;

interface UpdateInterface extends CrudAwareInterface
{
    /**
     * Render update view and update the item
     * @return string
     */
    public function actionUpdate();
}
