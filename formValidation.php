<?php
  $firstname = $lastname = $email = $message = "";
  $firstnameErr = $lastnameErr = $emailErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    //Check validity of input arguments
    if (empty($_POST["firstname"]))
    {
      $firstnameErr = "Name is required";
    }
    else
    {
      $firstname = test_input($_POST["firstname"]);
      //check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name))
      {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["lastname"]))
    {
      $lastnameErr = "Name is required";
    }
    else
    {
      $lastname = test_input($_POST["lastname"]);
      //check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name))
      {
        $lastnameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"]))
    {
      $emailErr = "Email is required";
    }
    else
    {
      $email = test_input($_POST["email"]);
      //check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["message"]))
    {
      $message = "";
    }
    else
    {
      $message = test_input($_POST["message"]);
    }

    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
