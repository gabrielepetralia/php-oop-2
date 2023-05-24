<?php

require_once __DIR__ . "/../../../Db/db.php";

?>

<div class="gp-container my-5">
  <h1 class="fw-bold mb-4">Prodotti:</h1>
  <div class="row row-cols-3">
    <?php foreach ($products as $product) : ?>
      <div class="col mb-5">
        <div class="gp-card card p-3 h-100">
          <div class="card-img p-5">
            <img class="img-fluid w-100" src="<?php echo $product->getProdImg() ?>">
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold mb-4"><?php echo $product->getProdName() ?></h5>

            <div class="badges mb-3">
              <span class="bg-dark text-white rounded px-3 py-1 me-2">
                <i class="fa-solid <?php echo $product->getIcon() ?>"></i>
                <?php echo $product->getPetCategory() ?>
              </span>
              <span class="bg-secondary text-white rounded px-3 py-1"><?php echo $product->getCategoryName() ?></span>
            </div>

            <span class="d-block mb-3 fw-semibold">&euro; <?php echo $product->getPrice() ?></span>

            <?php if ($product->getCategoryName() === "Accessori") : ?>
              <p class="mb-2"><strong>Materiale:</strong> <?php echo $product->getMaterial() ?></p>
              <p class="mb-0"><strong>Dimensioni:</strong> <?php echo $product->getSize() ?></p>
            <?php endif ?>

            <?php if ($product->getCategoryName() === "Cibo") : ?>
              <p class="mb-2"><strong>Peso netto:</strong> <?php echo $product->getNetWeight() ?> g</p>
              <p class="mb-0">
                <strong>Ingredienti:</strong>
                <?php foreach ($product->getIngredients() as $index => $ingredient) {
                  echo $ingredient;
                  if ($index != count($product->getIngredients()) - 1 && count($product->getIngredients()) > 1) {
                    echo ", ";
                  }
                } ?>
              </p>
            <?php endif ?>

            <?php if ($product->getCategoryName() === "Giochi") : ?>
              <p class="mb-2"><strong>Caratteristiche:</strong> <?php echo $product->getCaracteristics() ?></p>
              <p class="mb-0"><strong>Dimensioni:</strong> <?php echo $product->getSize() ?></p>
            <?php endif ?>

          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>