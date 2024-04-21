<?php 
function bmi($weight, $height)
{
    $bmi = $weight / pow($height, 2);
    
    return match(true) {
        $bmi <= 18.5 => 'Underweight',
        $bmi <= 25.0 => 'Normal',
        $bmi <= 30.0 => 'Overweight',
        $bmi > 30 => 'Obese',
    };
}