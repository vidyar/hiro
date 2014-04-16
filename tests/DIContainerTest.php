<?php

namespace Infor\Hiro\Tests;

class DIContainerTest extends \PHPUnit_Framework_TestCase
{
    public function testWithString()
    {
        $container = new \Infor\Hiro\DIContainer();
        $container->param = 'value';

        $this->assertEquals('value', $container->param);
    }

    public function testWithClosure() {
        $container = new \Infor\Hiro\DIContainer();
        $container->service = function($c) {
            return new \Infor\Hiro\Tests\Service();
        };


        $this->assertInstanceOf('\Infor\Hiro\Tests\Service', $container->service);
    }
}
