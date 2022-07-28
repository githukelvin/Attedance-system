<?php
 require './database/database.php';

   


if (isset($_POST['submit'])) {
    //extract values in form in array
    $id = $_POST['id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $dob = $_POST['date'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $category = $_POST['select-number'];

    //call crud function
    $result = $crud->updateAttendee($id,$fname,$lname,$dob,$number,$email,$pass,$avatar,$category);


    if ($result) {
        header(' Location: viewlist.php');
    } else {
        header('Location:  signin.php');
    }
}
else{
    echo "error";
}
?>