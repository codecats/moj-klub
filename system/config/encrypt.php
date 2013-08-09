<?php defined('SYSPATH') OR die('No direct script access.');

return array(

	'default' => array(
		/**
		 * The following options must be set:
		 *
		 * string   key     secret passphrase
		 * integer  mode    encryption mode, one of MCRYPT_MODE_*
		 * integer  cipher  encryption cipher, one of the Mcrpyt cipher constants
		 */
			
		'cipher' => MCRYPT_DES,
		'mode'   => MCRYPT_MODE_ECB,
		'key'	 => hash('sha256', Session::instance()->id().Cookie::$salt )
	),
	'url' => array(
		'cipher' => MCRYPT_3DES,
		'mode'   => MCRYPT_MODE_ECB,
		'key'	 => hash('sha256', Session::instance()->id().Cookie::$salt )
	)

);
