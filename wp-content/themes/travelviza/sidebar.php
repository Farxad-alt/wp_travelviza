<div class="col-md-3  sidebar position-relative sidbar-block ms-3">
	<?php
	dynamic_sidebar('sidebar-1');

	// 	dynamic_sidebar('Foo_Widget');
	$sidebar1 = wp_get_sidebar('sidebar-1');




	?>
	<?php
	$car = new Foo_Widget;


	// 	$car->description = 'желтый';
	// 	$car->number = 35;
	// 	$car->name = 'Новый виджет';
	// 	$car->text = 'Узнать больше';

	// 	echo "<h3>Новый виджет</h3>
	// Узнать больше {$car->name}";
	?>
</div>