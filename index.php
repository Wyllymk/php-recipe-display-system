<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Recipe System</title>
</head>
<body>
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <p>AwesomeRecipes</p>
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="index.php" class="nav-link"> home </a>
          <a href="#" class="nav-link"> about </a>
          <a href="#" class="nav-link"> tags </a>
          <a href="#" class="nav-link"> recipes </a>

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
            <h1>simply recipes</h1>
            <h4>no fluff, just recipes</h4>
          </div>
        </div>
      </header>
      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>recipes</h4>
          <div class="tags-list">
            <a href="tag-template.html">Beef (1)</a>
            <a href="tag-template.html">Breakfast (2)</a>
            <a href="tag-template.html">Carrots (3)</a>
            <a href="tag-template.html">Food (4)</a>
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-1.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Carne Asada</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-2.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Greek Ribs</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-3.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Vegetable Soup</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
        </div>
        <!-- end of recipes list -->
      </section>
    </main>
    <!-- end of main -->
    <!-- footer -->
    <footer class="page-footer">
      <p>&copy; <span id="date"></span>
        <span class="footer-logo">AwesomeRecipes</span> Built by Wilson</p>
    </footer>
</body>
</html>