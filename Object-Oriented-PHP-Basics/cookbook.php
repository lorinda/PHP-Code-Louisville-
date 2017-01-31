<?php
include "classes/recipes.php";
include "classes/render.php";

$recipe1 = new Recipe();
$recipe1->setSource = "Grandma Holligan";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1, "doz");
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource = "Duncan Hines";
$recipe2->setTitle("my second recipe");

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYield("6 servings");

//Call static method
echo Render::displayRecipe($recipe1);

//Commented: Previous Echo statements
//echo $recipe1->getTitle();
//foreach ($recipe1->getIngredients() as $ing) {
//    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
//}
//echo implode("\n", $recipe1->getInstructions());
//echo $recipe1->getYield().PHP_EOL;
//echo $recipe1->getSource().PHP_EOL;
//echo implode(", ", $recipe1->getTags()).PHP_EOL;

