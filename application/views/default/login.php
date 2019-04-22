<div class="jumbotron text-center">
  <h1>LOGIN</h1>
  <p>Member of AL_89 Helmet</p> 
</div>
<?php 
if(!empty($success_msg)){
?>
  <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <p></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
<?php 
}
?>
<?php 
if(!empty($error_msg)){
?>
  <div class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <p></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
<?php 
}
?>
</div>
<div class="row">
    <div class="col-4 text-center"></div>
    <div class="col-4">
      <form method="POST" action="<?php echo site_url('ctrl/login_validate'); ?>" class="was-validated">
        
        <div class="form-group">
          <label for="uname text-left">Username:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter your username" name="username" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="pwd text-left">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="password" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <center>
        <button type="submit" class="btn btn-primary">Submit</button>
        </center>
      </form>
    </div>
    <div class="col-4 text-center"></div>
</div>
