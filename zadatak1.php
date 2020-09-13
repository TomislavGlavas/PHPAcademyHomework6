<?php 

class Pc
{
    private $cpu;

    private $gpu;

    public function __construct($cpu = null, $gpu = null)
    {
        $this->cpu = $cpu;
        $this->gpu = $gpu; 
    }

    public function __get($name)
    {   if(property_exists($this, $name))
        return $this->$name ?? null;
    }

    public function __set($name, $value)
    {
        if(property_exists($this, $name))
        $this->$name = $value;
    }

}

$pc = new Pc('i5 6600k','nvidia gtx 1060');




