<?php 

class Student
{
    private $data = [];

    public function __call($name, $arguments)
    {
        $method = str_split($name, 3);
        $n = implode("",array_slice($method,1));

        if($method[0] == 'get')
        {
            if(array_key_exists($n, $this->data))
            return implode("",$this->data[$n]);
        }

        elseif($method[0] == 'set')
        {
            $this->data[$n] = $arguments;
        }

        elseif($method[0] == 'has')
        {
            if(array_key_exists($n, $this->data))
            return 'true';
            else return 'false';
        }

        elseif($method[0] == 'uns')
        {
            if(array_key_exists($n, $this->data))
               unset($this->data[$n]);
        }

        else
        {
            throw new Exception("Method '{$name}' doesn't exist.");
        }


    }
}
$s = new Student;
try
{
    $s->minData();
} catch(Exception $e)
{
    echo $e->getMessage();
}

    
