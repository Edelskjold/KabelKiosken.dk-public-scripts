<?php
/**
 * The following End User License Agreement ("EULA") in the program/file represents the contractual conditions between you ("Licensee") and the author listed in this document @author for the use of software including related media, documentation (for example program descriptions, manuals) and other documents and materials. By installing and- or using the software on your computer/server, you declare that you have a written consent from the @author to use the associated files. If you do not have a written consent, you must not install the software. If you are installing the software you automatically accepts the license agreement.
 *
 * @file      import.php
 * @package   KabelKiosken-Helper
 * @version   1.0.0
 * @author    Mads K. Edelskjold
 * @copyright Copyright (c) 2017 by KabelKiosken IVS. All rights reserved.
 **/
 
 	function getUrl($image){
	 	return 'https://kabelkiosken.dk/assets/img/products/'.$image;
 	}
	
	$arrContextOptions=array(
	    "ssl"=>array(
	        "verify_peer"=>false,
	        "verify_peer_name"=>false,
	    ),
	);
	
	$productfile_raw = file_get_contents('https://kabelkiosken.dk/lager/{API_KEY}', false, stream_context_create($arrContextOptions));
	$productfile = json_decode($productfile_raw, true);
	
	foreach($productfile as $product){
		/*
			Insert your database code here.
			Existing variables:
				- product_id
				- name
				- url
				- retail_price
				- price
				- producer
				- small_description
				- images (array)
			Variables are used as $productfile['product_id'];
		*/
	}
?>
