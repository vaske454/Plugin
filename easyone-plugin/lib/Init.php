<?php
require_once(SGI_SRLAT_PATH . 'lib//Tax.php'); //connection with Tax.php file and his class
require_once(SGI_SRLAT_PATH . 'lib/Group.php');
require_once(SGI_SRLAT_PATH . 'lib/allPosts/Post.php');
require_once(SGI_SRLAT_PATH . 'lib/Universal.php');

/*
Author: Vasilije Tomovic
Version: 1.0
Class: Init
*/
class Init
{
    public function __construct()
    {
        add_action('init',[$this,'start']); //calling methods to create cpt when we initial wordpress. This is hook 	
    }

    public function start()
    {
        $this->createACFields();//call this function
        $this->myPost();
        $cpt=new Universal('Real Estate','news', ['type','location']);//creating custom post type and taxonomies
        $cpt1=new Universal('Real Estate 2','news1',['cpt']);//parametars: name cpt, slug, array with taxonomies name
    }

    private function createACFields()
    {  
        $acf = new Group ('grpup_1','My group','news', 'My group'); //creating an Group class object
        $field = new Field ('My field','grpup_1','text','Text field');//creating an Field class object
        $fieldone = new Field ('My fieldone','grpup_1','image','Image field');
        $fieldtwo = new Field ('My fieldtwo','grpup_1','url','URL field');
    }

    public function myPost(){
        $post=new Post();//creating an Post class object
    }
}
