<?php
// Open the file in read mode
$file = fopen("myfile.txt", "r");

if ($file) {
    // Read the entire file
    $content = fread($file, filesize("myfile.txt"));

    // Display the file content with line breaks
    echo nl2br($content);

    // Close the file
    fclose($file);
} else {
    echo "Unable to open file.";
}
?>