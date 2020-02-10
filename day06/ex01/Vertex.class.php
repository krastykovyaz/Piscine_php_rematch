<?php

require_once 'Color.class.php';

class Vertex
{
    static public $verbose = false;
    public $w = 1.0;
    public $color = false;

    static public function doc()
    {
        return file_get_contents('Vertex.doc.txt') . PHP_EOL;
    }
    public function __toString()
    {
        return "Vertex( x: " . number_format($this->x, 2, ".", "") .
                ", y: " . number_format($this->y, 2, ".", "") .
                ", z:" . number_format($this->z, 2, ".", "") .
                ", w:" . number_format($this->w, 2, ".", "") .
                (self::$verbose ? ", $this->color" : '') . " )";
    }
    public function __construct(array $xyz)
    {
        if (!isset($xyz['x']) || !isset($xyz['y']) || !isset($xyz['z']))
            return false;
        if (isset($xyz['color']) && !($xyz['color'] instanceof Color))
            return false;
        if (!isset($xyz['color']))
            $xyz['color'] = new Color(['red' => 255, 'green' => 255, 'blue' => 255]);
        foreach (['x', 'y', 'z', 'w', 'color'] as $var)
        {
            if (isset($xyz[$var]))
                $this->$var = $xyz[$var];
        }
        if (self::$verbose)
            echo $this->__toString() . ' constructed' . PHP_EOL;
        return true;
    }
    public function __destruct()
    {
        if (self::$verbose)
            echo $this->__toString() . ' destructed' . PHP_EOL;
    }
}

