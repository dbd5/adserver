<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'torann/geoip' => 
  array (
    'providers' => 
    array (
      0 => 'Torann\\GeoIP\\GeoIPServiceProvider',
    ),
    'aliases' => 
    array (
      'GeoIP' => 'Torann\\GeoIP\\Facades\\GeoIP',
    ),
  ),
);