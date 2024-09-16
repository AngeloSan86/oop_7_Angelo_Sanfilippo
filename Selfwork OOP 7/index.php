<?php

/*
Crea la tua armatura di Ironman seguendo il modello visto a lezione, seguendo i seguenti punti:
metti ogni classe (abstract o no) in un file diverso, utilizzando nel file principale la funzione require()
crea un esercito random di Ironman
aggiungi un contatore di quanti Ironman hai creato
*/
require 'class.php';

class IronMan{

  public $helmet;
  public $armor;
  public $propulsion;
  public $weapon;
  public $shield;

  public function __construct(Helmet $_helmet, Armor $_armor,Sprint $_propulsion,RightHand $_weapon,LeftHand $_shield){

    $this->helmet = $_helmet;
    $this->armor = $_armor;
    $this->propulsion = $_propulsion;
    $this->weapon = $_weapon;
    $this->shield = $_shield;
  }

  public function equipment(){
    $this->helmet->helmetUsed();
    $this->armor->armorUsed();
    $this->propulsion->sprintUsed();
    $this->weapon->rightHandItem();
    $this->shield->leftHandItem();
  }

}

$int = rand(3, 15);

echo "Sono stati creati " . $int . "settaggi diversi di IronMan:\n";

for ($i=1; $i <= $int ; $i++) { 

  echo "SETTING N." . $i . ":\n";

  $ironMan = new IronMan($allHelmet[rand(0, (count($allHelmet)-1))], $allArmor[rand(0, (count($allArmor)-1))], $allSprint[rand(0, (count($allSprint)-1))], $allRightHand[rand(0, (count($allRightHand)-1))], $allLeftHand[rand(0, (count($allLeftHand)-1))]);

 $ironMan->equipment();

}



