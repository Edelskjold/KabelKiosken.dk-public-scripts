<?
$array = array(
	'APIUSER' => 'API_USER',
	'APIPASSWORD' => 'API_PASSWORD',
	'Orders' => 
		array(
			array(
				'custom_note' => 'Ex. Customer Number #15',
				'receiver_name' => 'Jon Doe',
				'delivery_street' => 'SomeStreet 13A',
				'delivery_city' => 'Copenhagen',
				'delivery_zipcode' => '2800',
				'delivery_country' => 'Denmark',
				'delivery_method' => 'PostNord',
				'products' => array(
					array('product_id' => 2,
					'amount' => 3
					),
					array('product_id' => 5,
					'amount' => 1
					),
				)
			),
			array(
				'custom_note' => 'Ex. Customer Number #16',
				'receiver_name' => 'Jon Doe',
				'delivery_street' => 'SomeStreet 13A',
				'delivery_city' => 'Copenhagen',
				'delivery_zipcode' => '2800',
				'delivery_country' => 'Denmark',
				'delivery_method' => 'GLS',
				'products' => array(
					array('product_id' => 7,
					'amount' => 1
					),
				)
			),
			
		)
	
	);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://kabelkiosken.dk/importer-ordre",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "orderData=".json_encode($array),
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
