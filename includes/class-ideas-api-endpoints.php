<?php

/**
 * The file that defines the endpoints for the CPT
 *
 * @link       http://enriquechavez.co
 * @since      1.0.0
 *
 * @package    Ideas_Api
 * @subpackage Ideas_Api/includes
 */

 /**
 * This class extends the WP_JSON_CustomPostType Class to create new endpoints.
 *
 * @since      1.0.0
 * @package    Ideas_Api
 * @subpackage Ideas_Api/includes
 * @author     Enrique Chavez <noone@tmeister.net>
 */

 class Ideas_Api_EndPoints extends WP_JSON_CustomPostType {
	protected $base = '/ideas';
	protected $type = 'ideas-api';

	public function register_routes( $routes ) {
		$routes = parent::register_routes( $routes );
		return $routes;
	}

}