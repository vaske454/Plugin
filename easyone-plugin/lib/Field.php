<?php
require_once(SGI_SRLAT_PATH . 'lib/Group.php'); //connection with Group.php file and his class
class Field
{
    public $name;
    public $parent;
    public $type;
    public $nickname;

    public function __construct(string $name, string $parent, string $type, string $nickname)
    {
        $this->name=$name; //this varriables inherits parameters we first defined
        $this->parent=$parent;
        $this->type=$type;
        $this->nickname=$nickname;
        $this->createFields(); //calling methods to create acf Fields
    }

    public function createFields()
    {
        //create acf field
        acf_add_local_field(array(
            'key'=>$this->name,
            'label'=>$this->nickname,
            'name'=>'sub_field',
            'type'=>$this->type,
            'parent'=>$this->parent
        ));
    }
}
