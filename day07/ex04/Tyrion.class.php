<?php
class Tyrion extends Lannister
{
    public function sleepWith($var)
    {        
        if (get_class($var) == 'Sansa')
            print("Let's do this.\n");
        elseif (get_class($var) == 'Cersei')
            print("Not even if I'm drunk !\n");
        elseif (get_class($var) == 'Jaime')
            print("Not even if I'm drunk !\n");
    }
}
?>