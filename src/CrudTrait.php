<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait;

use aetiv\crudtrait\action\DeleteTrait;
use aetiv\crudtrait\action\IndexTrait;
use aetiv\crudtrait\action\CreateTrait;
use aetiv\crudtrait\action\ReadTrait;
use aetiv\crudtrait\action\UpdateTrait;

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
