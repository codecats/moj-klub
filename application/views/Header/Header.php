<?php defined('SYSPATH') or die('No direct script access.');?>
	<header>
<?php echo View::factory('Header/Menu/Top')
	->set('header_menu_access', $header_menu_access);?>
    </header>