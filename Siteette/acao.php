<?php
include_once ('database.php');

/*if (isset($_POST['submit'])) {
 $file= $_FILES['file'];
$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tempname'];

$query = mysqli_query($sql, "insert into img (file) valures('$filename')");
if(move_uploaded_file($tempname, )){}
}else{ die ;}
*/
if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageType = $_FILES['image']['type'];

    // Prepare and execute the SQL query
    $stmt = $sql->prepare("INSERT INTO post (image_data, image_type) VALUES (?, ?)");
    $stmt->bind_param("bs", $imageData, $imageType);
    $stmt->send_long_data(0, $imageData); // Bind the long data for the BLOB
    
    if ($stmt->execute()) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
} else {
    echo "No file uploaded or there was an upload error.";
}

$sql->close();
?>
