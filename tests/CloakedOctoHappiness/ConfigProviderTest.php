<?php

use Pimple\Container;
use CloakedOctoHappiness\ConfigProvider;

class ConfigProviderTest extends PHPUnit_Framework_TestCase
{
    public function testHasDefaults()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertArrayHasKey('config.source', $c);
        $this->assertArrayHasKey('config.destination', $c);
        $this->assertArrayHasKey('config.include', $c);
        $this->assertArrayHasKey('config.exclude', $c);
        $this->assertArrayHasKey('config.keep_files', $c);
        $this->assertArrayHasKey('config.timezone', $c);
        $this->assertArrayHasKey('config.encoding', $c);
    }

    public function testDefaultSourceDirIsCwd()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertEquals(getcwd(), $c['config.source']);
    }

    public function testDefaultDestinationDirIsWeb()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertEquals(getcwd().'/web', $c['config.destination']);
    }
}
