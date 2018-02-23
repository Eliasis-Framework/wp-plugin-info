<?php
/**
 * WP Plugin Info · Get and save plugin information from WordPress API.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   Josantonius\WP_Plugin_Info
 * @copyright 2017 - 2018 (c) Josantonius - WP_Plugin_Info
 * @license   https://opensource.org/licenses/GPL-2.0 - GPL-2.0+
 * @link      https://github.com/Josantonius/wp-plugin-info.git
 * @since     1.0.0
 */

use Eliasis\Complement\Type\Plugin;
use Eliasis\Framework\App;

$root_path = Plugin::WP_Plugin_Info()->getOption( 'path', 'root' );

return [
	'path' => [
		'components' => $root_path . 'src/template/components/',
		'data'       => $root_path . 'src/data/',
	],
];
