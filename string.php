<?php
$strings = ["Hello", "World", "PHP", "Programming"];
$totalStrings = count( $strings );

for ( $i = 0; $i < $totalStrings; $i++ ) {
    $string = $strings[$i];

    $vowelCount = preg_match_all( '/[aeiouAEIOU]/', $string );

    $reversedString = strrev( $string );

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
