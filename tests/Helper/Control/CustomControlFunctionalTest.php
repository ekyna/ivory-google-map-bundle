<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\Tests\GoogleMapBundle\Helper\Control;

use Ivory\Tests\GoogleMapBundle\Helper\HelperFactory;
use Ivory\Tests\GoogleMap\Helper\Functional\Control\CustomControlFunctionalTest as BaseCustomControlFunctionalTest;

/**
 * @author GeLo <geloen.eric@gmail.com>
 *
 * @group functional
 * @group test
 */
class CustomControlFunctionalTest extends BaseCustomControlFunctionalTest
{
    /**
     * {@inheritdoc}
     */
    protected function createApiHelper()
    {
        return HelperFactory::createApiHelper();
    }

    /**
     * {@inheritdoc}
     */
    protected function createMapHelper()
    {
        return HelperFactory::createMapHelper();
    }
}
