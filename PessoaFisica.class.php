<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

class PessoaFisica extends Client implements PersonInterface
{
    public function __construct($nome,$cpf,$street,$neighborhood, $city, $profession, $maritalStatus)
    {

        $this->Name = $nome;
        $this->Cpf = $cpf;
        $this->street = $street;
        $this->neighborhood =$neighborhood;
        $this->City = $city;
        $this->Profession = $profession;
        $this->MaritalStatus = $maritalStatus;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->Cpf;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return mixed
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->Profession;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

}