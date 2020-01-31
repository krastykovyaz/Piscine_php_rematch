<?php
class Color
{
    public $red;
    public $green;
    public $blue;
    static public $verbose = FALSE;

    public function __construct(array $kwargs)
    {
        if(array_key_exists('rgb', $kwargs))
        {
            $this->blue=intval($kwargs['rgb']) % 256;
            $this->green=intval($kwargs['rgb'] / 256 % 256);
            $this->red=intval($kwargs['rgb']) / 256 / 256 % 256;
        }
        elseif (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) &&  array_key_exists('blue', $kwargs))
        {
            $this->red=intval($kwargs['red']);
            $this->green=intval($kwargs['green']);
            $this->blue=intval($kwargs['blue']);
        }
        if (self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.".PHP_EOL, $this->red, $this->green, $this->blue);
    }
    public function __toString()
    {
        return(sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
    }
    public function __destruct()
    {
        if (self::$verbose)
        printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.".PHP_EOL, $this->red, $this->green, $this->blue);
        return;
    }
    static public function doc()
    {
        return(file_get_contents('Color.doc.txt'));
    }
    public function add(Color $ycm)
    {
        $newarray=array (
            'red' => ($this->red + $ycm->red) > 255 ? 255 : ($this->red + $ycm->red),
            'green' => ($this->green + $ycm->green) > 255 ? 255 :($this->green + $ycm->green),
            'blue' => ($this->blue + $ycm->blue) > 255 ? 255 : ($this->blue + $ycm->blue),
        );
        return (new Color($newarray));
    }
    public function sub(Color $wb)
    {
        $narr=array (
            'red' => ($this->red - $wb->red) < 0 ? 0 : ($this->red - $wb->red),
            'green' => ($this->green - $wb->green) < 0 ? 0 :($this->green - $wb->green),
            'blue' => ($this->blue - $wb->blue) < 0 ? 0 : ($this->blue - $wb->blue),
        );
        return (new Color($narr));
    }
    public function mult($n)
    {
        $nar=array (
            'red' => ($this->red * $n) > 255 ? 255 : ($this->red * $n),
            'green' => ($this->green * $n) > 255 ? 255 :($this->green * $n),
            'blue' => ($this->blue * $n) > 255 ? 255 : ($this->blue * $n),
        );
        return (new Color($nar));
    }

}
?>