<?php
include 'classes/recipe.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- favicon -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css">
  <title>PHP Recipe System</title>
</head>
<body>
<!-- nav  -->
  <nav class="navbar">
    <div class="nav-center">
      <div class="nav-header">
        <a href="index.php" class="nav-logo">
          <img src="./assets/images/logo.png" alt="simply recipes" />
        </a>
        <button class="nav-btn btn">
          <i class="fas fa-align-justify"></i>
        </button>
      </div>
      <div class="nav-links">
        <div class="search-container">
        <form class="search-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <input type="search" name="search" placeholder="Search this site" class="search-input" id="search-input">
          <button type="submit" class="search-btn" id="search-btn" name="submit">Search</button>
        </form>
        </div>
        <div class="nav-link contact-link">
          <a href="#" class="btn"> contact </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- end of nav -->
  <!-- main -->
  <main class="page">
    <!-- header -->
    <header class="hero">
      <div class="hero-container">
        <div class="hero-text">
          <h1>amazing recipes</h1>
          <h4>no fluff, just recipes</h4>
        </div>
      </div>
    </header>
    <!-- end of header -->
    <section class="recipes-container">
      <!-- tag container -->
      <?php 
      $recipeDisplay = new RecipeDisplay();
      $recipeDisplay->displayTags();
      ?>
      <!-- end of tag container -->
      <?php
        $recipeDisplay = new RecipeDisplay();
        $recipeDisplay->displayRecipes();
      ?>
    </section>
  </main>
  <!-- end of main -->
  <!-- footer -->
  <footer class="page-footer">
    <p>
      &copy; <span id="date"></span>
      <span class="footer-logo">SimplyRecipes</span> Built by Wilson</a>
    </p>
  </footer>
</body>
</html>