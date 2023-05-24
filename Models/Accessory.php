<?php

require_once __DIR__ . "/Product.php";

class Accessory extends Product {
  private $material;
  private $size;

  function __construct($_prod_img, $_pet_category, $_category_name, $_name, $_price, $_material, $_size) {
    parent::__construct($_prod_img, $_pet_category, $_category_name, $_name, $_price);
    $this->setMaterial($_material);
    $this->setSize($_size);
  }

  // Setter
  public function setMaterial($_material) {
    $this->material = $_material;
  }

  public function setSize($_size) {
    $this->size = $_size;
  }

  // Getter
  public function getMaterial() {
    return $this->material;
  }

  public function getSize() {
    return $this->size;
  }
}