<?php

Autoloader::map(array(
	'Eloquent\\Model'    => BUNDLE_PATH.'eloquent/model'.EXT,
	'Eloquent\\Hydrator' => BUNDLE_PATH.'eloquent/hydrator'.EXT,
));