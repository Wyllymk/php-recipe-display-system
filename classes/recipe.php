<?php
class Recipe {
    public $name;
    public $image_url;
    public $prep_time;
    public $cook_time;
    public $description;
    public $ingredients;
    public $cookingEquipments;

    public function __construct($name, $image_url, $prep_time, $cook_time) {
        $this->name = $name;
        $this->image_url = $image_url;
        $this->prep_time = $prep_time;
        $this->cook_time = $cook_time;
    }
}

class RecipeDisplay {
    public $recipes;

    public function __construct() {
        $this->recipes = array(
            new Recipe("Grilled Beef", "./assets/recipes/recipe-1.jpeg", 15, 5),
            new Recipe("Greek Ribs", "./assets/recipes/recipe-2.jpeg", 20, 10),
            new Recipe("Vegetable Soup", "./assets/recipes/recipe-3.jpeg", 30, 15),
            new Recipe("Banana Pancakes", "./assets/recipes/recipe-4.jpeg", 15, 5),
            new Recipe("Pizza", "./assets/recipes/pizza.webp", 30, 30),
            new Recipe("Ugali", "./assets/recipes/ugali.webp", 5, 10),
            new Recipe("Red Beans and Rice", "./assets/recipes/red-beans.webp", 20, 30),
            new Recipe("Baked Donuts", "./assets/recipes/donuts.webp",15, 20),
            new Recipe("Chicken Stir-fry", "./assets/recipes/chicken.webp", 15, 30),
            new Recipe("Strawberry salad", "./assets/recipes/strawberry.webp", 10, 10),
            new Recipe("Meatloaf", "./assets/recipes/meatloaf.webp", 10, 35),
            new Recipe("Turkey Thighs", "./assets/recipes/turkey.webp", 15, 60)
            // Add more recipes here
        );
    }

    public function displayRecipes() {
        // check if the form has been submitted
        if (isset($_POST['search'])) {
            $search_query = $_POST['search'];
            $filtered_recipes = $this->searchRecipes($search_query);
        } else {
            $filtered_recipes = $this->recipes;
        }

        echo '<div class="recipes-list">';
        if (count($filtered_recipes) > 0) {
            foreach ($filtered_recipes as $recipe) {
                echo '<a href="view.php?recipe=' . $recipe->name . '" class="recipe">';
                echo '<img src="' . $recipe->image_url . '" class="img recipe-img" alt="">';
                echo '<h5>' . $recipe->name . '</h5>';
                echo '<p>Prep : ' . $recipe->prep_time . 'min | Cook : ' . $recipe->cook_time . 'min</p>';
                echo '</a>';
            }
        } else {
            echo '<p>No recipes found for the search query: ' . $search_query . '</p>';
        }
        echo '</div>';
    }

    public function searchRecipes($query) {
        $filtered_recipes = array();
        foreach ($this->recipes as $recipe) {
            if (stripos($recipe->name, $query) !== false) {
                $filtered_recipes[] = $recipe;
            }
        }
        return $filtered_recipes;
    }
    public function displayTags(){
        echo '<div class="tags-container">';
        echo '<h4>recipes</h4>';
        echo '<div class="tags-list">';
        foreach ($this->recipes as $recipe) {
            echo '<a href="#">' . $recipe->name . '</a>';
        }
        echo '</div>';
        echo '</div>';
    }
}

?>