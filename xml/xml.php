<pre style="font-size: 15px;">
<?php 
	function arr_to_xml($value, &$xml_value) {
		
		foreach ($value as $key => $valor) {
			if (is_array($valor)) {
				if (is_numeric($key)) {
					$key = 'item'.$key;
				}

				$subnode = $xml_value->addChild($key);
				arr_to_xml($value, $subnode);
			} else {

				$xml_value->addChild($key, htmlspecialchars($valor));

			}
		}

	}

	$value = array("machine" => 37809);


	$xml_data = new simplexmlElement("<value/>");

	arr_to_xml($value, $xml_data);

	$result = $xml_data->asXML();
	echo $result;
?>
</pre>