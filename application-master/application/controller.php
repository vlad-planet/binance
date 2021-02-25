<?
class Table{
	public $load;
	
	public function __construct($fnc)
    {
		$this->load = new Load();
		$this->model = new Model($fnc);
		$this->$fnc();
	}

	private function binance()
	{
		$api = new Binance\API($this->model->api_key,$this->model->api_secret);
		//var_dump($api);
		$api->useServerTime();
		$ticker = $api->prices(); // Убедитесь, что у вас есть обновленный объект тикера, чтобы это работало
		$data = $api->balances($ticker);
		//echo '<pre>';
		//print_r($data);
		$this->load->view('binance.php', $data);
	}
	
	private function bitfinex()
	{
		$data = new Bitfinex($this->model->api_key,$this->model->api_secret);

		$this->load->view('bitfinex.php', $data);
	}
}