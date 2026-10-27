<?php
$str = "hello world";

echo "Original String: " . $str . "<br>";
echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "First Character Uppercase: " . ucfirst($str) . "<br>";
echo "Each Word Capitalized: " . ucwords($str) . "<br>";
echo "Replace: " . str_replace("world", "PHP", $str) . "<br>";
echo "Substring: " . substr($str, 0, 5) . "<br>";
?>