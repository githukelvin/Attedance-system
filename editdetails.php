<?php
 require './database/database.php';

   
//   echo $_POST['attend'];

if (isset($_POST['submit'])){
    //extract values in form in array
    $id =$_POST['attend'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $dob = $_POST['date'];
    $category = $_POST['select-number'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $avatar = $_POST['avatar'];

    //call crud function
    $result = $crud->updateAttendee($id,$fname,$lname,$dob,$number,$email,$pass,$avatar,$category );


    if ($result) {
        header(' Location: viewlist.php');
    } else {
       echo"<h1>ERROR OCURRED RETRY</h1>";
    //    header('Location: signin.php ');
    }
}
  else{
    echo "error";
}

?>