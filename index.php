<?php

function countPatternOccurrences($text, $pattern) {
    // Initialize a counter to zero
    $count = 0;
    
    // Define the length of the pattern
    $pattern_length = strlen($pattern);
    
    // Slide through the text
    for ($i = 0; $i <= strlen($text) - $pattern_length; $i++) {
        // If a substring matches the pattern, increase the count
        if (substr($text, $i, $pattern_length) == $pattern) {
            $count++;
        }
    }

    return $count;
}

// Test the algorithm
$text = "tadadattaetadadadafa";
$pattern = "dada";
echo countPatternOccurrences($text, $pattern);  // This should print 3

?>
