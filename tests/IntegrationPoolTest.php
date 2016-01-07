<?php

/*
 * This file is part of php-cache\filesystem-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>, Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\Filesystem\tests;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use Cache\IntegrationTests\CachePoolTest;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class IntegrationPoolTest extends CachePoolTest
{
    /**
     * @type Filesystem
     */
    private $filesystem;

    public function createCachePool()
    {
        return new FilesystemCachePool($this->getFilesystem());
    }

    private function getFilesystem()
    {
        if ($this->filesystem === null) {
            $this->filesystem = new Filesystem(new Local(__DIR__.'/'));
        }

        return $this->filesystem;
    }
}
