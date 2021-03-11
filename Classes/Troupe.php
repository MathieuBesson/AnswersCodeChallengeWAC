<?php 
namespace Classes;

class Troupe 
{
    public int $max;
    public int $force;
    public int $part;

    public function __construct(int $max, int $force, int $part)
    {
        $this->max = $max;
        $this->force = $force;
        $this->part = $part;
    }

}