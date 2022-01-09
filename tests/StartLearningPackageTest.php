<?php

namespace Madfortech\StartLearningPackage\Tests;

use Madfortech\StartLearningPackage\StartLearningPackage;
use PHPUnit\Framework\TestCase;

class StartLearningPackageTest extends TestCase
{
    /**@test */
    public function it_return_a_random_learning()
    {
        $starts = new StartLearningPackage([
            'I am learning package',
        ]);

        $start = $starts->getRandomStart();
        $this->assertSame('this is, $start');
    }
}
