<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password && $user_data['usertype']=="user")
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: usermain.php");
						die;
					}
					if($user_data['password'] === $password && $user_data['usertype']=="admin")
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: adminpanel.php");
						die;
					}
				}
			}

     
      echo "Błędny login lub hasło";
    }else
     {
      echo "Błędny login lub hasło";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/bd12abc9fe.js"
      crossorigin="anonymous"
    ></script>
    <title>Giga Stronka</title>
  </head>
  <body style="background-color: linear-gradient(147.35deg, #8fbc8f, #4b8063);">

  <div class="header" id="header" style="height: 2vh; margin: 5vh;">
      <a href="index.php"><img src="assets\logo2.png" alt="logo" /></a>
      <p class="boldtag">GIGA</p>
      <p class="thintag">RYBA.PL</p>

      <div class="login">
        <a href="login.php"><button class="zaloguj" id="login">Zaloguj</button></a>
        <a href="signup.php"><button class="zarejestruj" id="register">Dołącz</button></a>
     
      </div>
    </div>
    <!-- Login/Join form -->
    <div class="mainform">
      <div class="form_container" id="form_container">
        <form method="POST">
          <span>Zaloguj się</span><br />
          <span>Nazwa użytkownika</span>
          <input name="user_name" type="text" placeholder="Login" required />
          <span>Hasło</span>
          <input name="password" type="password" placeholder="Hasło" required /><br>

         
          <input type="submit" class="submit" value="Zaloguj" />
        </form>
         <!-- <input style="color: black;" type="text" id="capt" readonly="readonly">
          <button onclick="cap()">Odśwież</button>
          <input type="text" id="textinput"> -->
      </div>
    </div>
    </div>
    <!-- End Of Form -->

    <!-- Nav -->
    

    <!-- Footer -->
    <footer class="footer" id="footer">
      <span>Wykonał: Michał Ziółkowski, Bartłomiej Kamaszewski, Damian Janus</span>
      <a href="https://www.wsb.pl/warszawa/">Wyższa Szkoła Bankowa 2022</a>
    </footer>
    <!-- End Of Footer -->

    <!-- JS SRC -->
    <script src="app.js"></script>
    <!-- JS SRC END -->
  </body>
</html>
