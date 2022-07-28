<?php  

include  'includes/header.php';
  include 'database/database.php';

  
  if (!isset($_GET['id'])){
    echo "<h1>Please check details</h1>";
  }
  else{
    $id = $_GET['id'];
    $result = $crud->getID($id); ?>

<div class="container card">
    <p>First Name : <?php echo $result['firstname']; ?></p>
    <p>Last Name :<?php echo $result['lastname']; ?></p>
    <p> Category :<?php echo $result['name']; ?></p>
    <p>D.O.B :<?php echo $result['dateofbirth']; ?></p>
    <p>Phone Number:<?php echo $result['phone_number']; ?></p>
    <p >Email Address  :<?php echo $result['Email_address']; ?></p>
    <p>Password  :<?php echo $result['PASS']; ?></p>
    <p><Address :<?php echo $result['Avatar']; ?> ></p>
    <!-- <p>Address :<?php echo $result['avatar']; ?></p> -->


</div>


<?php } ?>
<?php  include 'includes/footer.php'?>