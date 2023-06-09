<?php 

class Product {
  private $prod_img;
  private $pet_category;
  private $category_name;
  private $prod_name;
  private $price;

  function __construct($_prod_img, $_pet_category, $_category_name, $_prod_name, $_price) {
    $this->setProdImg($_prod_img);
    $this->setPetCategory($_pet_category);
    $this->setCategoryName($_category_name);
    $this->setProdName($_prod_name);
    $this->setPrice($_price);
  }

  // Setter
  public function setProdImg($_prod_img)
  {
    $this->prod_img = $_prod_img;
  }

  public function setPetCategory($_pet_category) {
    $this->pet_category = $_pet_category;
  }

  public function setCategoryName($_category_name) {
    $this->category_name = $_category_name;
  }

  public function setProdName($_prod_name) {
    $this->prod_name = $_prod_name;
  }

  public function setPrice($_price)
  {
    $this->price = $_price;
  }

  // Getter
  public function getProdImg()
  {
    return $this->prod_img;
  }

  public function getPetCategory() {
    return $this->pet_category;
  }

  public function getCategoryName() {
    return $this->category_name;
  }

  public function getProdName() {
    return $this->prod_name;
  }

  public function getPrice() {
    return $this->price;
  }

  // Other methods
  public function getIcon() {
    switch ($this->pet_category) {
      case "Cani":
        return "fa-dog";
        break;
      case "Gatti":
        return "fa-cat";
        break;
      case "Pesci":
        return "fa-fish-fins";
        break;
      case "Uccelli":
        return "fa-dove";
    }
  }
}