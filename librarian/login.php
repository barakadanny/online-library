<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Librarian Login</title>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="function.php" method="POST">
                <?php 
                    session_start();
                    if(isset($_SESSION['message'])):
                  ?>
                  <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                      <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                      ?>
                      </div>
                  <?php endif ?>
                <input type="text" name="email" placeholder="enter your mail here" />
                <input type="password" name="password" placeholder="password" />
                <button name="login">login</button>
            </form>
        </div>
    </div>
</body>
</html>