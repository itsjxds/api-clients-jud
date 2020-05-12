<?php

namespace judithaguilar\ApiClientsJud;

include 'DBconn.php';

class Clients extends DBconn{

    function getClients(){
        $result = $this->connect()->query('SELECT * FROM clients');
        $this->disconnect();
        return $result;
    }

    function getClientbyDate($date){
        $sql = 'SELECT * FROM `clients` WHERE date>"' . $date . '";';
        $result = $this->connect()->query($sql);
        $this->disconnect();
        return $result;
    }

    function getClientByName($clientName){
        $sql = 'SELECT * FROM clients WHERE name LIKE "%' . $clientName . '%";';
        $result = $this->connect()->query($sql);
        $this->disconnect();
        return $result;
    }
}
?>