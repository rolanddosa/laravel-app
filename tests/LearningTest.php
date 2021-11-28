<?php

use Tests\TestCase;
use function PHPUnit\Framework\assertTrue;

$globalString = "global string";


class LearningTest extends TestCase
{

    public function testFirstLearningTest()
    {
        assertTrue(true);
    }

    public function testStringConcat()
    {
        $word = "pass";
        self::assertEquals("Test passes", "Test " . $word . "es");
    }

    public function testAccessingGlobalString()
    {
        global $globalString;
        echo $globalString;
        self::assertEquals("global string", $globalString);
    }

    public function testSumFunction()
    {
        self::assertEquals(10, Learning::sumTerms(3, 7));
    }


}
