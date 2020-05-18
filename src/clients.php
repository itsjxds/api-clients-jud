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
        $sql = 'SELECT * FROM `clients` WHERE date > :date';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([':date' => $date]);
        return $stmt;
    }

    function getClientByName($clientName){
        $name = '%' . $clientName . '%';
        $sql = 'SELECT * FROM `clients` WHERE name LIKE ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        return $stmt;
    }
}
?>