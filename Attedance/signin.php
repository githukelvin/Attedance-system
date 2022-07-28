<?php require './includes/header.php'?>
<h1 class="reg">Login</h1>
<div class="container form__container">
    <form action="viewlist.php" class="form" enctype="multipart/form-data">
   
        <div class="form-group">
            <label for="email">Enter Your Email</label><br>
            <input type="email" name="email" placeholder="Enter Your Email" id="email">
        </div>
        <div class="form-group">
            <label for="pass">Enter Password</label><br>
            <input type="password" name="pass1" placeholder="Enter Password" id="pass">
        </div>
        <div class="form-group ck">
           <input type="checkbox" name="" id="">
           <label for="check">Remember Me</label>
        </div>
        <div class="forgot">
        <small>Forgot Password <a href="">click here</a></small><br>
        <small>Don't have an account <a href="./sigin-up.php">Sign Up</a></small>
    </div>
        <button class="btn" type="submit">Login</button>
    </form>

    
</div>

<?php require'./includes/footer.php'?>