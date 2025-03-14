<?php return array (
  'activitylog' => 
  array (
    'enabled' => true,
    'delete_records_older_than_days' => 365,
    'default_log_name' => 'default',
    'default_auth_driver' => NULL,
    'subject_returns_soft_deleted_models' => false,
    'activity_model' => 'Spatie\\Activitylog\\Models\\Activity',
    'table_name' => 'activity_log',
    'database_connection' => NULL,
  ),
  'analytics' => 
  array (
    'view_id' => '',
    'service_account_credentials_json' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\app/analytics-api.json',
    'cache_lifetime_in_minutes' => 1440,
    'cache' => 
    array (
      'store' => 'file',
    ),
  ),
  'app' => 
  array (
    'name' => 'zCart',
    'env' => 'development',
    'debug' => true,
    'url' => 'https://summerstreet.bitsclan-solutions.com',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:0v26ISsb361THQBhVzss5hnKuUss8mTaFf9aZtb7QCk=',
    'cipher' => 'AES-256-CBC',
    'demo' => false,
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Anouar\\Paypalpayment\\PaypalpaymentServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\BroadcastServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'App\\Providers\\ValidationServiceProvider',
      29 => 'App\\Providers\\ViewComposerServiceProvider',
      30 => 'App\\Providers\\HelperServiceProvider',
      31 => 'App\\Providers\\RepositoryServiceProvider',
      32 => 'App\\Providers\\GoogleDriveServiceProvider',
      33 => 'App\\Providers\\MysqlScoutServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Str' => 'Illuminate\\Support\\Str',
      'Paypalpayment' => 'Anouar\\Paypalpayment\\Facades\\PaypalPayment',
      'Chat' => 'Musonza\\Chat\\Chat',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'customer' => 
      array (
        'driver' => 'session',
        'provider' => 'customers',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'customers',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
      'customers' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Customer',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
      'customers' => 
      array (
        'provider' => 'customers',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'backup' => 
  array (
    'backup' => 
    array (
      'name' => 'zCartBackups',
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
            0 => 'H:\\xampp\\htdocs\\summerstreet',
          ),
          'exclude' => 
          array (
            0 => 'H:\\xampp\\htdocs\\summerstreet\\vendor',
            1 => 'H:\\xampp\\htdocs\\summerstreet\\node_modules',
          ),
          'followLinks' => false,
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'database_dump_compressor' => NULL,
      'destination' => 
      array (
        'filename_prefix' => 'backup_',
        'disks' => 
        array (
          0 => 'local',
        ),
      ),
      'temporary_directory' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\app/backup-temp',
    ),
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Spatie\\Backup\\Notifications\\Notifications\\BackupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\BackupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\HealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Spatie\\Backup\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => 'example@demo.com',
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => '',
        'username' => '',
        'icon' => '',
      ),
    ),
    'monitorBackups' => 
    array (
      0 => 
      array (
        'name' => 'zCart',
        'disks' => 
        array (
          0 => 'local',
        ),
        'newestBackupsShouldNotBeOlderThanDays' => 1,
        'storageUsedMayNotBeHigherThanMegabytes' => 5000,
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'defaultStrategy' => 
      array (
        'keepAllBackupsForDays' => '7',
        'keepDailyBackupsForDays' => 16,
        'keepWeeklyBackupsForWeeks' => 8,
        'keepMonthlyBackupsForMonths' => 4,
        'keepYearlyBackupsForYears' => 2,
        'deleteOldestBackupsWhenUsingMoreMegabytesThan' => 5000,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => '',
          'useTLS' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
    ),
    'prefix' => 'zcart_cache',
    'remember' => 
    array (
      'categories' => 0,
      'latest_items' => 0,
      'random_items' => 0,
      'daily_popular' => 0,
      'trending_category_items' => 0,
      'deals' => 0,
      'statistics' => 86400,
      'todays_stats' => 3600,
    ),
  ),
  'cashier' => 
  array (
    'key' => 'pk_test_51KO6BXBIhP6Riy2hW4DGkmctuJURP0UYF0nkt2vkWK66sh0V1JCMVxEYd5QYBJeEO7QvKHytI9WlLGJZhwmWgTKK00OpygnlAI',
    'secret' => 'sk_test_51KO6BXBIhP6Riy2hSyn3PSUKiyp95sI71xTpAGsCnrjBUzHSLPLOOC1KbgvTm9xNunfdC3O4pfxh54IWBlxbTsY500rRiusj7q',
    'path' => 'stripe',
    'webhook' => 
    array (
      'secret' => '',
      'tolerance' => 300,
    ),
    'model' => 'App\\Shop',
    'currency' => 'USD',
    'currency_locale' => 'en',
    'payment_notification' => NULL,
    'paper' => 'letter',
  ),
  'charts' => 
  array (
    'default_library' => 'Highcharts',
    'google_analytic' => 
    array (
      'period' => 12,
    ),
    'default' => 
    array (
      'months' => 12,
      'days' => 30,
    ),
    'visitors' => 
    array (
      'months' => 6,
      'colors' => 
      array (
        'page_views' => '',
        'sessions' => '',
        'unique_visits' => '',
      ),
      'breakdown_last_days' => 3,
    ),
    'latest_sales' => 
    array (
      'days' => 15,
      'color' => '#d3d3d3',
    ),
  ),
  'cors' => 
  array (
    'cors_profile' => 'Spatie\\Cors\\CorsProfile\\DefaultProfile',
    'default_profile' => 
    array (
      'allow_credentials' => false,
      'allow_origins' => 
      array (
        0 => '*',
      ),
      'allow_methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'OPTIONS',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
      ),
      'allow_headers' => 
      array (
        0 => 'Content-Type',
        1 => 'X-Auth-Token',
        2 => 'Origin',
        3 => 'Authorization',
      ),
      'expose_headers' => 
      array (
        0 => 'Cache-Control',
        1 => 'Content-Language',
        2 => 'Content-Type',
        3 => 'Expires',
        4 => 'Last-Modified',
        5 => 'Pragma',
      ),
      'forbidden_response' => 
      array (
        'message' => 'Forbidden (cors).',
        'status' => 403,
      ),
      'max_age' => 86400,
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'sstreet',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'sstreet',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB',
        'dump' => 
        array (
          'dump_binary_path' => '/usr/local/bin',
          0 => 'use_single_transaction',
          'timeout' => 300,
          'exclude_tables' => 
          array (
            0 => 'table1',
            1 => 'table2',
          ),
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'sstreet',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'sstreet',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'eloquentfilter' => 
  array (
    'namespace' => 'App\\ModelFilters\\',
  ),
  'filesystems' => 
  array (
    'default' => 'public',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\app/public',
        'url' => 'https://summerstreet.bitsclan-solutions.com/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => '',
        'bucket' => '',
        'url' => NULL,
        'cache' => 
        array (
          'store' => 'memcached',
          'expire' => 600,
          'prefix' => 'cache-prefix',
        ),
      ),
      'rackspace' => 
      array (
        'driver' => 'rackspace',
        'username' => '',
        'key' => '',
        'container' => '',
        'endpoint' => 'https://identity.api.rackspacecloud.com/v2.0/',
        'region' => 'IAD',
        'url_type' => 'publicURL',
      ),
      'google' => 
      array (
        'driver' => 'google',
        'clientId' => '',
        'clientSecret' => '',
        'refreshToken' => '',
        'folderId' => '',
      ),
      'sftp' => 
      array (
        'driver' => 'sftp',
        'host' => '',
        'username' => '',
        'password' => '',
        'port' => '22',
      ),
    ),
  ),
  'gdpr' => 
  array (
    'encrypt' => 
    array (
      'customer_data' => false,
      'salt' => 'dob',
    ),
    'cookie' => 
    array (
      'enabled' => true,
      'name' => 'zCart_cookie_consent',
      'lifetime' => 7300,
    ),
  ),
  'geoip' => 
  array (
    'log_failures' => true,
    'include_currency' => true,
    'service' => 'ipapi',
    'services' => 
    array (
      'maxmind_database' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\MaxMindDatabase',
        'database_path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\app/geoip.mmdb',
        'update_url' => 'https://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz',
        'locales' => 
        array (
          0 => 'en',
        ),
      ),
      'maxmind_api' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\MaxMindWebService',
        'user_id' => NULL,
        'license_key' => NULL,
        'locales' => 
        array (
          0 => 'en',
        ),
      ),
      'ipapi' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\IPApi',
        'secure' => true,
        'key' => NULL,
        'continent_path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\app/continents.json',
        'lang' => 'en',
      ),
      'ipgeolocation' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\IPGeoLocation',
        'secure' => true,
        'key' => NULL,
        'continent_path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\app/continents.json',
        'lang' => 'en',
      ),
    ),
    'cache' => 'all',
    'cache_tags' => NULL,
    'cache_expires' => 30,
    'default_location' => 
    array (
      'ip' => '127.0.0.0',
      'iso_code' => 'US',
      'country' => 'United States',
      'city' => 'New Haven',
      'state' => 'CT',
      'state_name' => 'Connecticut',
      'postal_code' => '06510',
      'lat' => 41.31,
      'lon' => -72.92,
      'timezone' => 'America/New_York',
      'continent' => 'NA',
      'default' => true,
      'currency' => 'USD',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
    'dir' => 'images',
    'cache_dir' => '.cache',
    'min_size' => 0,
    'max_size' => 1024,
    'chunk_size' => 1024,
    'mime_types' => 
    array (
      0 => 'jpeg',
      1 => 'jpg',
      2 => 'png',
      3 => 'gif',
    ),
    'sizes' => 
    array (
      'thumbnail' => 
      array (
        'w' => 60,
        'h' => 60,
        'fit' => 'contain',
      ),
      'tiny_thumb' => 
      array (
        'w' => 30,
        'h' => 30,
        'fit' => 'contain',
      ),
      'tiny' => 
      array (
        'w' => 30,
        'h' => 50,
        'fit' => 'contain',
      ),
      'mini' => 
      array (
        'w' => 60,
        'h' => 100,
        'fit' => 'contain',
      ),
      'small' => 
      array (
        'w' => 100,
        'h' => 200,
        'fit' => 'contain',
      ),
      'medium' => 
      array (
        'w' => 250,
        'h' => 400,
        'fit' => 'contain',
      ),
      'large' => 
      array (
        'w' => 800,
        'h' => 1200,
        'fit' => 'contain',
      ),
      'logo' => 
      array (
        'w' => 140,
        'h' => 60,
        'fit' => 'contain',
      ),
      'logo_lg' => 
      array (
        'w' => 110,
        'h' => 110,
        'fit' => 'contain',
      ),
      'cover' => 
      array (
        'w' => 1280,
        'h' => 300,
        'fit' => 'contain',
      ),
      'cover_thumb' => 
      array (
        'w' => 150,
        'h' => 59,
        'fit' => 'contain',
      ),
      'blog' => 
      array (
        'w' => 1280,
        'h' => 450,
        'fit' => 'crop',
      ),
    ),
    'background_color' => '',
  ),
  'installer' => 
  array (
    'core' => 
    array (
      'minPhpVersion' => '7.2.0',
      'maxPhpVersion' => '7.3.99',
    ),
    'final' => 
    array (
      'key' => true,
      'publish' => false,
    ),
    'requirements' => 
    array (
      'php' => 
      array (
        0 => 'openssl',
        1 => 'MySQLi',
        2 => 'sqlite3',
        3 => 'PDO_sqlite',
        4 => 'PDO',
        5 => 'mbstring',
        6 => 'tokenizer',
        7 => 'XML',
        8 => 'Ctype',
        9 => 'JSON',
        10 => 'cURL',
        11 => 'Fileinfo',
        12 => 'Zip',
        13 => 'exif',
        14 => 'GD',
      ),
      'apache' => 
      array (
        0 => 'mod_rewrite',
      ),
    ),
    'redirectUrl' => '/login',
    'permissions' => 
    array (
      'storage/' => '775',
      'storage/framework/' => '775',
      'storage/logs/' => '775',
      'bootstrap/cache/' => '775',
    ),
    'environment' => 
    array (
      'form' => 
      array (
        'rules' => 
        array (
          'app_name' => 'required|string|max:50',
          'environment' => 'required|string|max:50',
          'environment_custom' => 'required_if:environment,other|max:50',
          'app_debug' => 
          array (
            0 => 'required',
            1 => 'in:1,0',
          ),
          'app_log_level' => 'required|string|max:50',
          'app_url' => 'required|url',
          'database_connection' => 'required|string|max:50',
          'database_hostname' => 'required|string|max:50',
          'database_port' => 'required|numeric',
          'database_name' => 'required|string|max:50',
          'database_username' => 'required|string|max:50',
          'database_password' => 'required|string|max:50',
          'broadcast_driver' => 'required|string|max:50',
          'cache_driver' => 'required|string|max:50',
          'session_driver' => 'required|string|max:50',
          'queue_driver' => 'required|string|max:50',
          'redis_hostname' => 'required|string|max:50',
          'redis_password' => 'required|string|max:50',
          'redis_port' => 'required|numeric',
          'mail_driver' => 'required|string|max:50',
          'mail_host' => 'required|string|max:50',
          'mail_port' => 'required|string|max:50',
          'mail_username' => 'required|string|max:50',
          'mail_password' => 'required|string|max:50',
          'mail_encryption' => 'required|string|max:50',
          'pusher_app_id' => 'max:50',
          'pusher_app_key' => 'max:50',
          'pusher_app_secret' => 'max:50',
        ),
      ),
    ),
    'installed' => 
    array (
      'redirectOptions' => 
      array (
        'route' => 
        array (
          'name' => 'welcome',
          'data' => 
          array (
          ),
        ),
        'abort' => 
        array (
          'type' => '404',
        ),
        'dump' => 
        array (
          'data' => 'Dumping a not found message.',
        ),
      ),
    ),
    'installedAlreadyAction' => '',
    'updaterEnabled' => 'true',
  ),
  'invoice' => 
  array (
    'title' => '',
    'company_info_position' => 'left',
    'color' => '#007fff',
    'size' => 'A4',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\logs/zCart.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\logs/zCart.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'zCart Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'joblog' => 
      array (
        'driver' => 'daily',
        'path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\logs/jobs.log',
        'level' => 'debug',
      ),
      'mail' => 
      array (
        'driver' => 'daily',
        'path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\logs/mail.log',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'reply_to' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => 'tls',
    'username' => 'mali.bitsclan@gmail.com',
    'password' => 'mali.bitsclan@lahore',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'H:\\xampp\\htdocs\\summerstreet\\resources\\views/vendor/mail',
      ),
    ),
    'log_channel' => 'mail',
  ),
  'mobile_app' => 
  array (
    'view_listing_per_page' => 8,
    'popular' => 
    array (
      'period' => 
      array (
        'trending' => 2,
        'weekly' => 7,
      ),
      'take' => 
      array (
        'trending' => 8,
        'weekly' => 8,
      ),
      'hot_item' => 
      array (
        'period' => 24,
        'sell_count' => 3,
      ),
    ),
    'filter' => 
    array (
      'new_arrival' => 7,
    ),
    'push_notification' => 
    array (
      'notify' => true,
      'group_notify' => true,
      'group' => 'test users',
      'class' => 'App\\Customer',
      'app_id' => '',
      'api_key' => '',
    ),
  ),
  'musonza_chat' => 
  array (
    'broadcasts' => false,
    'sender_fields_whitelist' => 
    array (
    ),
    'should_load_routes' => true,
    'routes' => 
    array (
      'path_prefix' => 'chat',
      'middleware' => 
      array (
        0 => 'web',
      ),
    ),
    'pagination' => 
    array (
      'page' => 1,
      'perPage' => 25,
      'sorting' => 'asc',
      'columns' => 
      array (
        0 => '*',
      ),
      'pageName' => 'page',
    ),
    'transformers' => 
    array (
      'conversation' => NULL,
      'message' => NULL,
      'participant' => NULL,
    ),
  ),
  'newsletter' => 
  array (
    'driver' => 'api',
    'apiKey' => '',
    'defaultListName' => 'subscribers',
    'lists' => 
    array (
      'subscribers' => 
      array (
        'id' => '',
      ),
    ),
    'ssl' => false,
  ),
  'paypal_payment' => 
  array (
    'mode' => 'sandbox',
    'account' => 
    array (
      'client_id' => '',
      'client_secret' => '',
    ),
    'http' => 
    array (
      'connection_time_out' => 30,
      'retry' => 1,
    ),
    'log' => 
    array (
      'log_enabled' => true,
      'file_name' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\logs/PayPal.log',
      'log_level' => 'ERROR',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'report' => 
  array (
    'sales' => 
    array (
      'default' => 7,
      'take' => 10,
    ),
  ),
  'scout' => 
  array (
    'driver' => 'tntsearch',
    'prefix' => '',
    'queue' => false,
    'chunk' => 
    array (
      'searchable' => 500,
      'unsearchable' => 500,
    ),
    'soft_delete' => false,
    'algolia' => 
    array (
      'id' => '',
      'secret' => '',
    ),
    'mysql' => 
    array (
      'mode' => 'NATURAL_LANGUAGE',
      'model_directories' => 
      array (
        0 => 'H:\\xampp\\htdocs\\summerstreet\\app',
      ),
      'min_search_length' => 3,
      'min_fulltext_search_length' => 4,
      'min_fulltext_search_fallback' => 'LIKE',
      'query_expansion' => false,
    ),
    'tntsearch' => 
    array (
      'storage' => 'H:\\xampp\\htdocs\\summerstreet\\storage',
      'fuzziness' => true,
      'fuzzy' => 
      array (
        'prefix_length' => 2,
        'max_expansions' => 50,
        'distance' => 2,
      ),
      'asYouType' => false,
      'searchBoolean' => false,
    ),
  ),
  'seo' => 
  array (
    'enabled' => true,
    'meta' => 
    array (
      'robots' => 'index, follow',
      'revisit_after' => '7 days',
      'referrer' => 'no-referrer-when-downgrade',
      'description' => 'zCart is an awesome multi-vendor platform. You will love it for sure.',
      'description_character_limit' => '160',
      'image' => '',
      'video' => '',
      'geo_region' => 'Dhaka',
      'geo_position' => '23.8103, 90.4125',
      'twitter_site' => '',
      'twitter_card' => 'summary_large_image_url',
      'fb_app_id' => '',
      'keywords' => 'incevio,zcart,multi-vendor,multivendor application,laravel ecommerce',
    ),
    'sitemap' => 
    array (
      'allowed_urls' => 
      array (
        0 => 'categorygrp',
        1 => 'categories',
        2 => 'category',
        3 => 'locale',
        4 => 'product',
        5 => 'selling',
        6 => 'image',
        7 => 'page',
        8 => 'shop',
        9 => 'brand',
        10 => 'blog',
      ),
      'update' => 'daily',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'mandrill' => 
    array (
      'secret' => 'mali.bitsclan@lahore',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\Shop',
      'key' => 'pk_test_51KO6BXBIhP6Riy2hW4DGkmctuJURP0UYF0nkt2vkWK66sh0V1JCMVxEYd5QYBJeEO7QvKHytI9WlLGJZhwmWgTKK00OpygnlAI',
      'secret' => 'sk_test_51KO6BXBIhP6Riy2hSyn3PSUKiyp95sI71xTpAGsCnrjBUzHSLPLOOC1KbgvTm9xNunfdC3O4pfxh54IWBlxbTsY500rRiusj7q',
      'client_id' => 'ca_LUdljOogkXbDlnanwVDE8jfDJB9qjIRJ',
      'account_id' => '',
      'webhook' => 
      array (
        'secret' => '',
        'tolerance' => 300,
      ),
    ),
    'paypal' => 
    array (
      'client_id' => '',
      'secret' => '',
      'merchant_id' => '',
      'webhook_id' => '',
      'sandbox' => true,
    ),
    'instamojo' => 
    array (
      'api_key' => '',
      'auth_token' => '',
      'sandbox' => true,
    ),
    'paystack' => 
    array (
      'public_key' => '',
      'secret' => '',
      'sandbox' => true,
    ),
    'cybersource' => 
    array (
      'merchant_id' => '',
      'api_key_id' => '',
      'secret' => '',
      'sandbox' => true,
    ),
    'authorize-net' => 
    array (
      'api_login_id' => '',
      'transaction_key' => '',
      'sandbox' => true,
    ),
    'nexmo' => 
    array (
      'key' => '',
      'secret' => '',
      'sms_from' => '15556666666',
    ),
    'facebook' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'https://example.com/customer/login/facebook/callback',
    ),
    'google' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'https://example.com/customer/login/google/callback',
      'place_api_key' => '',
    ),
    'recaptcha' => 
    array (
      'key' => '',
      'secret' => '',
    ),
    'pusher' => 
    array (
      'id' => '',
      'key' => '',
      'secret' => '',
      'cluster' => '',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 300,
    'expire_on_close' => false,
    'encrypt' => true,
    'files' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'zcart_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'sitemap' => 
  array (
    'guzzle_options' => 
    array (
      'cookies' => true,
      'connect_timeout' => 10,
      'timeout' => 10,
      'allow_redirects' => false,
    ),
    'execute_javascript' => false,
    'chrome_binary_path' => NULL,
    'crawl_profile' => 'Spatie\\Sitemap\\Crawler\\Profile',
  ),
  'system' => 
  array (
    'subscription' => 
    array (
      'enabled' => true,
      'billing' => 'stripe',
    ),
    'order' => 
    array (
      'vendor_get_paid' => 'directly',
    ),
    'checkout' => 
    array (
      'route' => 'vendor',
    ),
    'customer' => 
    array (
      'has_wallet' => true,
    ),
    'csv_import_limit' => 50,
    'import_required' => 
    array (
      'product' => 
      array (
        0 => 'name',
        1 => 'categories',
        2 => 'gtin',
        3 => 'gtin_type',
      ),
      'inventory' => 
      array (
        0 => 'title',
        1 => 'description',
        2 => 'sku',
        3 => 'gtin',
        4 => 'gtin_type',
        5 => 'stock_quantity',
        6 => 'condition',
      ),
      'customer' => 
      array (
        0 => 'full_name',
        1 => 'email',
        2 => 'temporary_password',
        3 => 'accepts_marketing',
        4 => 'active',
      ),
    ),
    'inventory' => 
    array (
      'max_key_features' => 7,
    ),
    'non_decimal_currencies' => 
    array (
      0 => 'JPY',
    ),
    'view_listing_per_page' => 16,
    'view_blog_post_per_page' => 4,
    'popular' => 
    array (
      'period' => 
      array (
        'daily' => 1,
        'weekly' => 7,
        'monthly' => 30,
      ),
      'take' => 
      array (
        'trending' => 20,
        'daily' => 5,
        'weekly' => 5,
        'monthly' => 5,
      ),
      'hot_item' => 
      array (
        'period' => 24,
        'sell_count' => 3,
      ),
    ),
    'filter' => 
    array (
      'new_arrival' => 7,
    ),
    'freeze' => 
    array (
      'pages' => 
      array (
        0 => 1,
        1 => 2,
        2 => 3,
        3 => 4,
        4 => 5,
        5 => 6,
      ),
      'languages' => 
      array (
        0 => 1,
      ),
    ),
    'demo' => 
    array (
      'users' => 3,
      'roles' => 3,
      'shops' => 2,
      'langs' => 4,
      'customers' => 1,
      'category_groups' => 9,
      'plans' => 
      array (
        0 => 'business',
        1 => 'individual',
        2 => 'professional',
      ),
      'slider_negative_margin' => 
      array (
        0 => 3,
        1 => 4,
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'H:\\xampp\\htdocs\\summerstreet\\resources\\views',
    ),
    'compiled' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\framework\\views',
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'H:\\xampp\\htdocs\\summerstreet\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => true,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'laravel_google_translate' => 
  array (
    'google_translate_api_key' => NULL,
    'trans_functions' => 
    array (
      0 => 'trans',
      1 => 'trans_choice',
      2 => 'Lang::get',
      3 => 'Lang::choice',
      4 => 'Lang::trans',
      5 => 'Lang::transChoice',
      6 => '@lang',
      7 => '@choice',
      8 => '__',
      9 => '\\$trans.get',
      10 => '\\$t',
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
