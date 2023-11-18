<?php
require 'config.php';

$response = array();

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($db, $_GET['id']);

    $query = "SELECT * FROM approval WHERE id=?";
    
    $stmt = $db->prepare($query);

    if (!$stmt) {
        $response['status'] = 500;
        $response['message'] = 'Database error: ' . $db->error;
    } else {
        $stmt->bind_param("i", $id); // Bind the ID to the prepared statement
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $approval = $result->fetch_assoc();

            $response['status'] = 200;
            $response['message'] = 'Details Fetched Successfully by ID';
            $response['data'] = $approval;
        } else {
            $response['status'] = 404;
            $response['message'] = 'Details ID Not Found';
        }
        $stmt->close();
    }
} else {
    $response['status'] = 400; // Bad request
    $response['message'] = 'Invalid Request';
}

header('Content-Type: application/json');
echo json_encode($response);
