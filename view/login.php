<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<script src="<?php echo DOC_ROOT; ?>/asstes/js/jQuery-1.11.0.js"></script>
<script src="<?php echo DOC_ROOT; ?>/asstes/js/ajax.js"></script>
</head>

<body>

<form id="login_form" role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email " name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div>
    <input type="hidden" name="url" value="/rest.php" >
    <input type="hidden" name="command" value="login" >
  </div>
  <button id="login" class="btn btn-default">Submit</button>
</form>

</body>

</html>
