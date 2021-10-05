<?php


namespace App;


class Trainer extends Member
{
    private $charge;



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
    public function __construct(String $name,String $birthday,String $country,String $charge,int $yellowCards=null,int $redCards=null)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->charge = $charge;
        $this->yellowCards = $yellowCards??0;
        $this->redCards = $redCards??0;
    }


    public function render(){
        loadView('trainerCard',['player' => $this]);
    }



    /**
     * @return mixed
     */
    public function getCharge()
    {
        return $this->charge;
    }

}