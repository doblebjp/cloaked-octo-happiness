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
        // source directory is current working directory
        $c['config.source'] = getcwd();

        // destination directory is web
        $c['config.destination'] = function ($c) {
            return $c['config.source'].'/web';
        };

        // include and exclude path from source
        $c['config.include'] = [];
        $c['config.exclude'] = [];

        // keep selected files in destination
        $c['config.keep_files'] = [];

        // timezone
        $c['config.timezone'] = date_default_timezone_get();

        // encoding
        $c['config.encoding'] = 'UTF-8';
    }
}
