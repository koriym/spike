<?php

class User
{
    public function __construct(
        private readonly string $name
    ){}

    public function accept(Printer $printer)
    {
        $printer->print($this->name);
    }
}

class Printer
{
    public function print(string $name)
    {
        echo $name;
    }
}

(function() {
    $user = new User('koriym');
    $user->accept(new Printer); // Userがprinterを使って出力（ダブルディスパッチ）
})();

