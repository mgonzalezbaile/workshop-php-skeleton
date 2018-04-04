<?php

namespace SkeletonTest;

use PHPUnit\Framework\TestCase;
use Skeleton\SampleClass;

class SampleClassTest extends TestCase
{
    public function testOne()
    {
	$class = new SampleClass();

	$this->assertEquals(1, $class->one());
    }
}

