<?php
class Jaime extends Lannister
{
    public function sleepWith($var)
    {
        if (get_class($var) == 'Sansa')
            print("Let's do this.\n");
        elseif (get_class($var) == 'Cersei')
            print("With pleasure, but only in a tower in Winterfell, then.\n");
        elseif (get_class($var) == 'Tyrion')
            print("Not even if I'm drunk !\n");
    }
}
?>