<?php 
	
	define("URL", "https://public-api.tracker.gg/v2/csgo/standard/profile/");
    
	class API {
		
		public $query;
		
		public function __construct(string $query) {
			
			ob_start();
			
			$this->query = $query;
			
			$this->getStats();
			
			ob_end_flush();
			
		}
		
		public function getStats() {
			
			$url = URL .  'steam/' . $this->query;
			
			$curl = curl_init($url);
			
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HTTPHEADER, [ 'TRN-Api-Key: b3a5ad7d-9216-4237-a03a-af1ccea7b64e' ]);
			
			$response = curl_exec($curl) . PHP_EOL;
			curl_close($curl);
			
			$array = json_decode($response, true);
			
			/*
			return $array["data"]["platformInfo"]["platformSlug"];
			*/
		}
		
	}
?>