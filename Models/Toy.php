<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product {
  private $characteristics;
  private $size;

  function __construct($_prod_img, $_pet_category, $_category_name, $_name, $_price, $_characteristics, $_size) {
    parent::__construct($_prod_img, $_pet_category, $_category_name, $_name, $_price);
    $this->setCaracteristics($_characteristics);
    $this->setSize($_size);
  }

  // Setter
  public function setCaracteristics($_characteristics) {
    $this->characteristics = $_characteristics;
  }

  public function setSize($_size) {
    $this->size = $_size;
  }

  // Getter
  public function getCaracteristics() {
    return $this->characteristics;
  }

  public function getSize() {
    return $this->size;
  }
}
