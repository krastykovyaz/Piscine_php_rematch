<?php
class NightsWatch implements IFighter
{
    private $vars = array();
    public function recruit($var)
    {
        $this->vars[] = $var;
    }
    public function fight()
    {
        foreach ($this->vars as &$var) {
            if (method_exists($var, fight))
                $var->fight();
        }
    }
}
?>