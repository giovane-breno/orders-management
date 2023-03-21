<?php

namespace src\Models;
use src\DatabaseConnection;

class Orders
{
    private int $id;
    private string $customer;
    private string $seller;

    public function deleteOrder(int $id)
    {
        $db = new DatabaseConnection;
        $con = $db->createConnection();
        
        $sqlQuery = 'DELETE FROM orders WHERE id =' . $id;
        $con->query($sqlQuery);
    }
}