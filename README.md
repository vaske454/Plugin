# Plugin
Create acf plugin

## Usage
In order for the plugin to work coreectly be sure to implement this block of code in your theme's single.php file (I am used to airi theme)
```
<ul id="tax" style="position:absolute; top:70%;font-size:20px;">
	<?php
	$terms = get_terms( array ( 'taxonomy' => 'type', 'hide_empty' => false, 'parent' => 0, 'orderby' => 'description', 'order' => 'ASC' ));
	$term_obj_list = get_the_terms( get_the_ID(),'type');

	$terms1 = get_terms( array ( 'taxonomy' => 'location', 'hide_empty' => false, 'parent' => 0, 'orderby' => 'description', 'order' => 'ASC' ));
	$term_obj_list1 = get_the_terms( get_the_ID(),'location');

	$terms2 = get_terms( array ( 'taxonomy' => 'cpt', 'hide_empty' => false, 'parent' => 0, 'orderby' => 'description', 'order' => 'ASC' ));
	$term_obj_list2 = get_the_terms( get_the_ID(),'cpt');

	$arr=[];

	if($term_obj_list){
		foreach($term_obj_list  as $obj){
			$arr[]=$obj->name;
		}
	}
	if($term_obj_list1){
		foreach($term_obj_list1  as $obj){
			$arr[]=$obj->name;
		}
	}
	if($term_obj_list2){
		foreach($term_obj_list2  as $obj){
			$arr[]=$obj->name;
		}
	}

	if ( $terms != null || $terms1 !=null ||$terms2 !=null){
		if($terms){
			foreach ($terms as $term) {
				// The $term is an object, so we can get the names.
				//use var_dump($term) to see other options available
		
				if (in_array( $term->name, $arr)) {
					echo '<li style="color:blue">'.$name = $term->name .'</li>';	
				} else {
					echo '<li>'.$name = $term->name .'</li>';	
				}
			}
		}
			if($terms1){
				foreach ($terms1 as $term) {
					if (in_array( $term->name, $arr)) {
						echo '<li style="color:blue">'.$name = $term->name .'</li>';	
					} else {
						echo '<li>'.$name = $term->name .'</li>';	
					}
				}
			}
			if($terms2){
				foreach ($terms2 as $term) {
					if (in_array( $term->name, $arr)) {
						echo '<li style="color:blue">'.$name = $term->name .'</li>';	
					} else {
						echo '<li>'.$name = $term->name .'</li>';	
					}
				}
			}
		}
	?>
</ul>

<form id="form_id">
	<input type="search" id="gsearch" name="gsearch">
	<button type="button" id="pretraga" name="button">PRETRAZI</button>
	<div id="datafetch">Search results will appear here!</div>
</form>
<br><br><br><br>


 Name: <br>
	<input id="name" name="name" type="text"> <br>
	<input id="id" name="id" type="hidden" value="<?php echo get_the_ID(); ?>">
	Message: <br>
	<textarea cols="50" rows="5" id="message" name="message"></textarea> <br>
	<button type="button" id="ja" name="button">DODAJ</button>
	<button type="button" id="ti" name="button">BRISI</button>
	<br>



	<br> Adress: <br>
	<input id="address" name="address" type="text"> <br>
	Real Estade: <br>
	<textarea cols="50" rows="5" id="real" name="real"></textarea> <br>
	<button type="button" id="button2" name="button2">SACUVAJ</button><br>
```
