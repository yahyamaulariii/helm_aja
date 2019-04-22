<div class="jumbotron text-center">
  <h1>Register</h1>
  <p>Jika Anda sudah memiliki account atau akun dengan kami, silahkan login di halaman login.</p> 
</div>
<div class="row">
    <div class="col-4 text-center"></div>
    <div class="col-4">
      <form method="POST" action="<?php echo site_url('ctrl/register_validate'); ?>" class="was-validated">
        <div class="form-group">
          <label for="uname text-left">Fullname:</label>
          <input type="text" class="form-control" id="uname" name="full_name" placeholder="Enter your fullname" name="fname" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
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
        <div class="form-group">
          <label for="uname text-left">Email:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter your email" name="email" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="uname text-left">No. Telfon:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter your phone number" name="no_telp" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="uname text-left">Alamat:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter your address" name="alamat" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
          </label>
        </div>
        <center>
        <button type="submit" class="btn btn-primary">Submit</button>
        </center>
      </form>
    </div>
    <div class="col-4 text-center"></div>
</div>
