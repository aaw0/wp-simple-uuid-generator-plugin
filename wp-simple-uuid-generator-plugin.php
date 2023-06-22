<?php
/**
 * Plugin Name:  Generate UUID
 * Plugin URI:   https://github.com/aaw0
 * Description:  Generate a UUID
 * Version:      1.0.0
 * Author:       Ali Awwad
 * Author URI:   https://adnec.ae
 * License:      MIT License
 */

 
// Register a menu item on the left sidebar
function uuid_generator_menu() {
    add_menu_page(
      'UUID Generator',
      'UUID Generator',
      'read',
      'uuid-generator',
      'uuid_generator_page',
      'dashicons-admin-generic',
      6
    );
  }
  add_action('admin_menu', 'uuid_generator_menu');
  
  // Generate and display the UUID
  function uuid_generator_page() {
    $uuid = wp_generate_uuid4();
    ?>
    <div class="wrap">
      <h1 class="">UUID Generator</h1>
      <div class="is-dismissible notice notice-success">
      <p><?php echo $uuid; ?></p>
      </div>
    </div>
    <?php
  }
