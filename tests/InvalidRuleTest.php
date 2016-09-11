<?php

namespace Michaskruzelka\Lacinka\Tests;

use Michaskruzelka\Lacinka\Converter;

class InvalidRuleTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->converter = (new Converter(false))->initRules(__DIR__ . '/invalid_rule.xml');
    }

    /**
     * @expectedException \Exception
     */
    public function testConvert()
    {
        $expected = 'Test';
        $actual = $this->converter->convert('Тэст');
        $this->assertEquals($expected, $actual);
    }
}