<?php 

namespace Madfortech\StartLearningPackage;

class StartLearningPackage
{

protected  $starts[
    'Some people wear Superman pajamas. Superman wears Chuck Norris pajamas',
    'Chuck Norris is the reason why\ Waldo is hiding'
];

public function __construct(array $starts = null)
{
    if($starts){
        $this->starts = $starts;
    }
    

} 

public function getRandomStart()
{
    return $this->starts[array_rand($this->starts)];

} 

    
}