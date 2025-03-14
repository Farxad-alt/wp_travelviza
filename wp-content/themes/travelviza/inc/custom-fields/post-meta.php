<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Произвольное поле')
	->add_fields(array(
		Field::make('text', 'my_text', 'Текстовое поле'),
	));
