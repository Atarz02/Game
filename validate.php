<?php
// Validate form data
$username = $_POST['username'];
$email = $_POST['email'];

if (empty($username) || empty($email)) {
  echo "Please fill in all fields.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email address.";
} else {
  echo "Form data is valid.";
}
?>