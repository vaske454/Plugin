<?php 
 require_once(SGI_SRLAT_PATH . 'lib//Tax.php'); //connection with Tax.php file and his class
class Universal{
	public $name;
	public $slug;
	public $tax;
	public function __construct( string $name,string $slug, array $tax)
    {		
				$this->name=$name;//this varriables inherits parameters we first defined (in this case public name)
				$this->slug=$slug;
				$this->tax=$tax;
				$this->init();	//call this function
		}

		private function init(){
				$this->createTax();
				$this->setCPT();
		}

		public function createTax(){
			//pass this array a variable $ggg
				foreach ($this->tax  as $ggg ){
					 new Tax($ggg, 	$this->slug);//creating object
				}
		}

		public function setCPT(){
			//creating custom post type
			$labels = array(
				'name'=> $this->name,
				'singular_name'=> $this->name,
				'menu_name'=>$this->name,
				'name_admin_bar'=>$this->name.'Admin Bar',
				'add_new'=>'Add New',
				'add_new_item'=>'Add New'.$this->name,
				'new_item'=>'New Real Estate',
				'edit_item'=>'Edit Real Estate',
				'view_item'=>'View Real Estate',
				'all_items'=>'All Real Estates',
				'search_items'=>'Search Real Estates',
				'not_found'=>'Not Found',
		);
		$args = array(
			'labels'=>$labels,
			'public'=>true,
			'query_var'=>true,
			'rewrite'=>array ('slug'=>$this->slug),
			'has_archive'=>true,
			'hierarchical'=>false,
		);
	register_post_type($this->slug,$args);//register cpt
		}
}