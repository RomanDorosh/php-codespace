<?php
    // function sumArray($arrNum) {
    //     $sum = 0;
    //     foreach($arrNum as $value) {
    //         $sum += $value;
    //     }
    //     return $sum;
    // }

    // function averageAge($arrPeople) {
    //     $sum = 0;
    //     foreach($arrPeople as $value) {
    //         $sum += $value["age"];
    //     }
    //     return $sum / count($arrPeople);
    // }

    // function findMax($input) {
    //     return max($input);
    // }

    // function findMax($valores):int {
    //     $max = $valore[0];
    //     foreach ($valores as $valor){
    //         if ($valor > $max) {
    //             $max = $valor;
    //         }
    //     }
    //     return $max;
    // }

    // function filterAge($people, $num) {
    //     $newArr = [];
    //     foreach ($people as $person) {
    //         if($person["age"] >= $num) {
    //             array_push($newArr, $person);
    //         }
    //     };
    //     return $newArr;
       
    // }

    // function reverseString($input){
    //     return (strrev($input));
    // }

    function reverseString($input){
        $arr = mb_str_split($input, 1, "UTF-8");
        return implode("", array_reverse($arr));
        
    }

    function reverseWords($input){
        $arr = explode(" ", $input);
        return implode(" ", array_reverse($arr));
        
    }

    function reverseCharactersInWords($input){
        $arr = explode(" ", $input);
        $newArr = [];
        foreach($arr as $value) {
            $arr = mb_str_split($value, 1, "UTF-8");
            $revValue=implode("", array_reverse($arr));
            array_push($newArr, $revValue);
        }
        return implode(" ", $newArr);
    }