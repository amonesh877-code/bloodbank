<?php
require_once __DIR__ . '/connect.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $blood = $_POST['blood'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO emergency_requests 
              (patient_name, blood_group, location, contact_number) 
              VALUES ('$name', '$blood', '$location', '$contact')";

    if(mysqli_query($conn, $query)) {
        echo "Emergency request sent successfully!";
        
        // Fetch matching donors
        $donors = mysqli_query($conn, "SELECT * FROM donors WHERE blood_group='$blood'");

        while($d = mysqli_fetch_assoc($donors)) {
            $email = $d['email'];
            $msg = "Urgent: Blood needed for $name ($blood) at $location. Contact: $contact";

            // Send email (basic)
            mail($email, "Emergency Blood Request", $msg);
        }

    } else {
        echo "Error!";
    }
}
?>