<?php
class UnholyFactory
{
    private $a = array();
    public function absorb($fighter)
    {
        if (!($fighter instanceof Fighter)) 
        {
            echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
            return false;
        }
        if (isset($this->a[$fighter->getA()]))
        {
            echo "(Factory already absorbed a fighter of type {$fighter->getA()})" . PHP_EOL;
            return false;
        }
        echo "(Factory absorbed a fighter of type {$fighter->getA()})" . PHP_EOL;
        $this->a[$fighter->getA()] = $fighter;
        return true;
    } 
    public function fabricate($name)
	{
		if (isset($this->a[$name]))
		{
			print("(Factory fabricates a fighter of type ".$name.")".PHP_EOL);
			return $this->a[$name];
		}
		print("(Factory hasn't absorbed any fighter of type ".$name.")". PHP_EOL);
		return false;
	}
}
?>