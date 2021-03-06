<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

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
  <body>


    <!-- Nav -->
    <div class="nav-container">
      <div class="nav_hidden" id="navbar">
        <ul>
          <li>
            <a href="#header"><i class="fa-solid fa-user fa-2x"></i></a>
          </li>
          <li>
            <a href="index.php"><i class="fa-solid fa-user-pen fa-2x"></i></a>
          </li>
          <li>
            <a href="#footer"><i class="fa-solid fa-address-book fa-2x"></i></a>
          </li>
          <li>
            <a href="#header"><i class="fa-solid fa-circle-up fa-2x"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End of Nav -->

    <!-- Header section -->
    <div class="header" id="header">
      <img src="assets\logo2.png" alt="logo" />
      <p class="boldtag">GIGA</p>
      <p class="thintag">RYBA.PL</p>

      <div class="usericon">
          <a href="logout.php"><i class="fa-solid fa-user fa-2x"></i></a>
          <?php echo "<span>" .$user_data['user_name']; "</span>"; ?>
      </div>  

    </div>
    <!-- End of Header section -->

    <!-- Content Section -->
    <div class="main">
      <div class="article1">
        <h1 class="gigarybak">GIGA RYBAK PRZY GIGA ??ODZI</h1>
        <p class="opis">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ullam officia
          iusto quaerat omnis sequi explicabo laudantium similique, at deserunt odit unde
          sint debitis, non suscipit, esse laborum ipsam nihil velit ratione blanditiis
          eligendi exercitationem culpa! Nihil eligendi suscipit quasi ratione debitis
          cupiditate assumenda odio velit? Omnis modi temporibus nemo dolores neque
          quaerat, commodi aliquid autem ullam cupiditate, laudantium hic quae, minus
          eligendi aut pariatur voluptatem tempore beatae? Nobis incidunt molestiae ipsum
          dolorum quasi sint provident! Perferendis, consequatur laudantium. Est
          voluptatem quas earum ducimus recusandae ipsam quia reiciendis tempore minus.
          Qui dolores quos mollitia. Ad pariatur illum iusto quis doloribus corrupti,
          ratione numquam tempora, beatae, rerum repudiandae. Architecto enim officiis
          eligendi quas molestias, quos voluptatibus voluptas consectetur perspiciatis,
          facilis dolor aut cupiditate repellat aspernatur iure? Voluptates hic tempora
          odit reprehenderit voluptatum doloribus beatae dolor aliquam dolores? Expedita
          id accusamus non.
        </p>
        <img src="assets/gigarybak.png" alt="gigarybak" srcset="" />
      </div>
      <div class="article2">
        <h1 class="gigarybak">GIGA W??DKA</h1>
        <p class="opis">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ullam officia
          iusto quaerat omnis sequi explicabo laudantium similique, at deserunt odit unde
          sint debitis, non suscipit, esse laborum ipsam nihil velit ratione blanditiis
          eligendi exercitationem culpa! Nihil eligendi suscipit quasi ratione debitis
          cupiditate assumenda odio velit? Omnis modi temporibus nemo dolores neque
          quaerat, commodi aliquid autem ullam cupiditate, laudantium hic quae, minus
          eligendi aut pariatur voluptatem tempore beatae? Nobis incidunt molestiae ipsum
          dolorum quasi sint provident! Perferendis, consequatur laudantium. Est
          voluptatem quas earum ducimus recusandae ipsam quia reiciendis tempore minus.
          Qui dolores quos mollitia. Ad pariatur illum iusto quis doloribus corrupti,
          ratione numquam tempora, beatae, rerum repudiandae. Architecto enim officiis
          eligendi quas molestias, quos voluptatibus voluptas consectetur perspiciatis,
          facilis dolor aut cupiditate repellat aspernatur iure? Voluptates hic tempora
          odit reprehenderit voluptatum doloribus beatae dolor aliquam dolores? Expedita
          id accusamus non.
        </p>
        <img src="assets/gigawedka.png" alt="gigawedla" srcset="" />
      </div>
      <div class="article3">
        <h1 class="gigarybak">GIGA RYBAK PRZY GIGA ??ODZI</h1>
        <p class="opis">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ullam officia
          iusto quaerat omnis sequi explicabo laudantium similique, at deserunt odit unde
          sint debitis, non suscipit, esse laborum ipsam nihil velit ratione blanditiis
          eligendi exercitationem culpa! Nihil eligendi suscipit quasi ratione debitis
          cupiditate assumenda odio velit? Omnis modi temporibus nemo dolores neque
          quaerat, commodi aliquid autem ullam cupiditate, laudantium hic quae, minus
          eligendi aut pariatur voluptatem tempore beatae? Nobis incidunt molestiae ipsum
          dolorum quasi sint provident! Perferendis, consequatur laudantium. Est
          voluptatem quas earum ducimus recusandae ipsam quia reiciendis tempore minus.
          Qui dolores quos mollitia. Ad pariatur illum iusto quis doloribus corrupti,
          ratione numquam tempora, beatae, rerum repudiandae. Architecto enim officiis
          eligendi quas molestias, quos voluptatibus voluptas consectetur perspiciatis,
          facilis dolor aut cupiditate repellat aspernatur iure? Voluptates hic tempora
          odit reprehenderit voluptatum doloribus beatae dolor aliquam dolores? Expedita
          id accusamus non.
        </p>
        <img src="assets/gigalodz.png" alt="gigalodz" srcset="" />
      </div>
      <div class="article4">
        <h1 class="gigarybak">GIGA RYBA</h1>
        <p class="opis">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ullam officia
          iusto quaerat omnis sequi explicabo laudantium similique, at deserunt odit unde
          sint debitis, non suscipit, esse laborum ipsam nihil velit ratione blanditiis
          eligendi exercitationem culpa! Nihil eligendi suscipit quasi ratione debitis
          cupiditate assumenda odio velit? Omnis modi temporibus nemo dolores neque
          quaerat, commodi aliquid autem ullam cupiditate, laudantium hic quae, minus
          eligendi aut pariatur voluptatem tempore beatae? Nobis incidunt molestiae ipsum
          dolorum quasi sint provident! Perferendis, consequatur laudantium. Est
          voluptatem quas earum ducimus recusandae ipsam quia reiciendis tempore minus.
          Qui dolores quos mollitia. Ad pariatur illum iusto quis doloribus corrupti,
          ratione numquam tempora, beatae, rerum repudiandae. Architecto enim officiis
          eligendi quas molestias, quos voluptatibus voluptas consectetur perspiciatis,
          facilis dolor aut cupiditate repellat aspernatur iure? Voluptates hic tempora
          odit reprehenderit voluptatum doloribus beatae dolor aliquam dolores? Expedita
          id accusamus non.
        </p>
        <img src="assets/gigaryba.png" alt="gigaryba" srcset="" />
      </div>
    </div>

    <!-- End Of Content Section -->

    <!-- Footer -->
    <footer class="footer" id="footer">
      <span>Wykona??: Micha?? Zi????kowski, Bart??omiej Kamaszewski, Damian Janus</span>
      <a href="https://www.wsb.pl/warszawa/">Wy??sza Szko??a Bankowa 2022</a>
    </footer>
    <!-- End Of Footer -->

    <!-- JS SRC -->
    <script src="app.js"></script>
    <!-- JS SRC END -->
  </body>
</html>
