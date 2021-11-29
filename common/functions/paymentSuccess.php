<?php
session_start();

$orders = json_decode(file_get_contents("../orders.json"), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $order_id = $data['data']['object']['id'];
    foreach ($orders as $key => $order) {
        if ($key == $order_id) {
            $orders['status'][$key] = "PENDING";
            $json = json_encode($orders);
            file_put_contents("../orders.json", $json);
            echo "Success";
            return;
        }
    }
}
echo "Error";
