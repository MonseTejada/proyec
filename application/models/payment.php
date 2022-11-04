<?php 

require_once("/path/to/lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_eYvWV7gSDkNYXsmr");
\Conekta\Conekta::setApiVersion("2.0.0");

$tokenID = $_POST["conektaTokenId"];


//Para los siguientes pasos en la integración un token_id de prueba se provee. 
//Para tener acceso al token que se generó en el paso 1.0 → es necesario accesarlo en el objeto conektaSuccessResponseHandler["id"] 
//Generación del cliente y la información de pago.
try {
  $customer = \Conekta\Customer::create(
    [
      "name" => "Fulanito Pérez",
      "email" => "fulanito@conekta.com",
      "phone" => "+52181818181",
      "metadata" => ["reference" => "GM | L-1A | GAMMA", "random_key" => "random value"],
      "payment_sources" => [
        [
          "type" => "card",
          "token_id" => $tokenID
        ]
      ]//payment_sources
    ]//customer
  );
} catch (\Conekta\ProccessingError $error){
  echo $error->getMesage();
} catch (\Conekta\ParameterValidationError $error){
  echo $error->getMessage();
} catch (\Conekta\Handler $error){
  echo $error->getMessage();
}


//Implementación de una orden.
try{
  $order = \Conekta\Order::create(
    [
      "line_items" => [
        [
          "name" => "Lote industrial",
          "unit_price" => 10000,
          "quantity" => 120
        ]
      ],
      "shipping_lines" => [
        [
          "amount" => 1500,
           "carrier" => ""
        ]
      ], //shipping_lines - physical goods only
      "currency" => "MXN",
      "customer_info" => [
        "customer_id" => $customer->id
      ],
      "shipping_contact" => [
        "address" => [
          "street1" => "",
          "postal_code" => "",
          "country" => ""
        ]
      ], //shipping_contact - required only for physical goods
      "metadata" => ["reference" => "12987324097", "more_info" => "lalalalala"],
      "charges" => [
        [
          "payment_method" => [
            "type" => "default"
           ] //payment_method - use customer's default - a card
             //to charge a card, different from the default,
             //you can indicate the card's source_id as shown in the Retry Card Section
        ]
      ]
    ]
  );
} catch (\Conekta\ProcessingError $error){
  echo $error->getMessage();
} catch (\Conekta\ParameterValidationError $error){
  echo $error->getMessage();
} catch (\Conekta\Handler $error){
  echo $error->getMessage();
} echo "ID: ". $order->id;
echo "Status: ". $order->payment_status;
echo "$". $order->amount/100 . $order->currency;
echo "Order";
echo $order->line_items[0]->quantity .
      "-". $order->line_items[0]->name .
      "- $". $order->line_items[0]->unit_price/100;
echo "Payment info";
echo "CODE:". $order->charges[0]->payment_method->auth_code;
echo "Card info:".
      "- ". $order->charges[0]->payment_method->name .
      "- ". $order->charges[0]->payment_method->last4 .
      "- ". $order->charges[0]->payment_method->brand .
      "- ". $order->charges[0]->payment_method->type;

?>