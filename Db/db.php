<?php

require_once __DIR__ . "/../Models/Accessory.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toy.php";

$products = [
  new Food("Views/img/prod-1.jpg","Cani","Cibo","Rocco Chings XXL","15,49","900",["filetto di petto di pollo","sottoprodotti di origine vegetale","minerali"]),
  new Accessory("Views/img/prod-2.jpg","Cani","Accessori","Cuccia per cani Modern Living Palma","149,99","Legno","L 66 x P 81 x H 88 cm"),
  new Toy("Views/img/prod-3.jpg","Cani","Giochi","Gioco per cani Trixie Osso rinfrescante","5,99","Osso in gomma che assorbe l'acqua e la rilascia se morso","L 11 cm"),

  new Food("Views/img/prod-4.jpg","Gatti","Cibo","Animonda Carny Adult","2,99","200",["manzo","pollo","carne di selvaggina","carbonato di calcio","cloruro di sodio"]),
  new Toy("Views/img/prod-5.jpg","Gatti","Giochi","Gioco per gatti Trixie Puntatore laser Catch the Light","5,99", "Proietta una luce laser rossa a cui dare la caccia", "L 7 cm"),
  new Accessory("Views/img/prod-6.jpg","Gatti","Accessori","Borsa Ryan Trixie Friends on Tour per gatti","27,99","Poliestere","L 55 x P 30 x H 30 cm"),

  new Food("Views/img/prod-7.jpg","Pesci","Cibo","Sera Goldy Nature mangime in scaglie","9,99","210",["farina di pesce","farina di frumento","erbe aromatiche","alghe marine"]),

  new Accessory("Views/img/prod-8.jpg","Uccelli","Accessori","Gabbia Montana Finca Play","217,99","Metallo","L 77 x P 71 x H 165 cm"),
  new Food("Views/img/prod-9.jpg","Uccelli","Cibo","Panico rosso JR Farm","12,49","1000",["spighe di panico"]),
];