<?php
class Nomor2{

public $name, $idmesin, $typemotor;

public function __construct($name,$idmesin, $typemotor)
{
$this->name = $name;
$this->idmesin = $idmesin;
$this->typemotor = $typemotor;
}
}

$obj = new Nomor2("Vario", "1245", "automatic");

echo "Nama: " . $obj->name . '<br>';
echo "ID Mesin: " . $obj->idmesin . '<br>' ;
echo "Type Motor:" . $obj->typemotor . '<hr>';