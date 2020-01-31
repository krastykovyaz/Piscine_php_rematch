<?php
class UnholyFactory
{
    private $f = 0;
    public $ars = array();
    public function absorb($ar)
    {
        $this->ars[]=$ar;
    }
    public function fight()
    {
        foreach ($this->ars as $ar) {
            if (get_class($ar) == 'Footsoldier' && $this->f == 0)
            {
                print("(Factory absorbed a fighter of type foot soldier)");
                $this->f = 1;
            }
            elseif (get_class($ar) == 'Footsoldier' && $this->f == 1)
                print("(Factory already absorbed a fighter of type foot soldier)");
            elseif (get_class($ar) == 'Archer')
                print("(Factory absorbed a fighter of type archer)");
            elseif (get_class($ar) == 'Assassin')
                print("(Factory absorbed a fighter of type assassin)");
            elseif (get_class($ar) == 'Llama')
            print("(Factory can t absorb this, it s not a fighter)");
        }
    } 
}
?>