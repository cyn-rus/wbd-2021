<?php
  // start session
  session_start();

  // handle login
  if (isset($_POST['submit'])) {
    $input_user = $_POST['user'];
    $input_pw = $_POST['password'];
    if (isset($input_user) && isset($input_pw)) {
      if ($input_user !== '' && $input_pw !== '') {
        $users = file_get_contents('../data/users.txt');
        $users_array = explode("\n", $users);
        foreach ($users_array as $user) {
          $curr_user = explode(':', $user);
          if ($curr_user[0] == $input_user && $curr_user[1] == $input_pw) {
            header('Location: homepage.php');
          }
        }

        $incorrect = true;

      } else {
        $blank = true;
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Web App</title>

  <link rel="stylesheet" href="../styles/login.css?v<?php echo time() ?>">

</head>
<body>
  <div class='page'>
    <div class='form'>
      <form action='' method='post'>
        <label for='user'>User ID<span>*</span>:</label>
        <input type='text' id='user' name='user'><br>
        <label for='password'>Password<span>*</span>:</label>
        <input type='password' id='password' name='password'><br>
        <input name='submit' type='submit' value='Log In' class='log-in-btn' style='margin-bottom: 2rem'>
      </form>
    </div>
    <div class='error-msg'>
      <?php if (isset($incorrect)) {?>
        <h2>Incorrect User ID or/and Password</h2>
      <?php } ?>
      <?php if (isset($blank)) {?>
        <h2>Please fill all the forms needed</h2>
      <?php } ?>
    </div>
  </div>
</body>
</html>
