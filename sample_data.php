<?php

// Create Sample data for an Order
$orderData=[
     'currency_id'  => 'USD',
     'email'        => 'hello@addwebsolution.in', //buyer email id
     'shipping_address' => [
            'firstname'    => 'Mary', 
            'lastname'     => 'Hall',
            'street' => '2574 Spinnaker Lane',
            'city' => 'Sterling',
            'country_id' => 'US',
            'region' => 'IL',
            'postcode' => '61081',
            'telephone' => '815-718-0029',
            'fax' => '12367',
            'save_in_address_book' => 1
    ],
    //array of product which order you want to create
   'items'=> [ 
            ['product_id'=>'1','qty'=>1],
            ['product_id'=>'2','qty'=>2]
    ]
];


?>
