<?php include_once 'helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<link rel="stylesheet" href="assets/css/login.css">
<style>
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
   font-family :'product sans' !important;
	font-size:48px !important;
	margin-top:20px;
	text-align:center;
}
body {
  background:url('assets/images/plane2.jpg') no-repeat 0px 0px;
	background-size: cover;
	background-attachment: fixed;
    background-position: center;

}
.login-form {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    border-radius: 0px;
}
input::placeholder{
    color:#ffff;
}
input{
    color:#ffff;
}
</style>
<div class="flex-container">
    <div class="login-form mt-5" style="height: 350px;background-color:transparent;">
        <h1 class="text-center text-secondary mb-4">Reset Password</h1>
        <div class="alert text-center alert-info mb-0" 
            style="margin-left: 60px; margin-right:60px;" role="alert">   
            An email will be send to you with the instructions on how to reset the password.
        </div>
        <form method="POST" action="includes/reset-request.inc.php">            
            <div class="flex-container">             
                <div>
                    <i class="fa fa-envelope text-primary"></i>
                </div>
                <div>
                    <input type="text" name="user_email" 
                        placeholder="Enter your registered email-id" class="form-input" required 
                        style="background-color:transparent;">
                </div>
            </div>
            <div class="submit">
            <button name="reset-req-submit" type="submit" class="button">
                Submit</button>                    
            </div>
        </form>                          
    </div>
</div>
<?php
if(isset($_GET['err']) || isset($_GET['mail'])) {
    if($_GET['err'] === 'invalidemail') {
        echo '<script>alert("Invalid email");</script>';
    } else if($_GET['err'] === 'sqlerr') {
        echo '<script>alert("An error occured");</script>';        
    } else if($_GET['mail'] === 'success') {
        echo '<script>alert("Email has been succesfully sent to you");</script>';        
    } else if($_GET['err'] === 'mailerr') {
        echo '<script>alert("An error occured");</script>';        
    }                    
} 
?>
<?php subview('footer.php'); ?> 