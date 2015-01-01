<?php

use Pimple\Container;
use CloakedOctoHappiness\ConfigProvider;

class ConfigProviderTest extends PHPUnit_Framework_TestCase
{
    public function testHasDefaults()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertArrayHasKey('source', $c);
        $this->assertArrayHasKey('destination', $c);
        $this->assertArrayHasKey('include', $c);
        $this->assertArrayHasKey('exclude', $c);
        $this->assertArrayHasKey('keep_files', $c);
        $this->assertArrayHasKey('timezone', $c);
        $this->assertArrayHasKey('encoding', $c);
    }

    public function testDefaultSourceDirIsCwd()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertEquals(getcwd(), $c['source']);
    }

    public function testDefaultDestinationDirIsWeb()
    {
        $c = new Container();
        $c->register(new ConfigProvider());
        $this->assertEquals(getcwd().'/web', $c['destination']);
    }
}
