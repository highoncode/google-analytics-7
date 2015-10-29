<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.shakilahmed.net
 * @since      1.0.0
 *
 * @package    Google_Analytics_7
 * @subpackage Google_Analytics_7/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    
    <form method="post" name="gacode_options" action="options.php"> 

    <?php settings_fields($this->plugin_name);
    do_settings_sections($this->plugin_name); ?>
         <?php $options = get_option($this->plugin_name); 
     $gacode = $options['gacode']; ?>
                    <fieldset>
                        <p><?php _e('Paste your Google Analytics code here', $this->plugin_name); ?></p>
                        <legend class="screen-reader-text"><span><?php _e('Paste your Google Analytics code here', $this->plugin_name); ?></span></legend>
                        <textarea cols="80" rows="10" id="<?php echo $this->plugin_name; ?>-gacode" name="<?php echo $this->plugin_name; ?>[gacode]" value=""><?php if(!empty($gacode)) echo $gacode; ?></textarea>
                    </fieldset>


        <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>

    </form>

</div>