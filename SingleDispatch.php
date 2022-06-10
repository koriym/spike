<?php

class User
{
    public function __construct(
        private readonly string $name
    ){}

    public function getName(): string
    {
        return $this->name;
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
    $printer = new Printer();
    $name = $user->getName(); // Userにnameがあることが外部に露出している （カプセル化違反）
    $printer->print($name); // この関数が出力 （シングルディスパッチ）
})();

