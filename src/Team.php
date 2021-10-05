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
    public function __construct(String $name,int $matches=null,int $won=null,int $lost=null,int $tie=null,int $scoreGoals=null,int $concededGoals=null)
    {
        $this->name = $name;
        $this->matches = $matches??0;
        $this->won = $won??0;
        $this->lost = $lost??0;
        $this->tie = $tie??0;
        $this->scoreGoals = $scoreGoals??0;
        $this->concededGoals = $concededGoals??0;
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

    public function signPlayer(Member $player){
        $this->players[] = $player;
    }

    public function render()
    {
        loadView('plantilla',['team' => $this]);
    }


}