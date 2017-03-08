<?php 
class cache {

	private $cache;

	public function setVar($v) {

		$this->readCache();

		$this->cache = $v;

		$this->saveCache();
	}


	public function getVar($nome) {
		$this->readCache();

		return $this->cache->$nome;

	}

	private function readCache() {

		$this->cache = new stdClass();

		if (file_exists('cache.cache')) {
			$this->cache = json_decode(file_get_contents('cache.cache'));
		}

	}

	private function saveCache() {
		file_put_contents('cache.cache', json_encode($this->cache));
     
	}
}

if (file_exists('cache.cache')) {
		
		require 'cache.cache';

	} else {
    ob_start();
	require 'paginas.php';

	$html = ob_get_contents();
	ob_end_clean();
	file_put_contents('cache.cache', $html);
	echo $html;
    }

?>