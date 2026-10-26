<!DOCTYPE html>
<html>
<body>

<h2>Upload a Text or Image File</h2>

<form method="post" enctype="multipart/form-data">
    Select file:
    <input type="file" name="myfile" accept=".txt,image/*" required>
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['myfile'];

    $filename = basename($file['name']);
    $tmpname = $file['tmp_name'];
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if (in_array($extension, ['txt', 'jpg', 'jpeg', 'png', 'gif'])) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            if (!is_dir("uploads")) {
                mkdir("uploads", 0755, true);
            }

            $newname = uniqid() . "_" . $filename;
            $destination = "uploads/" . $newname;

            if (move_uploaded_file($tmpname, $destination)) {
                echo "File uploaded successfully.";
            } else {
                echo "File upload failed.";
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Only text and image files are allowed.";
    }
}
?>

</body>
</html>