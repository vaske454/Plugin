<?php
class DeclareTaxonomy
{
    //declare three taxonomies (called type,location and CPT )
    public static $type = [
        'hierarchical'=>false,
        'labels'=>[
            'name'=> 'Types',
            'singular_name'=> 'Type',
            'menu_name'=>'Type',
            'add_new_item'=>'Add New Type',
            'new_item_name'=>'New Type Name',
            'edit_item'=>'Edit Type',
            'update_item'=>'Update Type',
            'all_items'=>'All Types',
            'search_items'=>'Search Types',
            'parent_item'=>'Parent Type',
            'parent_item_colon'=>'Parent Type',
        ],
        'show_ui'=>true,
        'show_admin_column'=>true,
        'query_var'=>true,
        'rewrite'=>array ('slug'=>'type'),
    ];

    public static $location = [
        'hierarchical'=>false,
        'labels'=>[
            'name'=> 'Locations',
            'singular_name'=> 'Location',
            'menu_name'=>'Location',
            'add_new_item'=>'Add New Location',
            'new_item_name'=>'New Location Name',
            'edit_item'=>'Edit Location',
            'update_item'=>'Update Location',
            'all_items'=>'All Locations',
            'search_items'=>'Search Locations',
            'parent_item'=>'Parent Locatione',
            'parent_item_colon'=>'Parent Locatione',
        ],
        'show_ui'=>true,
        'show_admin_column'=>true,
        'query_var'=>true,
        'rewrite'=>array ('slug'=>'location'),
    ];

    public static $cpt = [
        'hierarchical'=>false,
        'labels'=>[
            'name'=> 'CPTs',
            'singular_name'=> 'CPT',
            'menu_name'=>'CPT',
            'add_new_item'=>'Add New CPT',
            'new_item_name'=>'New CPT Name',
            'edit_item'=>'Edit CPT',
            'update_item'=>'Update CPT',
            'all_items'=>'All CPTs',
            'search_items'=>'Search CPTs',
            'parent_item'=>'Parent CPT',
            'parent_item_colon'=>'Parent CPT',
        ],
        'show_ui'=>true,
        'show_admin_column'=>true,
        'query_var'=>true,
        'rewrite'=>array ('slug'=>'cpt'),
    ];
}
