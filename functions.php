<?php 
function generatePwd($length){
    $newPwd = "";

    $lettersRange = "abcdefghijklmnopqrstuvwxyz";
    
    $upperLetters = strtoupper($lettersRange);
    $numbers = "0123456789";
    $symbols = "!$%&/(){}[]#§*@£";
    
    $fullPsw = $lettersRange . $upperLetters . $numbers . $symbols;
    
    $lettersLen = strlen($fullPsw);

    for ($i=0; $i < $length; $i++) { 
        $randomNum = rand(0,$lettersLen-1);
        $currentLetter = $fullPsw[$randomNum];
        $newPwd .= $currentLetter;
    }



    return $newPwd . "TEST";
}
?>