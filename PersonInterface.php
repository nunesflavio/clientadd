<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

interface PersonInterface
{
       
    public function getName();
    public function getCpf();
    public function getstreet();
    public function getneighborhood();
    public function getCity();
    public function getProfession();
    public function getMaritalStatus();
    
    
}