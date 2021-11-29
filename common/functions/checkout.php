<?php
session_start();
require_once('../stripe-php/init.php');
include "../../common/vars.php";

use Stripe\Checkout\Session;
use Stripe\Stripe;

header('Content-Type: application/json');

Stripe::setApiKey('API_KEY_HERE');

// post data
$data = json_decode(file_get_contents('php://input'), true);

// get data from db
// read file
$json = file_get_contents('../db.json');
$orders = json_decode(file_get_contents("../orders.json"), true);

// Converts it into a PHP object
$products = json_decode($json);
$line_items = array();

if (!isset($_GET['cat'])) {
    foreach ($data as $product_id) {
        $product = $products[$product_id['id']];
        $price_data = [
            'price_data' => [
                'currency' => 'lkr',
                'unit_amount' => floatval($product->price) * 100,
                'product_data' => [
                    'name' => $product->name,
                    'images' => [$product->image],
                ],
            ],
            'quantity' => $product_id['qty'],
        ];
        array_push($line_items, $price_data);
    }
} else if ($_GET['cat'] == 'booking') {
    $price_data = [
        'price_data' => [
            'currency' => 'lkr',
            'unit_amount' => 250000,
            'product_data' => [
                'name' => $data['name'],
                'images' => ['https://c1.sfdcstatic.com/content/dam/blogs/ca/Blog%20Posts/shake-up-sales-meeting-og.jpg'],
            ],
        ],
        'quantity' => 1,
    ];
    array_push($line_items, $price_data);
}

$origin = $_GET['origin'];
$checkout_session = Session::create(
    [
//        'customer_email' => 'customer@example.com',
        'payment_method_types' => ['card'],
        'shipping_address_collection' => [
            'allowed_countries' => ['LK'],
        ],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => $GLOBALS['domain'] . '/' . $origin . '/pages/orderHistory.php?status=success',
        'cancel_url' => $GLOBALS['domain'] . '/' . $origin . '/pages/orderHistory.php?status=failed',
    ]);
$session_id = $checkout_session->id;
$orders[$session_id] = $data;
file_put_contents("../orders.json", json_encode($orders));
echo json_encode(['id' => $session_id]);
