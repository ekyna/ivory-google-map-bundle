<?php

/*
 * This file is part of the Ivory Google Map bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

use PhpCsFixer\Finder;

$finder = Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
    ->setUsingCache(true)
    ->setRules([
        '@Symfony'               => true,
        'strict_param'           => true,
        'array_syntax'           => ['syntax' => 'short'],
        'binary_operator_spaces' => ['align_double_arrow' => true],
        'ordered_imports'        => true,
    ])
    ->setFinder($finder);
