<?php
class MathFun
{
    protected $a;
    protected $b;
    protected $s;

    public function draw()
        {

        }
}

class Fun_1 extends MathFun
{
    public function __construct($a, $b)
        {
        $this -> a = $a;
        $this -> b = $b;
        }

    function Square()
        {
        $this -> s = $this -> a * $this -> b;
        return $this -> s;
        }

    public function draw()
        {
        echo $this -> s;
        }
}

class Fun_2 extends MathFun
{
    private $h;

    public function __construct($a, $h)
        {
        $this -> a = $a;
        $this -> h = $h;
        }

    function Triangle($h, $b)
        {
        $this -> s = 0.5 * $b * $h;
        }
}
