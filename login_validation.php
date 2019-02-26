<?php
@session_start();
//Student and Admin login validation code.
if(isset($_POST['user_name'])){
  $userN = test_input($_POST['user_name']);
  $passW = test_input($_POST['pass_word']);
  $userlist = file ('users.txt');

  //Admin page
  if($userN == 'admin' && $passW == 'password'){
    $_SESSION['loginCheck'] = 1;
    header('Location:admin.php');
    break;
  }

  foreach ($userlist as $user) {
      $user_details = explode('|', $user);
      //Student page
      if ($user_details[2] == $userN && $user_details[3] == $passW) {
        $_SESSION['loginCheck'] = 2;
        $_SESSION['temp1'] = $user_details[1];
        $_SESSION['temp0'] = $user_details[0];
        header('Location:student.php');
        break;
      }
      else{
        if(!$_POST['user_name']){
          $display = "Please enter User-Name.";
        }elseif(!$_POST['pass_word']) {
          $display = "Please enter Password.";
        }else{
          $display = "Invalid entry. Try again.";
        }
      }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>