<?php

class Lingkaran {
    public $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function area() {
        return pi() * $this->jariJari * $this->jariJari;
    }

    public function circumference() {
        return 2 * pi() * $this->jariJari;
    }

    public function enlarge($scale) {
        $this->jariJari *= $scale;
    }

    public function shrink($scale) {
        $this->jariJari /= $scale;
    }
}

class Persegi {
    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function area() {
        return $this->sisi * $this->sisi;
    }

    public function circumference() {
        return 4 * $this->sisi;
    }

    public function enlarge($scale) {
        $this->sisi *= $scale;
    }

    public function shrink($scale) {
        $this->sisi /= $scale;
    }
}

class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function area() {
        return $this->panjang * $this->lebar;
    }

    public function circumference() {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function enlarge($scale) {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale) {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

class Descriptor {
    public static function describe($bangunDatar) {
        $jenisBangun = '';
        if ($bangunDatar instanceof Lingkaran) {
            $jenisBangun = 'Lingkaran';
        } elseif ($bangunDatar instanceof Persegi) {
            $jenisBangun = 'Persegi';
        } elseif ($bangunDatar instanceof PersegiPanjang) {
            $jenisBangun = 'Persegi Panjang';
        }

        $luas = $bangunDatar->area();
        $keliling = $bangunDatar->circumference();

        echo "Bangun datar ini adalah $jenisBangun yang memiliki luas $luas dan keliling $keliling.";
    }
}

// Contoh penggunaan
$lingkaran = new Lingkaran(5);
$persegi = new Persegi(8);
$persegiPanjang = new PersegiPanjang(10, 6);

Descriptor::describe($lingkaran);
echo "<br>";
Descriptor::describe($persegi);
echo "<br>";
Descriptor::describe($persegiPanjang);

?>