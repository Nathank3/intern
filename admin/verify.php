<?php

include('connect.php'); // Include database connection

// Set default responseponse
$responseponse = array(
    'status' => 'error',
    'message' => ''
);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if email and password are set in the form data
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Use a prepared statement to protect against SQL injection
        $sql = "SELECT * FROM administrator WHERE email = ?";
        $query = $conn->prepare($sql);
        $query->execute(array($email));

        // Check for errors
        $errorInfo = $query->errorInfo();
        if ($errorInfo[0] !== '00000') {
            $response['message'] = "Database error: " . $errorInfo[2];
        } else {
            $row = $query->fetch();
            $count = $query->rowCount();

            if ($count > 0) {
                // Verify the entered password against the stored hashed password
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['aid'] = $row['aid'];
                    $response['status'] = 'success';
                    $response['message'] = 'Login successful';
                } else {
                    // Incorrect password
                    $response['message'] = 'Incorrect Password';
                }
            } else {
                // No user found with the provided email
                $response['message'] = 'Invalid Login credentials!';
            }
        }
    } else {
        $response['message'] = 'email or password not provided';
    }

    // Encode response as JSON and return
    echo json_encode($response);
    exit(); // Make sure to exit after sending the response
}
?>
