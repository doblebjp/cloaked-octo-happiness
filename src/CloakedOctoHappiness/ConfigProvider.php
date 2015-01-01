<?php

namespace CloakedOctoHappiness;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ConfigProvider implements ServiceProviderInterface
{
    /**
     * Default configuration values
     */
    public function register(Container $c)
    {
        // debug mode
        $c['debug'] = false;

        // source directory is current working directory
        $c['source'] = getcwd();

        // destination directory is web
        $c['destination'] = function ($c) {
            return $c['source'].'/web';
        };

        // include and exclude path from source
        $c['include'] = [];
        $c['exclude'] = [];

        // keep selected files in destination
        $c['keep_files'] = [];

        // timezone
        $c['timezone'] = date_default_timezone_get();

        // encoding
        $c['encoding'] = 'UTF-8';
    }
}
