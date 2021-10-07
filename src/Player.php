<?php


namespace App;


class Player extends Member{

    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;


    /**
     * Player constructor.
     * @param $name
     * @param $birthday
     * @param $country
     * @param $dorsal
     * @param $position
     * @param $goals
     * @param $matches
     * @param $minutes
     * @param $yellowCards
     * @param $redCards
     */
    public function __construct(String $name,String $birthday,String $country,int $dorsal,String $position,int $goals,int $matches,int $minutes,int $yellowCards,int $redCards)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCards = $yellowCards;
        $this->redCards = $redCards;
    }

    public function score(){
        $this->goals++;
        return $this->goals;
    }
    public function playMinutes(int $minutes){
        $this->minutes += $minutes;
        $this->matches++;
        return $this->minutes;
    }

    public function render(){
        loadView('playerCard',['player' => $this]);
    }



    /**
     * @return mixed
     */
    public function getDorsal()
    {
        return $this->dorsal;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
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
    public function getMinutes()
    {
        return $this->minutes;
    }


}