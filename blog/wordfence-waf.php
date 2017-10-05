<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/home/radhakrishna99/public_html/blog/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/home/radhakrishna99/public_html/blog/wp-content/wflogs/');
	include_once '/home/radhakrishna99/public_html/blog/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>