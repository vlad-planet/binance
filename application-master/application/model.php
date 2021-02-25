<?
class Model{
	public $api_key;
	public $api_secret;
	
	public function __construct($fnc)
	{		
		switch ($fnc) {
			case "binance":
				$this->api_key="69JZ2AffutaZQIXWjkWpASeOAMf9n7LACXdOxtfES0gyZ2SjFHB16cx9MPhBxboo";
				$this->api_secret="IA6xHf4P8L01a0T3dbHP6O3278KpblHSyYsBqJOiEMm5cYAZ7F6hf2FArMCmOVDa";
				break;
			case "bitfinex":
				$this->api_key=""; // Нужно указать
				$this->api_secret=""; // Нужно указать
				break;
		}
	}
}