<?php

class SpeSkillTest
{
    
    private function digit_length($number) {
        $size = 0;
        while ($number != 0) {
            $number = intval($number/ 10);
            $size++;
        }
        return $size;
    }
    private function is_narcissistic($number) {
        
        $size = $this->digit_length($number);
        $auxiliary = $number;
        
        $result = 0;
        $digit = 0;
        while ($auxiliary != 0) {
        
            $digit = $auxiliary % 10;
        
            $auxiliary =  intval($auxiliary/ 10);
        
            $result = (pow($digit, $size)) + $result;
        }
        return $result;
    }
    

    public function narcissistic($number) {
    
        if ($this->is_narcissistic($number) == $number) {
            echo("true\n");
        } else {
            echo("false\n");
        }
    }

    public function parityOutlier( $integers ) {
        $odds   =   [];
        $evens  =   [];

        foreach( $integers as $n )
        {
            if( $n % 2 )
            {
                array_push( $odds, $n );
            } else {
                array_push( $evens, $n );
            }

            count( $evens ) == 1 ? print_r($evens)  : print_r($odds);
        }
    }

    public function findNeedle( $array, $string ) {

        foreach( $array as $item )
        {
            if( strpos($item, $string ) !== false )
            {
                print_r($item) . PHP_EOL;
            }
        }
    }

    public function blueOcean( $array1, $array2 ) 
    {
        foreach( $array1 as $item )
        {
            $result = array_intersect($array1, $array2);
            print_r( $result ) . PHP_EOL;
        }
    }
}

$speTest    =   new SpeSkillTest();
echo "Narcissistic" . PHP_EOL;
$speTest->narcissistic(153);
echo "Blue Ocean" . PHP_EOL;
$speTest->blueOcean([1,2,3,4,6,10], [1]);
echo "Parity Outlier" . PHP_EOL;
$speTest->parityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]);
echo "Find Needle" . PHP_EOL;
$speTest->findNeedle( ["red", "blue", "yellow", "black", "grey"], "blue");
?>
