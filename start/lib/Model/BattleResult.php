<?php

class BattleResult
{
    private $usedJediPowers;
    
    private $winningShip; 

    private $losingShip;

    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;

    }
    // returns boolean
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    // returns Ship
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    // returns Ship null
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    
    }
    
}
