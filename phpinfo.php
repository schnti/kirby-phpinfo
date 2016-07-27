<?php

if (c::get('ka.phpinfo.active', true)) {
	kirby()->routes(array(
		array(
			'pattern' => array('phpinfo', 'phpinfo.php'),
			'action' => function () {
				return new Response(phpinfo());
			}
		)
	));
}