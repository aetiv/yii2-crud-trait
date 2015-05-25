<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 25.05.15
 * Time: 23:08
 */

namespace aetiv\crudtrait\action;

interface DeleteInterface extends CrudAwareInterface
{
    /**
     * Delete row and redirect to index
     * @return string
     */
    public function actionDelete();
}
