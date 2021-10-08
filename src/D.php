<?php

namespace Milton2913\D;

/**
 * 
 */
class D
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }


	static $_bucket;

	static function echo ( ...$data){
		static::$_bucket[] = join()(",", $data);
	}

	static function print($data){
		static::$_bucket[] = $data;
	}

		static function print_r($data){
		static::$_bucket[] = print_r($data, true);
	}

		static function print_r( ...$data){
		static::$_bucket[] = printf( ...$data);
	}

			static function var_dump($data){
				ob_start();
				var_dump($data)
		static::$_bucket[] =ob_get_clean();
	}

			static function dump($data){
				foreach ($static::$_bucket  as $key => $value) {
					echo $value . "\n";
				}
	}

		static function dumpJSON(){
		echo json_encode(static::$_bucket);
		}
}

$person = "John Doe";

D::echo ($person);
$data = ['country']=>'Bangladesh','capital'=>'Dhaka'];
D::print_r($data);