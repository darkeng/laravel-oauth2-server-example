<?php

return array(

	/**
	 * Bindings for the various repositories.
	 */

	'repositories' => array(

		/**
		 * Bind string which will be automaticallty resolved.
		 */

		'client_credentials' => '\Tappleby\OAuth2\Repositories\ClientCredentialsRepositoryEloquent',


		/**
		 * The redis repositories have dependencies that cannot be resolved automatically, can define a closure instead.
		 */

		'access_token' => '\Tappleby\OAuth2\Repositories\AccessTokenRepositoryEloquent',


		/**
		 * The redis repositories have dependencies that cannot be resolved automatically, can define a closure instead.
		 */

		'refresh_token' => '\Tappleby\OAuth2\Repositories\RefreshTokenRepositoryEloquent',

    'authorization_code' => '\Tappleby\OAuth2\Repositories\AuthorizationCodeRepositoryEloquent'
	),

	/**
	 * Raw configuration for oauth server.
	 */

	'server' => array(
		'access_lifetime'            => 3600,
		'www_realm'                  => 'Service',
		'token_param_name'           => 'access_token',
		'token_bearer_header_name'   => 'Bearer',
		'enforce_state'              => true,
		'require_exact_redirect_uri' => true,
		'allow_implicit'             => false,
	)

);