<?php
/*
Plugin Name: My First Plugin
Plugin URI: http://www.example.com
Description: A first plugin alternative to the boring "Hello World" examples
Author: Stephan Jones
Version: 1.0.0
Author URI: http://www.example.com
*/

add_action('admin_menu', 'myfirstplugin_admin_actions');
function myfirstplugin_admin_actions() {
	add_options_page('MyFirstPlugin', 'My First Plugin', 'manage_options', __FILE__, 'myfirstplugin_admin');
	wp_register_style('MyFirstPlugin', plugins_url('inc/css/style.css',__FILE__ ));
	wp_enqueue_style('MyFirstPlugin');
	wp_register_script('MyFirstPlugin', plugins_url('inc/js/scripts.js',__FILE__ ));
  wp_enqueue_script('MyFirstPlugin');
}

function myfirstplugin_admin()
{
	include("inc/functions.php");
	global $wpdb;

	$mytestdrafts = $wpdb->get_results(
		"
		SELECT ID, post_title
		FROM $wpdb->posts
		WHERE post_status = 'publish'
		"
	);
?>

	<div class="rTable">
		<div class="rTableRow">
			<div class="rTableHead"><strong>Post Title</strong></div>
			<div class="rTableHead"><span style="font-weight: bold;">Post ID</span></div>
		</div>
		<?php
			foreach ($mytestdrafts as $mytestdraft)
			{
		?>
			<div class="rTableRow">
					<div class="rTableCell"><?php echo $mytestdraft->post_title;?></div>
					<div class="rTableCell"><?php echo $mytestdraft->ID;?></div>
			</div>
		<?php
			}
		?>
	</div>

	<form action="" method="POST">
		<input type="text" name="post_to_delete" value=""></input>
		<input type="submit" name="delete_post" value="Delete Post" class"button-primary" ></input>
	</form>
<?php
if(isset($_POST['delete_post']))
{
	$post_to_delete = $_POST['post_to_delete'];
	echo delete_post($post_to_delete);
}
}
?>
