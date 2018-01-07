<?php

class Pas {
    public $name;
    public $tezina;

    function __construct($name, $tezina)
    {
        $this->name = $name;
        $this->tezina = $tezina;
    }

    /* This is the static comparing function: */
    static function cmp_obj($a, $b)
    {
        $al = $a->tezina;
        $bl = $b->tezina;
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
}

$a[] = new Pas("Dzeki", 2);
$a[] = new Pas("Fido", 8);
$a[] = new Pas("Floki", 11);
$a[] = new Pas("Mrto", 3);
$a[] = new Pas("brljo", 5);
$a[] = new Pas("Lajka", 9);
array_push($a, new Pas('Rex',3));

foreach ($a as $item) {
    echo $item->name."(".$item->tezina .") ";
}
echo "<br>";
//usort($a, array ("Pas","cmp_obj"));

usort($a, "Pas::cmp_obj");

foreach ($a as $item) {
     echo $item->name."(".$item->tezina .") ";
}

echo "<br>najveci pas je ".end($a)->name;
?>
