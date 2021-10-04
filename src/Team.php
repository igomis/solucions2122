<?php


namespace App;


class Team
{
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoreGoals;
    private $concededGoals;

    /**
     * Team constructor.
     * @param $name
     * @param $matches
     * @param $won
     * @param $lost
     * @param $tie
     * @param $scoreGoals
     * @param $concededGoals
     */
    public function __construct(String $name,int $matches=0,int $won=0,int $lost=0,int $tie=0,int $scoreGoals=0,int $concededGoals=0)
    {
        $this->name = $name;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoreGoals;
        $this->concededGoals = $concededGoals;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * @return mixed
     */
    public function getWon()
    {
        return $this->won;
    }

    /**
     * @return mixed
     */
    public function getLost()
    {
        return $this->lost;
    }

    /**
     * @return mixed
     */
    public function getTie()
    {
        return $this->tie;
    }

    /**
     * @return mixed
     */
    public function getScoreGoals()
    {
        return $this->scoreGoals;
    }

    /**
     * @return mixed
     */
    public function getConcededGoals()
    {
        return $this->concededGoals;
    }

    public function signPlayer(Player $player){
        $this->players[] = $player;
    }

    public function render()
    {
        loadView('plantilla',['team' => $this]);
    }


}