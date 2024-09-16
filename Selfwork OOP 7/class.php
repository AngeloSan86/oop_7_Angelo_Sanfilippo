<?php

abstract class Helmet{

    abstract public function helmetUsed();

} 

class Casco extends Helmet{
    public function helmetUsed(){
        echo "Casco da Hockey equipaggiato.\n";
    }
}

class Hat extends Helmet{
    public function helmetUsed(){
        echo "Cappellino di carta equipaggiato.\n";
    }
}

abstract class Armor{

    abstract public function armorUsed();

} 

class Corrazza extends Armor{
    public function armorUsed(){
        echo "Corrazza in titanio equipaggiata.\n";
    }
}

class TShirt extends Armor{
    public function armorUsed(){
        echo "Canottiera con macchia di sugo equipaggiata.\n";
    }
}

abstract class Sprint{

    abstract public function sprintUsed();

} 

class Rockets extends Sprint{
    public function sprintUsed(){
        echo "Razzi fortonici equipaggiati.\n";
    }
}

class Bicicle extends Sprint{
    public function sprintUsed(){
        echo "Bicicletta a rotelle equipaggiata.\n";
    }
}

abstract class RightHand{

    abstract public function rightHandItem();

} 

class Sword extends RightHand{
    public function rightHandItem(){
        echo "Spada laser equipaggiata.\n";
    }
}

class Fionda extends RightHand{
    public function rightHandItem(){
        echo "Fionda spara palline di carta e saliva equipaggiata.\n";
    }
}


abstract class LeftHand{

    abstract public function leftHandItem();

} 

class Shield extends LeftHand{
    public function leftHandItem(){
        echo "Scudo di antimateria equipaggiato.\n\n";
    }
}

class Cry extends LeftHand{
    public function leftHandItem(){
        echo "Sistema difensivo del pianto equipaggiato.\n\n";
    }
}

//array

$allHelmet = [new Casco, new Hat];
$allArmor = [new Corrazza, new TShirt];
$allSprint = [new Rockets, new Bicicle];
$allRightHand = [new Sword, new Fionda];
$allLeftHand = [new Shield, new Cry];


?>