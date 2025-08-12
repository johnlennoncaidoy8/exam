<?php
function shortestWordLength($str) {
  
    $words = explode(" ", $str);
    
    $minLength = PHP_INT_MAX;
    foreach ($words as $word) {
        $len = strlen($word);
        if ($len < $minLength) {
            $minLength = $len;
        }
    }

    return $minLength;
}

echo shortestWordLength("TRUE FRIENDS ARE ME AND YOU"); 
echo "\n";
echo shortestWordLength("I AM THE LEGENDARY VILLAIN"); 
?>
