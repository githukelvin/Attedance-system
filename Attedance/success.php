<?php 
require './includes/header.php';
require './database/database.php';
?>

<h1 class="reg" style="color: green;">You have been register</h1>
<?php

echo $_POST['first_name']."<br/> ";
echo $_POST['last_name']."<br/> ";
echo $_POST['date']."<br/> ";
echo $_POST['select-number']."<br/> ";
echo $_POST['number']."<br/> ";
echo $_POST['email']."<br/> ";
echo $_POST['pass1']."<br/> ";
echo $_POST['pass2']."<br/> ";
echo $_POST['avatar']."<br/> ";




if(isset($_POST['submit'])){
    //extract values in form in array
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $dob = $_POST['date'];
    $category = $_POST['select-number'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $avatar = $_POST['avatar'];

// call function to insert and track if succes or not

    $isSuccess= $crud->insertAttendees ($fname,$lname,$dob,$number,$email,$pass,$avatar,$category) ;
    if($isSuccess){
      echo"<h1>Success</h1>";
      
    }
    else{
        echo "<h1>Error occured</h1>";
    }
}

 ?>


<?php require './includes/footer.php';?>