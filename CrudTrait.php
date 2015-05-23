<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace aetiv\crudtrait;

/**
 * Class CrudTrait
 * @package aetiv\crudtrait
 */
trait CrudTrait
{
    use IndexTrait;
    use CreateTrait;
    use UpdateTrait;
    use DeleteTrait;
    use ReadTrait;
}
