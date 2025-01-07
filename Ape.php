<?php
require_once "animal.php";

class Ape extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, 2); // cuman ape doang yang 2
    }

    public function teriak() {
        echo "Auooo";
    }
}

?>