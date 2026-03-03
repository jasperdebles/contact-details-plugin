<?php
/**
 * Plugin Name: Contact Details Plugin
 * Description: Adds contact details to bottom right footer.
 * Version: 1.0
 * Author: Jasper de Bles
 */

if (!defined('ABSPATH')) exit;

function contact_details() {
    echo '
    <div style="position: fixed; bottom: 20px; right: 20px; background: #0073aa; color: white; padding: 15px 20px; font-size: 14px; z-index: 99999; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.3); font-family: -apple-system, BlinkMacSystemFont, sans-serif;">
        <strong>USHBA</strong><br>
        📧 <a href="mailto:info@ushba.nl" style="color: #e1f5fe; text-decoration: none;">info@ushba.nl</a><br>
        ☎️ <strong>+31 6 000000000</strong>
    </div>';
}

add_action('wp_footer', 'contact_details');

