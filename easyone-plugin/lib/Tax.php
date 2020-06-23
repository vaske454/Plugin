<?php
require_once(SGI_SRLAT_PATH . 'lib/DeclareTaxonomy.php');//connection with DeclareTaxonomy.php file and his class
class Tax
{
    public $name;

    public function __construct($name, $slug)
    {
        $this->name=$name; //this varriables inherits parameters we first defined 
        $this->slug=$slug;
       $this->createTaxonomy();//calling this function
    }
    public function createTaxonomy()
    {
        register_taxonomy($this->name,array( $this->slug),DeclareTaxonomy::${$this->name});//register taxonomy
    }
}