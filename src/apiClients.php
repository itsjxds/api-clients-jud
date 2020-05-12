<?php

namespace judithaguilar\ApiClientsJud;
use PDO;

include 'clients.php';

class ApiClients{

    function getAll(){
        $client = new Clients();
        $clients = array();
        $clients['register'] = array();
        
        $result = $client->getClients();

        if($result->rowCount()){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $register = array(
                    'name' => $row['name'],
                    'phone' => $row['phone'],
                    'email' => $row['email'],
                    'date' => $row['date'],
                    'qty' => $row['qty'],
                );
                array_push($clients['register'], $register);
            }

            http_response_code(200);
            echo json_encode($clients);
        }else{
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }

    function getDate($date){
        $client = new Clients();
        $clients = array();
        $clients['register'] = array();
        
        $result = $client->getClientbyDate($date);

        if($result->rowCount()){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    $register = array(
                        'name' => $row['name'],
                        'phone' => $row['phone'],
                        'email' => $row['email'],
                        'date' => $row['date'],
                        'qty' => $row['qty'],
                    );
                    array_push($clients['register'], $register);
            }

            http_response_code(200);
            echo json_encode($clients);
        }else{
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }

    function getClient($clientName){
        $client = new Clients();
        $clients = array();
        $clients['register'] = array();
        
        $result = $client->getClientByName($clientName);

        if($result->rowCount()){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $register = array(
                    'name' => $row['name'],
                    'phone' => $row['phone'],
                    'email' => $row['email'],
                    'date' => $row['date'],
                    'qty' => $row['qty'],
                );
                array_push($clients['register'], $register);
            }

            http_response_code(200);
            echo json_encode($clients);
        }else{
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }
}

$api = new ApiClients();

if (isset($_GET["date"]))
{
    $api->getDate($_GET["date"]);
} 
else if (isset($_GET["client"])) 
{
    $api->getClient($_GET["client"]);
} 
else 
{
    $api->getAll();
}


?>