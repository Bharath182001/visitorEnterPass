<?php
include "config.php";
// Get the ID from the AJAX request
if (isset($_POST['id'])) {
    $recordId = $_POST['id'];

    // Your update query with the ID as a condition
    $updateQuery = "UPDATE approval SET exitApproval = '1' WHERE id = '$recordId'";

    if (mysqli_query($db, $updateQuery)) {
        echo "Value updated successfully.";
    } else {
        echo "Error updating value: " . mysqli_error($db);
    }
} else {
    echo "Invalid ID provided.";
}

mysqli_close($db);
?>
