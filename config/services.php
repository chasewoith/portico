<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],
	'google' => [

    /*
    |--------------------------------------------------------------------------
    | Client ID
    |--------------------------------------------------------------------------
    |
    | The Client ID can be found in the OAuth Credentials under Service Account
    |
    */
    	'client_id' => 'something.apps.googleusercontent.com',

    /*
    |--------------------------------------------------------------------------
    | Service account name
    |--------------------------------------------------------------------------
    |
    | The Service account name is the Email Address that can be found in the
    | OAuth Credentials under Service Account
    |
    */
    	'service_account_name' => 'something@developer.gserviceaccount.com',

    /*
    |--------------------------------------------------------------------------
    | Key file location
    |--------------------------------------------------------------------------
    |
    | This is the location of the .p12 file from the Laravel root directory
    |
    */
    	'key_file_location' => '/resources/assets/filename.p12',
	],

];
