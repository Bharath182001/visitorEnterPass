<?php

// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

// Check for database connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Initialize a default response
$response = array("status" => 500, "message" => "Internal server error.");

// Check if 'id' and 'exitApproval' are set in the POST data
$id = isset($_POST['id']) ? $_POST['id'] : null;
$exitApproval = isset($_POST['exitApproval']) ? $_POST['exitApproval'] : null;

if ($id !== null && $exitApproval !== null) {
    $sql = "UPDATE approval SET outTime = NOW() WHERE id = ?";

    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $response = [
                    'status' => 200,
                    'message' => 'Watchman approved successfully'
                ];
            } else {
                $response = [
                    'status' => 404,
                    'message' => 'No matching records found for the provided ID.'
                ];
            }
        } else {
            $response = [
                'status' => 400,
                'message' => 'Statement execution failed: ' . $stmt->error
            ];
        }

        $stmt->close();
    } else {
        $response = array("status" => 500, "message" => "Statement preparation failed: " . $db->error);
    }
}

// Send the response back to the JavaScript code
echo json_encode($response);
