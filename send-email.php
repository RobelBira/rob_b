





<?php
if(isset($_POST['submit'])) {
    // Code to execute when the submit button is clicked
    echo "submitted successfully!";

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process form data here
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send email or save to database here

  // Redirect to thank you page
  header("Location: send-email.php");
  exit();
}
if(isset($_POST['submit'])) {
    // Code to execute when the submit button is clicked
    echo "submitted successfully!";
  
?>


  