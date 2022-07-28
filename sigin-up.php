<?php
$title = 'index';
require_once './database/database.php';
 require 'includes/header.php';
 $carts = $crud->getcategory();
 ?>

<h1 class="reg">Registration For Student/Lecturer</h1>

<div class="container form__container">
    <form action="success.php" class="form" enctype="multipart/form-data" method="post">
    <div class="form-group">
            <label for="first_name">First Name</label><br>
            <input type="text" name="first_name" placeholder="Enter Your First Name" id="first_name">
        </div>
        <div class="form-group">
            <label for="last_name"> Last Name </label><br>
            <input type="text" name="last_name" placeholder="Enter Your last Name" id="last_name">
        </div>
        <div class="form-group">
            <label for="datepicker">Enter Your D.O.B</label><br>
            <input type="text" name="date" placeholder="Format yy/mm/dd" id="datepicker">
        </div>
        <div class="form-group">
            <label for="select">Select Who you are</label><br>
            <select name="select-number" id="select">
             <?php while($r = $carts->fetch(PDO::FETCH_ASSOC)) {?>
             <option value="<?php echo  $r['category_id'];?>"><?php echo  $r["name"];?></option>

             <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="number">Enter Your Phone Number</label><br>
       
            <input type="text" name="number" placeholder="Enter Your Phone" id="number">
        </div>
        <div class="form-group">
            <label for="email">Enter Your Email</label><br>
            <input type="email" name="email" placeholder="Enter Your Email" id="email">
        </div>
        <div class="form-group">
            <label for="pass">Enter Password</label><br>
            <input type="password" name="pass1" placeholder="Enter Password" id="pass">
        </div>
        <div class="form-group">
            <label for="pass">Confirm Password</label><br>
            <input type="password" name="pass2" placeholder="Retype Password" id="pass1">
        </div>
        <div class="form-group">
            <label for="avatar">Enter Address</label></label><br>
          <input type="text" name="avatar" id="avatar">
        </div>
        <div class="forgot">
        <small>Already have an account <a href="./signin.php">Sign In</a></small>
        </div>
        <button class="btn" type="submit" name="submit">Register</button>
    </form>
    

</div>


<?php require'./includes/footer.php'?>