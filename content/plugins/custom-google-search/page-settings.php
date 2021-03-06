<?php

$settings = $this->settings;

?>


<script type="text/javascript">

    jQuery( document ).ready( function() {

        jQuery( '#cgs_form' ).submit( function () {
            if ( '' == jQuery( '#settings_embed_code' ).val() ) {
                jQuery( '#settings_embed_code' ).parent().parent().css( 'background-color', '#FFEBE8' );
                jQuery( '#settings_embed_code' ).focus();
                return false;
            }
            return true;
        });

    });

</script>


<div class="wrap">
    <h2><?php _e( 'Settings', $this->text_domain ) ?></h2>

    <?php
        //Display status message
        if ( isset( $_GET['dmsg'] ) ) {
            ?><div id="message" class="updated fade"><p><?php echo urldecode( $_GET['dmsg'] ); ?></p></div><?php
        }

    ?>

    <form name="cgs_form" id="cgs_form" method="post">

        <h3><?php _e( 'General', $this->text_domain ) ?></h3>
        <table class="form-table">
            <tbody >
                <tr>
                    <th>
                        <label for="settings_engine_id"><?php _e( 'Embed Code/Search ID', $this->text_domain ) ?>:</label>
                        <span class="description">
                            <?php _e( '(required)', $this->text_domain ) ?>
                        </span>
                        <br />
                        <span class="description">
                            <?php _e( "Don't have it? Get it ", $this->text_domain ) ?> <a href="http://www.google.com/cse/" target="_blank"><?php _e( 'here', $this->text_domain ) ?></a>
                        </span>
                    </th>
                    <td>
                        <textarea name="settings[embed_code]" id="settings_embed_code" cols="80" rows="8"><?php echo ( isset( $settings['embed_code'] ) ) ? stripslashes( $settings['embed_code'] ) : ''; ?></textarea>
                        <br />
                        <span class="description">
                            <?php _e( 'Paste the Custom Search embed code or Search engine unique ID here. Note that any customized styles will be stripped out.', $this->text_domain ) ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="page_mode"><?php _e( 'Display search results as', $this->text_domain ) ?>:</label>
                    </th>
                    <td>
                        <select name="settings[page_mode]" id="settings_style" >
                            <option value="page" <?php echo ( isset( $settings['page_mode'] ) && 'page' == $settings['page_mode'] ) ? 'selected' : ''; ?> ><?php _e( 'Standard Page', $this->text_domain ) ?></option>
                            <option value="search" <?php echo ( isset( $settings['page_mode'] ) && 'search' == $settings['page_mode'] ) ? 'selected' : ''; ?> ><?php _e( 'Search Page', $this->text_domain ) ?></option>
                            <option value="generated" <?php echo ( isset( $settings['page_mode'] ) && 'generated' == $settings['page_mode'] ) ? 'selected' : ''; ?> ><?php _e( 'Generated Page (risky)', $this->text_domain ) ?></option>
                        </select>
                        <br />
                        <span class="description">
                            <?php _e( 'Decide what method would you like to use to display search results. Its best to try them and choose the one that works best with your theme.', $this->text_domain ) ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="settings_style"><?php _e( 'Style', $this->text_domain ) ?>:</label>
                    </th>
                    <td>
                        <select name="settings[style]" id="settings_style" >
                            <option value="DEFAULT" <?php echo ( isset( $settings['style'] ) && 'DEFAULT' == $settings['style'] ) ? 'selected' : ''; ?> ><?php _e( 'Default', $this->text_domain ) ?></option>
                            <option value="BUBBLEGUM" <?php echo ( isset( $settings['style'] ) && 'BUBBLEGUM' == $settings['style'] ) ? 'selected' : ''; ?> ><?php _e( 'Purple', $this->text_domain ) ?></option>
                            <option value="GREENSKY" <?php echo ( isset( $settings['style'] ) && 'GREENSKY' == $settings['style'] ) ? 'selected' : ''; ?> ><?php _e( 'Green', $this->text_domain ) ?></option>
                            <option value="ESPRESSO" <?php echo ( isset( $settings['style'] ) && 'ESPRESSO' == $settings['style'] ) ? 'selected' : ''; ?> ><?php _e( 'Coffee', $this->text_domain ) ?></option>
                            <option value="SHINY" <?php echo ( isset( $settings['style'] ) && 'SHINY' == $settings['style'] ) ? 'selected' : ''; ?> ><?php _e( 'Silver', $this->text_domain ) ?></option>
                            <option value="MINIMALIST" <?php echo ( isset( $settings['style'] ) && 'MINIMALIST' == $settings['style'] ) ? 'selected' : ''; ?> ><?php _e( 'Minimalist', $this->text_domain ) ?></option>
                        </select>
                        <br />
                        <span class="description">
                            <?php _e( 'Color scheme for the search box.', $this->text_domain ) ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="settings_same_window"><?php _e( 'Open clicked search result in same window', $this->text_domain ) ?>:</label>
                    </th>
                    <td>
                        <input name="settings[same_window]" id="settings_same_window" type="checkbox" value="1" <?php echo ( isset( $settings['same_window'] ) && '1' == $settings['same_window'] ) ? 'checked' : '' ; ?> />
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="settings_hide_button"><?php _e( 'Hide search button', $this->text_domain ) ?>:</label>
                    </th>
                    <td>
                        <input name="settings[hide_button]" id="settings_hide_button" type="checkbox" value="1" <?php echo ( isset( $settings['hide_button'] ) && '1' == $settings['hide_button'] ) ? 'checked' : '' ; ?> />
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="settings_show_sidebar"><?php _e( 'Show sidebar on search page', $this->text_domain ) ?>:</label>
                    </th>
                    <td>
                        <input name="settings[show_sidebar]" id="settings_show_sidebar" type="checkbox" value="1" <?php echo ( isset( $settings['show_sidebar'] ) && '1' == $settings['show_sidebar'] ) ? 'checked' : '' ; ?> />

                        <span class="description">
                            <?php _e( 'Only works when search results are displayed as generated page.', $this->text_domain ) ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php _e( "Specify your website's protocol", $this->text_domain ) ?>:
                    </th>
                    <td>
                        <input type="radio" name="settings[protocol]" id="protocol_http" value="http:" <?php echo ( !isset( $settings['protocol'] ) || 'http:' == $settings['protocol'] ) ? 'checked' : '' ; ?> />
                        <label for="protocol_http"><?php _e( 'HTTP', $this->text_domain ) ?>&nbsp;&nbsp;</label>

                        <input type="radio" name="settings[protocol]" id="protocol_https" value="https:" <?php echo ( isset( $settings['protocol'] ) && 'https:' == $settings['protocol'] ) ? 'checked' : '' ; ?> />
                        <label for="protocol_https"><?php _e( 'HTTPS', $this->text_domain ) ?>&nbsp;&nbsp;</label>

                        <input type="radio" name="settings[protocol]" id="protocol_relative" value="relative" <?php echo ( isset( $settings['protocol'] ) && 'relative' == $settings['protocol'] ) ? 'checked' : '' ; ?> />
                        <label for="protocol_relative"><?php _e( 'Protocol-relative URLs', $this->text_domain ) ?>&nbsp;&nbsp;</label>

                        <br />
                        <span class="description">
                            <?php _e( "Websites that use SSL (HTTPS) should use the HTTPS version of the code. Protocol relative URLs allow the browser to use the same protocol as your website's protocol.", $this->text_domain ) ?>
                        </span>
                    </td>
                </tr>
            </tbody>

        </table>

        <h3><?php _e( 'Widget', $this->text_domain ) ?></h3>
        <table class="form-table">
            <tbody >
                <tr>
                    <th>
                        <label for="settings_popup_theme"><?php _e( 'Theme for Popup', $this->text_domain ) ?>:</label>
                    </th>
                    <td>
                        <select name="settings[popup_theme]" id="settings_popup_theme" >
                            <?php
                            //display all themes of popup for select
                            $popup_themes = $this->get_popup_themes();
                            if ( is_array( $popup_themes) ) {
                                foreach( $popup_themes as $popup_theme ) {

                            ?>
                                <option value="<?php echo $popup_theme['name'] ?>" <?php echo ( isset( $settings['popup_theme'] ) && $popup_theme['name'] == $settings['popup_theme'] ) ? 'selected' : ''; ?> ><?php echo $popup_theme['name']; ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <br />
                        <span class="description">
                            <?php _e( 'Note: you can use any jQuery UI theme for your widget. Just upload the theme folder to /wp-google-custom-search/style/popup_themes/ and rename the .css file from "jquery-ui-x.x.x.custom.css" to "custom.css". You can then choose theme from this dropdown.', $this->text_domain ) ?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="submit">
            <?php wp_nonce_field( 'save_cgs' ); ?>
            <input type="submit" name="save_cgs" class="button-primary" value="<?php _e( 'Save Changes', $this->text_domain ) ?>" />
        </p>
    </form>
</div>
