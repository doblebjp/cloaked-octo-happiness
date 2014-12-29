<?php

use Pimple\Container;
use CloakedOctoHappiness\ConfigProvider;

class ConfigProviderTest extends PHPUnit_Framework_TestCase
{
    public function testDefaultSourceDirIsCwd()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertEquals(getcwd(), $c['config.source']);
    }

    public function testDefaultBuildDirIsWeb()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertEquals(getcwd().'/web', $c['config.destination']);
    }
}
