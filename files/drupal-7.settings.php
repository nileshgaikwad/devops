<?php

$databases['default']['default'] = array(
  'driver' => '@DATABASE_DRIVER@',
  'database' => '@DATABASE_NAME@',
  'username' => '@DATABASE_USER@',
  'password' => '@DATABASE_PASSWORD@',
  'host' => '@DATABASE_HOST@',
  'prefix' => '@DATABASE_PREFIX@',
);

$update_free_access = FALSE;
$drupal_hash_salt = '@DRUPAL_SALT@';
$base_url = '@DRUPAL_BASE_URL@';

/**
 * PHP settings:
 */
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
# ini_set('pcre.backtrack_limit', 200000);
# ini_set('pcre.recursion_limit', 200000);
# $cookie_domain = '.example.com';

# $conf['site_name'] = 'My Drupal site';
# $conf['theme_default'] = 'garland';
# $conf['anonymous'] = 'Visitor';
# $conf['maintenance_theme'] = 'bartik';
$conf['reverse_proxy'] = TRUE;
$conf['reverse_proxy_addresses'] = array('127.0.0.1');
# $conf['reverse_proxy_header'] = 'HTTP_X_CLUSTER_CLIENT_IP';
# $conf['omit_vary_cookie'] = TRUE;
# $conf['css_gzip_compression'] = FALSE;
# $conf['js_gzip_compression'] = FALSE;
# $conf['locale_custom_strings_en'][''] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );
# $conf['blocked_ips'] = array(
#   'a.b.c.d',
# );

$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
# drupal_fast_404();

# $conf['proxy_server'] = '';
# $conf['proxy_port'] = 8080;
# $conf['proxy_username'] = '';
# $conf['proxy_password'] = '';
# $conf['proxy_user_agent'] = '';
# $conf['proxy_exceptions'] = array('127.0.0.1', 'localhost');

$conf['allow_authorize_operations'] = FALSE;

// Drupal internal variables.
#$conf['https'] = @DRUPAL_HTTPS@;
$conf['install_profile'] = '@DRUPAL_PROFILE@';

// Set an environmental flag.
$conf['environment'] = '@ENVIRONMENT@';

// Add Varnish as the page cache handler.
$conf['cache_backends'] = array('./sites/all/modules/contrib/varnish/varnish.cache.inc');
$conf['cache_class_cache_page'] = 'VarnishCache';
$conf['page_cache_invoke_hooks'] = FALSE;

// Include Varnish settings.
$conf['varnish_bantype'] = 0;
$conf['varnish_cache_clear'] = 0;
$conf['varnish_control_key'] = '@DRUPAL_VARNISH_CONTROL_KEY@';
$conf['varnish_control_terminal'] = '@DRUPAL_VARNISH_CONTROL_TERMINAL@';
$conf['varnish_flush_cron'] = 0;
$conf['varnish_socket_timeout'] = 100;
$conf['varnish_version'] = 3;

// Add Memcache settings.
$conf['cache_backends'][] = './sites/all/modules/contrib/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['memcache_key_prefix'] = '@DRUPAL_MEMCACHE_PREFIX@';

// Other contrib modules.
