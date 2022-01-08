<?php 

namespace Madfortech\StartLearningPackage\Tests;

use Madfortech\StartLearningPackage\StartLearningPackage;

use PHPUnit\Framework\TestCase;

class StartLearningPackageTest extends TestCase
{

    /**@test */
    public function it_return_a_random_learning(){
        
        $starts = new StartLearningPackage([
            'I am learning package',
        ]);

        $start = $starts->getRandomStart();

        $this->assertSame('I am learning package, $joke');

    }

    //  /**@test */
    //  public function it_return_a_predefined_learning(){
        
    //     $newstart[
    //         'Some people wear Superman pajamas. Superman wears Chuck Norris pajamas',
    //         'Chuck Norris is the reason why\ Waldo is hiding'
    //     ];

    //     $starts = new StartLearningPackage([
            
    //     ]);

    //     $start = $starts->getRandomStart();

    //     $this->assertContains($joke,$newstart);

    // }

}