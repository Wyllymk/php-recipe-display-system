<?php 
include 'classes/classes.php';
include 'templates/header.php';
?>

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


  <?php include "templates/footer.php";?>