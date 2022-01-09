<?php 
$data = [];
if( isset($_GET['submit']) ){
   
  if( ! empty($_GET['email']) ){
     
    echo 'Your email : ' . $_GET['email'];
    $email = $_GET['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $data['emailValidation'] = false;
      }
      else {
        $data['emailValidation'] = true;
      }
      
  }
   
}
 
?>
<?php include 'header.php';?>



<div class="container mt-5">
<form action="" method="GET" novalidate autocomplete="off">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="
    <?php echo (isset($email))?$email:'';?>
    " aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <div class="valid-feedback" style="display:<?php echo (isset($data['emailValidation']) and $data['emailValidation']) ? 'block':'none';?>" >
        Looks good!
      </div>
    <div class="invalid-feedback" style="display:<?php echo (isset($data['emailValidation']) and !$data['emailValidation']) ? 'block':'none';?>">
        Please provide a valid city.
      </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" readonly
     onfocus="this.removeAttribute('readonly');" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" name="checkBox" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    
<?php include 'footer.php';?>