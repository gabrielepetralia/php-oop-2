<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {
  private $net_weight;
  private $ingredients;

  function __construct($_prod_img, $_pet_category, $_category_name, $_prod_name, $_price, $_net_weight, $_ingredients) {
    parent::__construct($_prod_img, $_pet_category, $_category_name, $_prod_name, $_price);
    $this->setNetWeight($_net_weight);
    $this->setIngredients($_ingredients);
  }

  // Setter
  public function setNetWeight($_net_weight) {
    $this->net_weight = $_net_weight;
  }

  public function setIngredients($_ingredients) {
    $this->ingredients = $_ingredients;
  }

  // Getter
  public function getNetWeight() {
    return $this->net_weight;
  }

  public function getIngredients() {
    return $this->ingredients;
  }
}
