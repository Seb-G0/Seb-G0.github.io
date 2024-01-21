<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Create an associative array with the form data
            $formData = [
                "Name" => $name,
                "Email" => $email,
                "Message" => $message,
            ];

            // Convert the array to a formatted string
            $formattedData = implode("\n", $formData);

            // Set your email address
            $to = "your_email@example.com";  // Replace with your actual email address

            // Set email subject
            $subject = "New Form Submission";

            // Send the email
            mail($to, $subject, $formattedData);

            // Display a confirmation message
            echo "<p>Thank you for your submission!</p>";
        }
        ?>