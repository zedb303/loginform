<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file has been uploaded
    if (isset($_FILES['file'])) {
        $uploadDir = 'uploads/'; // Directory to save uploaded files
        $fileName = basename($_FILES['file']['name']);
        $uploadFilePath = $uploadDir . $fileName;

        // Create the uploads directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)) {
            echo "File uploaded successfully: " . htmlspecialchars($fileName);
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file uploaded or there was an error.";
    }
} else {
    echo "Invalid request.";
}
?>

?>