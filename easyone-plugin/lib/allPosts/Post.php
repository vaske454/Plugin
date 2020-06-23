<?php
//require_once(SGI_SRLAT_PATH . 'lib//Universal.php'); //connection with Universal.php file and his class
class Post
{
	public function __construct()
    {
			$this-> script_enqueuer(); //calling function script_enqueuer when we initial wordpress. This is hook

				//connections to ajax and calling functions. This is hooks
				add_action( 'wp_ajax_search',[$this, 'search'] );
				add_action('wp_ajax_nopriv_search',[$this, 'search']);
        add_action('wp_ajax_send_my_mail',[$this, 'send_my_mail']);
				add_action('wp_ajax_nopriv_send_my_mail',[ $this, 'send_my_mail']);
				add_action('wp_ajax_deletePost',[ $this, 'deletePost']);
        add_action('wp_ajax_send',[ $this, 'send']);
        add_action('wp_ajax_nopriv_send',[ $this, 'send']);
		}
		public function script_enqueuer() {
				wp_register_script( "liker_script", plugin_dir_url(__FILE__).'liker_script.js', array('jquery') );
				wp_localize_script( 'liker_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
				wp_enqueue_script( 'jquery' );
				wp_enqueue_script( 'liker_script' );
	 }

	 public function search(){
				$title = $_POST['gsearch']; //a variable that inherits what I type in search (see created forms in single.php)
				$args = ['post_type' => 'news', 'post_status' => 'publish', 's' => sanitize_text_field($title)];//search post argument
				$posts = new WP_Query( $args );//The WordPress Query class
					if($posts->have_posts()){	//if we have this post, give me back this post
						while($posts->have_posts()){
							$posts->the_post();
							//write this title and dobro je in response
							echo '<li>' . get_the_title() . '</li>';
							echo 'dobro je';
					}
			}
			die;
		}

		public function send_my_mail(){
				$id=$_POST['forwhat'];
				$title = $_POST['title'];
				$desc = $_POST['desc'];

				$my_post = array(
						'ID'           => intval($id),
						'post_title'   => $title,
						'post_content' => $desc,
				);
				wp_update_post( $my_post, true ); 	//update post
				if (is_wp_error($post_id)) { //if we have error, do this
					$errors = $post_id->get_error_messages();
					foreach ($errors as $error) {
							echo $error;
					}
				} else {
					echo 'ok';
				}
					die();
		}

		public function deletePost(){
				$id=$_POST['forwhat'];
				wp_delete_post( $id, true); //delete post
				echo 'nije lose';//write in response in inspect element
				die();
		}

		public function send()
		{
				$title = $_POST['title'];
				$desc = $_POST['desc'];
				//insert in the posts what I type in the description and textbox
				wp_insert_post( array(
					'post_title'   => $title,
					'post_content' => $desc,
				));
				echo 'okej';//write in response in inspect element
					die();
			}
}
