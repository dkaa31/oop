<?php
class Animal {
    public $nama;
    public $kaki;
    public $darah;

    public function __construct($nama, $kaki = 4, $darah = "no") {
        $this->nama = $nama;
        $this->kaki = $kaki;
        $this->darah = $darah;
    }

    public function namanya() {
        return $this->nama;
    }

    public function kakinya() {
        return $this->kaki;
    }

    public function darahnya() {
        return $this->darah;
    }
}

?>