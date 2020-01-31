<?php
class House
{
    public function introduce()
    {
        print("House ");
        print($this->getHouseName());
        print(" of ");
        print($this->getHouseSeat());
        print(" : ");
        print("\"");
        print($this->getHouseMotto());
        print("\"");
        print("\n");
        
    }
}
?>
