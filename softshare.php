<?php
/**
 * Plugin Name: Softshare Floating Buttons 
 * Plugin URI: https://softwebzone.com
 * Description: This plugin adds all social media network's share button. This won't affect your current design and it never affects the speed of your website. It is pretty small and fast loading script. It will display as floating share buttons. A simple Jquery based plugin.
 * Version: 2.0.5
 * Author: Bijo John
 * Author URI: https://www.bijojc.com
 * License: GPL2
 */
 

if(!function_exists('softshare_js_script'))
{
	function softshare_js_script() {
    ?><script>var sharebutton_is_horizontal = false; document.write('<script src="https://softwebzone.com/plugin/share.js"></scr' + 'ipt>'); document.write("<div style='display: none'>");</script><a href="https://softwebzone.com/" class="button-twitter" title="Softwebzone - Web designing, website development company in India">add share buttons</a><script>document.write("</div>");</script><script>document.write("<div style='display: none'>");</script>Softshare button powered by <a href="https://softwebzone.com">web designing, website development company in India</a> <script>document.write("</div>");</script><?php
}

}

add_action('wp_head', 'softshare_js_script');
