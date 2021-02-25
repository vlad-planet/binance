<?
foreach($data as $key=>$value)
		{
			if($value["available"] <= 0){
				echo $key.': '.$value["available"].'<br>';
			}
		}

?>

