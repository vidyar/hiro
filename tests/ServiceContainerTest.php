<?php

class ServiceContainerTest extends PHPUnit_Framework_TestCase
{
    public function testWithArgument()
    {
        $config = ['some' => ['class' => '\Infor\Hiro\Tests\Service', 'arguments' => ['Test']]];
        $container = new Infor\Hiro\ServiceContainer($config);

        $this->assertEquals($container->some->arg, 'Test');
    }

    public function testWithCall()
    {
        $config = [
            'serviceWithArgument' => ['class' => '\Infor\Hiro\Tests\Service', 'arguments' => ['value']],
            'serviceWithCall' => ['class' => '\Infor\Hiro\Tests\Service', 'calls' => ['serviceWithArgument']]
        ];

        $container = new Infor\Hiro\ServiceContainer($config);

        $this->assertInstanceOf('\Infor\Hiro\Tests\Service', $container->serviceWithCall);
        $this->assertEquals($container->serviceWithCall->arg->arg, 'value');
    }
}
