<?php

/*
 * This file is part of the FastCodeCrudBundle package.
 *
 * (c) Miguel Malavé <mmalave.fastcode@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FastCode\Bundle\CrudBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Miguel Malavé <mmalave.fastcode@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('fast_code_crud');

        return $treeBuilder;
    }
}
