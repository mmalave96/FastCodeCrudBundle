<?php

/*
 * This file is part of the FastCodeCrudBundle package.
 *
 * (c) Miguel Malavé <mmalave.fastcode@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FastCode\Bundle\CrudBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Miguel Malavé <mmalave.fastcode@gmail.com>
 */
class FastCodeCrudBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
