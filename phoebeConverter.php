<?php

class PhoebeConverter {

	public function __construct() {
		$map_list = json_decode(file_get_contents("map/map.json"), true);
		$this->map = array(
			'ipa'    => array(),
			'xsampa' => array(),
			'cft'    => array(),
		);
		foreach ($map_list as $r){
			$this->map['xsampa'][$r[0]] = $r[1];
			$this->map['ipa'][$r[0]] = $r[2];
			$this->map['cft'][$r[0]] = $r[3];
		}
	}

	public function convert($string, $system){
		if (!in_array($system, array('ipa', 'xsampa', 'cft'))){
			throw new InvalidArgumentException("<system> must be: 'ipa' | 'xsampa' | 'cft'");
		}

		$converted = '';
		$snd_array = str_split($string);

		foreach ($snd_array as $i){
			$converted .= $this->map[$system][$i];
		}
		return $converted;
	}

}

// Example
#$p = new PhoebeConverter();
#$phoebe_to_convert = 'Zili bili Ded a bapka';
#$converted = $p->convert($phoebe_to_convert, 'ipa');
#echo('original: ' . $phoebe_to_convert . ' ||| converted: ' . $converted);
?>
