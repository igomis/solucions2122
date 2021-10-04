<?php


namespace App;


class Player
{
    private $name;
    private $birthday;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCards;
    private $redCards;

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

    public function age(){
        list($dia,$mes,$ano) = explode("/",$this->birthday);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
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
    public function addCard($colour){
        switch ($colour) {
            case 'red' : $this->redCards++; break;
            case 'yellow' : $this->yellowCards++; break;
            default: return false;
        }
        return true;
    }
    public function render(){
        loadView('playerCard',['player' => $this]);
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return String
     */
    public function getCountry()
    {
        return $this->country;
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

    /**
     * @return mixed
     */
    public function getYellowCards()
    {
        return $this->yellowCards;
    }

    /**
     * @return mixed
     */
    public function getRedCards()
    {
        return $this->redCards;
    }


}