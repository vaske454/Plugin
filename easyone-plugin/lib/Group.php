<?php
require_once(SGI_SRLAT_PATH . 'lib/Field.php'); //connection with Field.php file and his class
class Group
{
    public $group;
    public $label;
    public $line;
    public $nickname;

    public function __construct(string $group, string $label, string $line, string $nickname)
    {  
        $this->group=$group;//this varriables inherits parameters we first defined
        $this->label=$label;
        $this->line=$line;
        $this->nickname=$nickname;
        $this->createGroup();//calling methods to create acf Group
    }

    public function createGroup()
    {
      //create acf group
        acf_add_local_field_group( [
            'key'=>$this->group,
            'title'=>$this->label,
            'fields'=> array (
                array (
                'key'=>'group_1',
                'label'=>$this->nickname,
                'name'=>'sub_title',
                'type'=>'text',
                ),
            ),
            'location'=>array (
                array (
                  array (
                'param'=>'post_type',
                'operator'=>'==',
                'value'=>$this->line,
              ),
            ),
          ),
        ] );
    }
}
