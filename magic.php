<?php

namespace App;
class magic
{
    public static $test;
    public function __construct(public ?string $key=null , public $errors=null)
    {

    }
    public function __destruct()
    {
        return "__destruct running";
    }
//    public function __invoke(array $a, array $b): int
//    {
//        return $a[$this->key] <=> $b[$this->key];
//    }

    public function __get(string $name)
    {
        return $this->errors[$name]." test";
    }

    public function __toString(): string
    {
        return $this;
    }

    public function __set(string $name, $value): void
    {
        $this->errors[$name]= $value;
    }

    public static function getData(): ?string
    {
       return self::$test;
       return (new magic())->key;
    }
}
$magic = new magic('login');
$magic->name= 'ali';
$magic->pass= 'ali44';

var_dump(magic::getData());
