<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id'] 		= '142847336079938'; 		// Your app id
$config['app_secret'] 	= 'fb295d9ab3f706e2d7193c4dd9b3c257'; 		// Your app secret key
$config['scope'] 		= 'email'; 	// custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['redirect_uri'] = site_url(''); 		// url to redirect back from facebook. If set to '', site_url('') will be used