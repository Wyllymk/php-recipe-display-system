<?php
include 'templates/header.php';
include 'classes/recipe.php';




if(isset($_GET['recipe']) && !(empty(trim($_GET['recipe'])))) {
    $slug = $_GET['recipe'];
    foreach ($new_array as $recipe) {
      $result = stripos($recipe->name, $slug) !== false; /*Searching for a recipe whose title matches the slug*/
      if ($result){ /*Fetching the details of the recipe found*/
      '<a href="view.php?recipe=' . $recipe->name . '" class="recipe">';
      '<img src="' . $recipe->image_url . '" class="img recipe-img" alt="">';
      '<h5>' . $recipe->name . '</h5>';
      '<p>Prep : ' . $recipe->prep_time . 'min | Cook : ' . $recipe->cook_time . 'min</p>';
      '</a>';
      }
  }
} 
?>


    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="<?php echo $recipe->image_url?>"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2><?php echo $recipe->name;?></h2>
            <p>
            Wake up on the right side of the bed with a stack of sweet, 
            cozy, and simple banana pancakes. This top-rated banana pancake 
            recipe is easy to make and it comes together in just 15 minutes, 
            so you don't have to wake up early to enjoy a satisfying breakfast. 
            Learn how to make, store, and serve the best banana pancakes ever. 
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <p>30 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cook time</h5>
                <p>15 min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <p>6 servings</p>
              </article>
            </div>
            
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>instructions</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 1</p>
                <div></div>
              </header>
              <p>
              Combine your dry ingredients (flour, sugar, salt, baking powder) 
              in one bowl and your wet ingredients (egg, milk, vegetable oil, 
              mashed bananas) in another bowl. Add the dry ingredients to the 
              bowl with the wet ingredients, then stir until they're incorporated. 
              It's OK if your batter is slightly lumpy. 
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 2</p>
                <div></div>
              </header>
              <p>
              Pour the batter in ¼ cup portions onto a lightly oiled pan or 
              griddle over medium-high heat. Cook for a few minutes, 
              flip with a spatula, and cook for another few minutes 
              (or until each side is golden brown). 
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 3</p>
                <div></div>
              </header>
              <p>
              Serve your banana pancakes immediately. 
              They're delicious alone or with your favorite pancake toppings. 
              </p>
            </div>
            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">1 cup all-purpose flour</p>
              <p class="single-ingredient">1 tablespoon white sugar</p>
              <p class="single-ingredient">1 cup skim milk</p>
            </div>
            <div>
              <h4>cooking equipment</h4>
              <p class="single-tool">Hand Blender</p>
              <p class="single-tool">Large Heavy Pot With Lid</p>
              <p class="single-tool">Measuring Spoons</p>
              <p class="single-tool">Measuring Cups</p>
            </div>
          </article>
        </section>
      </div>
    </main>
    <?php include 'templates/footer.php';?>
</body>
</html>