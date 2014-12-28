<?php

namespace CloakedOctoHappiness;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ConfigProvider implements ServiceProviderInterface
{
    /**
     * Configure default configuration values
     */
    public function register(Container $c)
    {
        // source directory is current working directory
        $c['source_dir'] = getcwd();

        // build directory is web
        $c['build_dir'] = function ($c) {
            return $c['source_dir'].'/web';
        };
    }
}
