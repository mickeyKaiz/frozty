<?php

class usermodel{
    function getUsers() {
        $pdo = frozty::getInstance('pdo');
        $stmt = $pdo->query("SELECT * FROM users");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $basket = frozty::getInstance('basket');
        foreach ($result as $key => $value) {
            $basket->set($value['id'],$value['name']);
        }        
    }
}
