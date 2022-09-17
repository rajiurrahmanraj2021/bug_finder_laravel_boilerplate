<?php return array (
  'app' => 
  array (
    'name' => 'Investment',
    'env' => 'local',
    'debug' => true,
    'url' => 'https://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:SQfQvPQcRgLO9FeDF5F6h0N31n030o/VgFj7/5Po9Tk=',
    'cipher' => 'AES-256-CBC',
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
      22 => 'Intervention\\Image\\ImageServiceProvider',
      23 => 'Ixudra\\Curl\\CurlServiceProvider',
      24 => 'Nexmo\\Laravel\\NexmoServiceProvider',
      25 => 'App\\Providers\\AppServiceProvider',
      26 => 'App\\Providers\\AuthServiceProvider',
      27 => 'App\\Providers\\EventServiceProvider',
      28 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
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
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Curl' => 'Ixudra\\Curl\\Facades\\Curl',
      'Nexmo' => 'Nexmo\\Laravel\\Facade\\Nexmo',
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
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
      'admin' => 
      array (
        'driver' => 'session',
        'provider' => 'admins',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'admins' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Admin',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
      'admins' => 
      array (
        'provider' => 'admins',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'basic' => 
  array (
    'site_title' => 'Bug Finder',
    'base_color' => 'ff5400',
    'time_zone' => 'UTC',
    'currency' => 'USD',
    'currency_symbol' => '$',
    'theme' => 'deepblue',
    'fraction_number' => 0,
    'paginate' => 20,
    'email_verification' => 0,
    'email_notification' => 0,
    'sms_verification' => 0,
    'sms_notification' => 0,
    'push_notification' => 0,
    'error_log' => 0,
    'strong_password' => 0,
    'registration' => 1,
    'address_verification' => 0,
    'identity_verification' => 0,
    'maintenance' => 0,
    'is_active_cron_notification' => 0,
    'bonus_amount' => '20',
    'joining_bonus' => 1,
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '47d0dc495a36278079bb',
        'secret' => 'b2745309a7b5206eacb8',
        'app_id' => '1108384',
        'options' => 
        array (
          'cluster' => 'ap2',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
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
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\framework/cache/data',
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
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'investment_cache',
  ),
  'contents' => 
  array (
    'feature' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'information' => 'text',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'information.*' => 'required|max:100',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
      'size' => 
      array (
        'image' => '50x50',
      ),
    ),
    'why-chose-us' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'information' => 'textarea',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'information.*' => 'required|max:300',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
      'size' => 
      array (
        'image' => '50x50',
      ),
    ),
    'how-it-work' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'short_description' => 'textarea',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'short_description.*' => 'required|max:2000',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
      'size' => 
      array (
        'image' => '46x48',
      ),
    ),
    'testimonial' => 
    array (
      'field_name' => 
      array (
        'name' => 'text',
        'designation' => 'text',
        'description' => 'textarea',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'name.*' => 'required|max:100',
        'designation.*' => 'required|max:2000',
        'description.*' => 'required|max:2000',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
      'size' => 
      array (
        'image' => '88x88',
      ),
    ),
    'blog' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'description' => 'textarea',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'description.*' => 'required|max:2000',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
      'size' => 
      array (
        'image' => '670x424',
        'thumb' => '290x236',
      ),
    ),
    'faq' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'description' => 'textarea',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:190',
        'description.*' => 'required|max:3000',
      ),
    ),
    'social' => 
    array (
      'field_name' => 
      array (
        'name' => 'text',
        'icon' => 'icon',
        'link' => 'url',
      ),
      'validation' => 
      array (
        'name.*' => 'required|max:100',
        'icon.*' => 'required|max:100',
        'link.*' => 'required|max:100',
      ),
    ),
    'support' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'description' => 'textarea',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'description.*' => 'required|max:3000',
      ),
    ),
    'message' => 
    array (
      'required' => 'This field is required.',
      'min' => 'This field must be at least :min characters.',
      'max' => 'This field may not be greater than :max characters.',
      'image' => 'This field must be image.',
      'mimes' => 'This image must be a file of type: jpg, jpeg, png.',
      'integer' => 'This field must be an integer value',
    ),
    'content_media' => 
    array (
      'image' => 'file',
      'thumbnail' => 'file',
      'youtube_link' => 'url',
      'button_link' => 'url',
      'link' => 'url',
      'icon' => 'icon',
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'country' => 
  array (
    0 => 
    array (
      'name' => 'Afghanistan',
      'code' => 'AF',
      'phone_code' => '+93',
    ),
    1 => 
    array (
      'name' => 'Albania',
      'code' => 'AL',
      'phone_code' => '+355',
    ),
    2 => 
    array (
      'name' => 'Algeria',
      'code' => 'DZ',
      'phone_code' => '+213',
    ),
    3 => 
    array (
      'name' => 'American Samoa',
      'code' => 'AS',
      'phone_code' => '+1',
    ),
    4 => 
    array (
      'name' => 'Andorra',
      'code' => 'AD',
      'phone_code' => '+376',
    ),
    5 => 
    array (
      'name' => 'Angola',
      'code' => 'AO',
      'phone_code' => '+244',
    ),
    6 => 
    array (
      'name' => 'Anguilla',
      'code' => 'AI',
      'phone_code' => '+1',
    ),
    7 => 
    array (
      'name' => 'Antigua',
      'code' => 'AG',
      'phone_code' => '+1',
    ),
    8 => 
    array (
      'name' => 'Argentina',
      'code' => 'AR',
      'phone_code' => '+54',
    ),
    9 => 
    array (
      'name' => 'Armenia',
      'code' => 'AM',
      'phone_code' => '+374',
    ),
    10 => 
    array (
      'name' => 'Aruba',
      'code' => 'AW',
      'phone_code' => '+297',
    ),
    11 => 
    array (
      'name' => 'Australia',
      'code' => 'AU',
      'phone_code' => '+61',
    ),
    12 => 
    array (
      'name' => 'Austria',
      'code' => 'AI',
      'phone_code' => '+43',
    ),
    13 => 
    array (
      'name' => 'Azerbaijan',
      'code' => 'AZ',
      'phone_code' => '+994',
    ),
    14 => 
    array (
      'name' => 'Bahrain',
      'code' => 'BH',
      'phone_code' => '+973',
    ),
    15 => 
    array (
      'name' => 'Bangladesh',
      'code' => 'BD',
      'phone_code' => '+880',
    ),
    16 => 
    array (
      'name' => 'Barbados',
      'code' => 'BB',
      'phone_code' => '+1',
    ),
    17 => 
    array (
      'name' => 'Belarus',
      'code' => 'BY',
      'phone_code' => '+375',
    ),
    18 => 
    array (
      'name' => 'Belgium',
      'code' => 'BE',
      'phone_code' => '+32',
    ),
    19 => 
    array (
      'name' => 'Belize',
      'code' => 'BZ',
      'phone_code' => '+501',
    ),
    20 => 
    array (
      'name' => 'Benin',
      'code' => 'BJ',
      'phone_code' => '+229',
    ),
    21 => 
    array (
      'name' => 'Bermuda',
      'code' => 'BM',
      'phone_code' => '+1',
    ),
    22 => 
    array (
      'name' => 'Bhutan',
      'code' => 'BT',
      'phone_code' => '+975',
    ),
    23 => 
    array (
      'name' => 'Bolivia',
      'code' => 'BO',
      'phone_code' => '+591',
    ),
    24 => 
    array (
      'name' => 'Bosnia & Herzegovina',
      'code' => 'BA',
      'phone_code' => '+387',
    ),
    25 => 
    array (
      'name' => 'Botswana',
      'code' => 'BW',
      'phone_code' => '+267',
    ),
    26 => 
    array (
      'name' => 'Brazil',
      'code' => 'BR',
      'phone_code' => '+55',
    ),
    27 => 
    array (
      'name' => 'British Indian Ocean',
      'code' => 'IO',
      'phone_code' => '+246',
    ),
    28 => 
    array (
      'name' => 'British Virgin Islands',
      'code' => 'VG',
      'phone_code' => '+1',
    ),
    29 => 
    array (
      'name' => 'Brunei',
      'code' => 'BN',
      'phone_code' => '+673',
    ),
    30 => 
    array (
      'name' => 'Bulgaria',
      'code' => 'BG',
      'phone_code' => '+359',
    ),
    31 => 
    array (
      'name' => 'Burkina Faso',
      'code' => 'BF',
      'phone_code' => '+226',
    ),
    32 => 
    array (
      'name' => 'Burma Myanmar',
      'code' => 'MM',
      'phone_code' => '+95',
    ),
    33 => 
    array (
      'name' => 'Burundi',
      'code' => 'BI',
      'phone_code' => '+257',
    ),
    34 => 
    array (
      'name' => 'Cambodia',
      'code' => 'KH',
      'phone_code' => '+855',
    ),
    35 => 
    array (
      'name' => 'Cameroon',
      'code' => 'CM',
      'phone_code' => '+237',
    ),
    36 => 
    array (
      'name' => 'Canada',
      'code' => 'CA',
      'phone_code' => '+1',
    ),
    37 => 
    array (
      'name' => 'Cape Verde',
      'code' => 'CV',
      'phone_code' => '+238',
    ),
    38 => 
    array (
      'name' => 'Cayman Islands',
      'code' => 'KY',
      'phone_code' => '+1',
    ),
    39 => 
    array (
      'name' => 'Central African Republic',
      'code' => 'CF',
      'phone_code' => '+236',
    ),
    40 => 
    array (
      'name' => 'Chad',
      'code' => 'ID',
      'phone_code' => '+235',
    ),
    41 => 
    array (
      'name' => 'Chile',
      'code' => 'CL',
      'phone_code' => '+56',
    ),
    42 => 
    array (
      'name' => 'China',
      'code' => 'CN',
      'phone_code' => '+86',
    ),
    43 => 
    array (
      'name' => 'Colombia',
      'code' => 'CO',
      'phone_code' => '+57',
    ),
    44 => 
    array (
      'name' => 'Comoros',
      'code' => 'KM',
      'phone_code' => '+269',
    ),
    45 => 
    array (
      'name' => 'Cook Islands',
      'code' => 'CK',
      'phone_code' => '+682',
    ),
    46 => 
    array (
      'name' => 'Costa Rica',
      'code' => 'CR',
      'phone_code' => '+506',
    ),
    47 => 
    array (
      'name' => 'Côte dIvoire',
      'code' => 'CI',
      'phone_code' => '+225',
    ),
    48 => 
    array (
      'name' => 'Croatia',
      'code' => 'HR',
      'phone_code' => '+385',
    ),
    49 => 
    array (
      'name' => 'Cuba',
      'code' => 'CU',
      'phone_code' => '+53',
    ),
    50 => 
    array (
      'name' => 'Cyprus',
      'code' => 'CY',
      'phone_code' => '+357',
    ),
    51 => 
    array (
      'name' => 'Czech Republic',
      'code' => 'CZ',
      'phone_code' => '+420',
    ),
    52 => 
    array (
      'name' => 'Republic of Congo',
      'code' => 'CD',
      'phone_code' => '+243',
    ),
    53 => 
    array (
      'name' => 'Denmark',
      'code' => 'DK',
      'phone_code' => '+45',
    ),
    54 => 
    array (
      'name' => 'Djibouti',
      'code' => 'DJ',
      'phone_code' => '+253',
    ),
    55 => 
    array (
      'name' => 'Dominica',
      'code' => 'DM',
      'phone_code' => '+1',
    ),
    56 => 
    array (
      'name' => 'Dominican Republic',
      'code' => 'DO',
      'phone_code' => '+1',
    ),
    57 => 
    array (
      'name' => 'Ecuador',
      'code' => 'EC',
      'phone_code' => '+593',
    ),
    58 => 
    array (
      'name' => 'Egypt',
      'code' => 'EG',
      'phone_code' => '+20',
    ),
    59 => 
    array (
      'name' => 'El Salvador',
      'code' => 'SV',
      'phone_code' => '+503',
    ),
    60 => 
    array (
      'name' => 'Equatorial Guinea',
      'code' => 'GQ',
      'phone_code' => '+240',
    ),
    61 => 
    array (
      'name' => 'Eritrea',
      'code' => 'ER',
      'phone_code' => '+291',
    ),
    62 => 
    array (
      'name' => 'Estonia',
      'code' => 'EE',
      'phone_code' => '+372',
    ),
    63 => 
    array (
      'name' => 'Ethiopia',
      'code' => 'ET',
      'phone_code' => '+251',
    ),
    64 => 
    array (
      'name' => 'Falkland Islands',
      'code' => 'FK',
      'phone_code' => '+500',
    ),
    65 => 
    array (
      'name' => 'Faroe Islands',
      'code' => 'FO',
      'phone_code' => '+298',
    ),
    66 => 
    array (
      'name' => 'Federated Micronesia',
      'code' => 'FM',
      'phone_code' => '+691',
    ),
    67 => 
    array (
      'name' => 'Fiji',
      'code' => 'FJ',
      'phone_code' => '+679',
    ),
    68 => 
    array (
      'name' => 'Finland',
      'code' => 'FI',
      'phone_code' => '+358',
    ),
    69 => 
    array (
      'name' => 'France',
      'code' => 'FR',
      'phone_code' => '+33',
    ),
    70 => 
    array (
      'name' => 'French Guiana',
      'code' => 'GF',
      'phone_code' => '+594',
    ),
    71 => 
    array (
      'name' => 'French Polynesia',
      'code' => 'PF',
      'phone_code' => '+689',
    ),
    72 => 
    array (
      'name' => 'Gabon',
      'code' => 'GA',
      'phone_code' => '+241',
    ),
    73 => 
    array (
      'name' => 'Georgia',
      'code' => 'GE',
      'phone_code' => '+995',
    ),
    74 => 
    array (
      'name' => 'Germany',
      'code' => 'DE',
      'phone_code' => '+49',
    ),
    75 => 
    array (
      'name' => 'Ghana',
      'code' => 'GH',
      'phone_code' => '+233',
    ),
    76 => 
    array (
      'name' => 'Gibraltar',
      'code' => 'GI',
      'phone_code' => '+350',
    ),
    77 => 
    array (
      'name' => 'Greece',
      'code' => 'GR',
      'phone_code' => '+30',
    ),
    78 => 
    array (
      'name' => 'Greenland',
      'code' => 'GL',
      'phone_code' => '+299',
    ),
    79 => 
    array (
      'name' => 'Grenada',
      'code' => 'GD',
      'phone_code' => '+1',
    ),
    80 => 
    array (
      'name' => 'Guadeloupe',
      'code' => 'GP',
      'phone_code' => '+590',
    ),
    81 => 
    array (
      'name' => 'Guam',
      'code' => 'GU',
      'phone_code' => '+1',
    ),
    82 => 
    array (
      'name' => 'Guatemala',
      'code' => 'GT',
      'phone_code' => '+502',
    ),
    83 => 
    array (
      'name' => 'Guinea',
      'code' => 'GN',
      'phone_code' => '+224',
    ),
    84 => 
    array (
      'name' => 'Guinea-Bissau',
      'code' => 'GW',
      'phone_code' => '+245',
    ),
    85 => 
    array (
      'name' => 'Guyana',
      'code' => 'GY',
      'phone_code' => '+592',
    ),
    86 => 
    array (
      'name' => 'Haiti',
      'code' => 'HT',
      'phone_code' => '+509',
    ),
    87 => 
    array (
      'name' => 'Honduras',
      'code' => 'HN',
      'phone_code' => '+504',
    ),
    88 => 
    array (
      'name' => 'Hong Kong',
      'code' => 'HK',
      'phone_code' => '+852',
    ),
    89 => 
    array (
      'name' => 'Hungary',
      'code' => 'HU',
      'phone_code' => '+36',
    ),
    90 => 
    array (
      'name' => 'Iceland',
      'code' => 'IS',
      'phone_code' => '+354',
    ),
    91 => 
    array (
      'name' => 'India',
      'code' => 'IN',
      'phone_code' => '+91',
    ),
    92 => 
    array (
      'name' => 'Indonesia',
      'code' => 'ID',
      'phone_code' => '+62',
    ),
    93 => 
    array (
      'name' => 'Iran',
      'code' => 'IR',
      'phone_code' => '+98',
    ),
    94 => 
    array (
      'name' => 'Iraq',
      'code' => 'IQ',
      'phone_code' => '+964',
    ),
    95 => 
    array (
      'name' => 'Ireland',
      'code' => 'IE',
      'phone_code' => '+353',
    ),
    96 => 
    array (
      'name' => 'Israel',
      'code' => 'IL',
      'phone_code' => '+972',
    ),
    97 => 
    array (
      'name' => 'Italy',
      'code' => 'IT',
      'phone_code' => '+39',
    ),
    98 => 
    array (
      'name' => 'Jamaica',
      'code' => 'JM',
      'phone_code' => '+1',
    ),
    99 => 
    array (
      'name' => 'Japan',
      'code' => 'JP',
      'phone_code' => '+81',
    ),
    100 => 
    array (
      'name' => 'Jordan',
      'code' => 'JO',
      'phone_code' => '+962',
    ),
    101 => 
    array (
      'name' => 'Kazakhstan',
      'code' => 'KZ',
      'phone_code' => '+7',
    ),
    102 => 
    array (
      'name' => 'Kenya',
      'code' => 'KE',
      'phone_code' => '+254',
    ),
    103 => 
    array (
      'name' => 'Kiribati',
      'code' => 'KI',
      'phone_code' => '+686',
    ),
    104 => 
    array (
      'name' => 'Kosovo',
      'code' => 'XK',
      'phone_code' => '+383',
    ),
    105 => 
    array (
      'name' => 'Kuwait',
      'code' => 'KW',
      'phone_code' => '+965',
    ),
    106 => 
    array (
      'name' => 'Kyrgyzstan',
      'code' => 'KG',
      'phone_code' => '+996',
    ),
    107 => 
    array (
      'name' => 'Laos',
      'code' => 'LA',
      'phone_code' => '+856',
    ),
    108 => 
    array (
      'name' => 'Latvia',
      'code' => 'LV',
      'phone_code' => '+371',
    ),
    109 => 
    array (
      'name' => 'Lebanon',
      'code' => 'LB',
      'phone_code' => '+961',
    ),
    110 => 
    array (
      'name' => 'Lesotho',
      'code' => 'LS',
      'phone_code' => '+266',
    ),
    111 => 
    array (
      'name' => 'Liberia',
      'code' => 'LR',
      'phone_code' => '+231',
    ),
    112 => 
    array (
      'name' => 'Libya',
      'code' => 'LY',
      'phone_code' => '+218',
    ),
    113 => 
    array (
      'name' => 'Liechtenstein',
      'code' => 'LI',
      'phone_code' => '+423',
    ),
    114 => 
    array (
      'name' => 'Lithuania',
      'code' => 'LT',
      'phone_code' => '+370',
    ),
    115 => 
    array (
      'name' => 'Luxembourg',
      'code' => 'LU',
      'phone_code' => '+352',
    ),
    116 => 
    array (
      'name' => 'Macau',
      'code' => 'MO',
      'phone_code' => '+853',
    ),
    117 => 
    array (
      'name' => 'Macedonia',
      'code' => 'MK',
      'phone_code' => '+389',
    ),
    118 => 
    array (
      'name' => 'Madagascar',
      'code' => 'MG',
      'phone_code' => '+261',
    ),
    119 => 
    array (
      'name' => 'Malawi',
      'code' => 'MW',
      'phone_code' => '+265',
    ),
    120 => 
    array (
      'name' => 'Malaysia',
      'code' => 'MY',
      'phone_code' => '+60',
    ),
    121 => 
    array (
      'name' => 'Maldives',
      'code' => 'MV',
      'phone_code' => '+960',
    ),
    122 => 
    array (
      'name' => 'Mali',
      'code' => 'ML',
      'phone_code' => '+223',
    ),
    123 => 
    array (
      'name' => 'Malta',
      'code' => 'MT',
      'phone_code' => '+356',
    ),
    124 => 
    array (
      'name' => 'Marshall Islands',
      'code' => 'MH',
      'phone_code' => '+692',
    ),
    125 => 
    array (
      'name' => 'Martinique',
      'code' => 'MQ',
      'phone_code' => '+596',
    ),
    126 => 
    array (
      'name' => 'Mauritania',
      'code' => 'MR',
      'phone_code' => '+222',
    ),
    127 => 
    array (
      'name' => 'Mauritius',
      'code' => 'MU',
      'phone_code' => '+230',
    ),
    128 => 
    array (
      'name' => 'Mayotte',
      'code' => 'YT',
      'phone_code' => '+262',
    ),
    129 => 
    array (
      'name' => 'Mexico',
      'code' => 'MX',
      'phone_code' => '+52',
    ),
    130 => 
    array (
      'name' => 'Moldova',
      'code' => 'MD',
      'phone_code' => '+373',
    ),
    131 => 
    array (
      'name' => 'Monaco',
      'code' => 'MC',
      'phone_code' => '+377',
    ),
    132 => 
    array (
      'name' => 'Mongolia',
      'code' => 'MN',
      'phone_code' => '+976',
    ),
    133 => 
    array (
      'name' => 'Montenegro',
      'code' => 'ME',
      'phone_code' => '+382',
    ),
    134 => 
    array (
      'name' => 'Montserrat',
      'code' => 'MS',
      'phone_code' => '+1',
    ),
    135 => 
    array (
      'name' => 'Morocco',
      'code' => 'MA',
      'phone_code' => '+212',
    ),
    136 => 
    array (
      'name' => 'Mozambique',
      'code' => 'MZ',
      'phone_code' => '+258',
    ),
    137 => 
    array (
      'name' => 'Namibia',
      'code' => 'NA',
      'phone_code' => '+264',
    ),
    138 => 
    array (
      'name' => 'Nauru',
      'code' => 'NR',
      'phone_code' => '+674',
    ),
    139 => 
    array (
      'name' => 'Nepal',
      'code' => 'NP',
      'phone_code' => '+977',
    ),
    140 => 
    array (
      'name' => 'Netherlands',
      'code' => 'NL',
      'phone_code' => '+31',
    ),
    141 => 
    array (
      'name' => 'Netherlands Antilles',
      'code' => 'AN',
      'phone_code' => '+599',
    ),
    142 => 
    array (
      'name' => 'New Caledonia',
      'code' => 'NC',
      'phone_code' => '+687',
    ),
    143 => 
    array (
      'name' => 'New Zealand',
      'code' => 'NZ',
      'phone_code' => '+64',
    ),
    144 => 
    array (
      'name' => 'Nicaragua',
      'code' => 'NI',
      'phone_code' => '+505',
    ),
    145 => 
    array (
      'name' => 'Niger',
      'code' => 'NE',
      'phone_code' => '+227',
    ),
    146 => 
    array (
      'name' => 'Nigeria',
      'code' => 'NG',
      'phone_code' => '+234',
    ),
    147 => 
    array (
      'name' => 'Niue',
      'code' => 'NU',
      'phone_code' => '+683',
    ),
    148 => 
    array (
      'name' => 'Norfolk Island',
      'code' => 'NF',
      'phone_code' => '+672',
    ),
    149 => 
    array (
      'name' => 'North Korea',
      'code' => 'KP',
      'phone_code' => '+850',
    ),
    150 => 
    array (
      'name' => 'Northern Mariana Islands',
      'code' => 'MP',
      'phone_code' => '+1',
    ),
    151 => 
    array (
      'name' => 'Norway',
      'code' => 'NO',
      'phone_code' => '+47',
    ),
    152 => 
    array (
      'name' => 'Oman',
      'code' => 'OM',
      'phone_code' => '+968',
    ),
    153 => 
    array (
      'name' => 'Pakistan',
      'code' => 'PK',
      'phone_code' => '+92',
    ),
    154 => 
    array (
      'name' => 'Palau',
      'code' => 'PW',
      'phone_code' => '+680',
    ),
    155 => 
    array (
      'name' => 'Palestine',
      'code' => 'PS',
      'phone_code' => '+970',
    ),
    156 => 
    array (
      'name' => 'Panama',
      'code' => 'PA',
      'phone_code' => '+507',
    ),
    157 => 
    array (
      'name' => 'Papua New Guinea',
      'code' => 'PG',
      'phone_code' => '+675',
    ),
    158 => 
    array (
      'name' => 'Paraguay',
      'code' => 'PY',
      'phone_code' => '+595',
    ),
    159 => 
    array (
      'name' => 'Peru',
      'code' => 'PE',
      'phone_code' => '+51',
    ),
    160 => 
    array (
      'name' => 'Philippines',
      'code' => 'PH',
      'phone_code' => '+63',
    ),
    161 => 
    array (
      'name' => 'Poland',
      'code' => 'PL',
      'phone_code' => '+48',
    ),
    162 => 
    array (
      'name' => 'Portugal',
      'code' => 'PT',
      'phone_code' => '+351',
    ),
    163 => 
    array (
      'name' => 'Puerto Rico',
      'code' => 'PR',
      'phone_code' => '+1',
    ),
    164 => 
    array (
      'name' => 'Qatar',
      'code' => 'QA',
      'phone_code' => '+974',
    ),
    165 => 
    array (
      'name' => 'Republic of the Congo',
      'code' => 'CG',
      'phone_code' => '+242',
    ),
    166 => 
    array (
      'name' => 'Réunion',
      'code' => 'RE',
      'phone_code' => '+262',
    ),
    167 => 
    array (
      'name' => 'Romania',
      'code' => 'RO',
      'phone_code' => '+40',
    ),
    168 => 
    array (
      'name' => 'Russia',
      'code' => 'RU',
      'phone_code' => '+7',
    ),
    169 => 
    array (
      'name' => 'Rwanda',
      'code' => 'RW',
      'phone_code' => '+250',
    ),
    170 => 
    array (
      'name' => 'Saint Barthélemy',
      'code' => 'BL',
      'phone_code' => '+590',
    ),
    171 => 
    array (
      'name' => 'Saint Helena',
      'code' => 'SH',
      'phone_code' => '+290',
    ),
    172 => 
    array (
      'name' => 'Saint Kitts and Nevis',
      'code' => 'KN',
      'phone_code' => '+1',
    ),
    173 => 
    array (
      'name' => 'Saint Martin',
      'code' => 'MF',
      'phone_code' => '+590',
    ),
    174 => 
    array (
      'name' => 'St Pierre & Miquelon',
      'code' => 'PM',
      'phone_code' => '+508',
    ),
    175 => 
    array (
      'name' => 'St Vincent & Grenadines',
      'code' => 'VC',
      'phone_code' => '+1',
    ),
    176 => 
    array (
      'name' => 'Samoa',
      'code' => 'WS',
      'phone_code' => '+685',
    ),
    177 => 
    array (
      'name' => 'San Marino',
      'code' => 'SM',
      'phone_code' => '+378',
    ),
    178 => 
    array (
      'name' => 'São Tomé and Príncipe',
      'code' => 'ST',
      'phone_code' => '+239',
    ),
    179 => 
    array (
      'name' => 'Saudi Arabia',
      'code' => 'SA',
      'phone_code' => '+966',
    ),
    180 => 
    array (
      'name' => 'Senegal',
      'code' => 'SN',
      'phone_code' => '+221',
    ),
    181 => 
    array (
      'name' => 'Serbia',
      'code' => 'RS',
      'phone_code' => '+381',
    ),
    182 => 
    array (
      'name' => 'Seychelles',
      'code' => 'SC',
      'phone_code' => '+248',
    ),
    183 => 
    array (
      'name' => 'Sierra Leone',
      'code' => 'SL',
      'phone_code' => '+232',
    ),
    184 => 
    array (
      'name' => 'Singapore',
      'code' => 'SG',
      'phone_code' => '+65',
    ),
    185 => 
    array (
      'name' => 'Slovakia',
      'code' => 'SK',
      'phone_code' => '+421',
    ),
    186 => 
    array (
      'name' => 'Slovenia',
      'code' => 'SI',
      'phone_code' => '+386',
    ),
    187 => 
    array (
      'name' => 'Solomon Islands',
      'code' => 'SB',
      'phone_code' => '+677',
    ),
    188 => 
    array (
      'name' => 'Somalia',
      'code' => 'SO',
      'phone_code' => '+252',
    ),
    189 => 
    array (
      'name' => 'South Africa',
      'code' => 'ZA',
      'phone_code' => '+27',
    ),
    190 => 
    array (
      'name' => 'South Korea',
      'code' => 'KR',
      'phone_code' => '+82',
    ),
    191 => 
    array (
      'name' => 'Spain',
      'code' => 'ES',
      'phone_code' => '+34',
    ),
    192 => 
    array (
      'name' => 'Sri Lanka',
      'code' => 'LK',
      'phone_code' => '+94',
    ),
    193 => 
    array (
      'name' => 'St. Lucia',
      'code' => 'LC',
      'phone_code' => '+1',
    ),
    194 => 
    array (
      'name' => 'Sudan',
      'code' => 'SD',
      'phone_code' => '+249',
    ),
    195 => 
    array (
      'name' => 'Suriname',
      'code' => 'SR',
      'phone_code' => '+597',
    ),
    196 => 
    array (
      'name' => 'Swaziland',
      'code' => 'SZ',
      'phone_code' => '+268',
    ),
    197 => 
    array (
      'name' => 'Sweden',
      'code' => 'SE',
      'phone_code' => '+46',
    ),
    198 => 
    array (
      'name' => 'Switzerland',
      'code' => 'CH',
      'phone_code' => '+41',
    ),
    199 => 
    array (
      'name' => 'Syria',
      'code' => 'SY',
      'phone_code' => '+963',
    ),
    200 => 
    array (
      'name' => 'Taiwan',
      'code' => 'TW',
      'phone_code' => '+886',
    ),
    201 => 
    array (
      'name' => 'Tajikistan',
      'code' => 'TJ',
      'phone_code' => '+992',
    ),
    202 => 
    array (
      'name' => 'Tanzania',
      'code' => 'TZ',
      'phone_code' => '+255',
    ),
    203 => 
    array (
      'name' => 'Thailand',
      'code' => 'TH',
      'phone_code' => '+66',
    ),
    204 => 
    array (
      'name' => 'The Bahamas',
      'code' => 'BS',
      'phone_code' => '+1',
    ),
    205 => 
    array (
      'name' => 'The Gambia',
      'code' => 'GM',
      'phone_code' => '+220',
    ),
    206 => 
    array (
      'name' => 'Timor-Leste',
      'code' => 'TL',
      'phone_code' => '+670',
    ),
    207 => 
    array (
      'name' => 'Togo',
      'code' => 'TG',
      'phone_code' => '+228',
    ),
    208 => 
    array (
      'name' => 'Tokelau',
      'code' => 'TK',
      'phone_code' => '+690',
    ),
    209 => 
    array (
      'name' => 'Tonga',
      'code' => 'TO',
      'phone_code' => '+676',
    ),
    210 => 
    array (
      'name' => 'Trinidad and Tobago',
      'code' => 'TT',
      'phone_code' => '+1',
    ),
    211 => 
    array (
      'name' => 'Tunisia',
      'code' => 'TN',
      'phone_code' => '+216',
    ),
    212 => 
    array (
      'name' => 'Turkey',
      'code' => 'TR',
      'phone_code' => '+90',
    ),
    213 => 
    array (
      'name' => 'Turkmenistan',
      'code' => 'TM',
      'phone_code' => '+993',
    ),
    214 => 
    array (
      'name' => 'Turks and Caicos Islands',
      'code' => 'TC',
      'phone_code' => '+1',
    ),
    215 => 
    array (
      'name' => 'Tuvalu',
      'code' => 'TV',
      'phone_code' => '+688',
    ),
    216 => 
    array (
      'name' => 'Uganda',
      'code' => 'UG',
      'phone_code' => '+256',
    ),
    217 => 
    array (
      'name' => 'Ukraine',
      'code' => 'UA',
      'phone_code' => '+380',
    ),
    218 => 
    array (
      'name' => 'United Arab Emirates',
      'code' => 'AE',
      'phone_code' => '+971',
    ),
    219 => 
    array (
      'name' => 'United Kingdom',
      'code' => 'GB',
      'phone_code' => '+44',
    ),
    220 => 
    array (
      'name' => 'United States',
      'code' => 'US',
      'phone_code' => '+1',
    ),
    221 => 
    array (
      'name' => 'Uruguay',
      'code' => 'UY',
      'phone_code' => '+598',
    ),
    222 => 
    array (
      'name' => 'US Virgin Islands',
      'code' => 'VI',
      'phone_code' => '+1',
    ),
    223 => 
    array (
      'name' => 'Uzbekistan',
      'code' => 'UZ',
      'phone_code' => '+998',
    ),
    224 => 
    array (
      'name' => 'Vanuatu',
      'code' => 'VU',
      'phone_code' => '+678',
    ),
    225 => 
    array (
      'name' => 'Vatican City',
      'code' => 'VA',
      'phone_code' => '+39',
    ),
    226 => 
    array (
      'name' => 'Venezuela',
      'code' => 'VE',
      'phone_code' => '+58',
    ),
    227 => 
    array (
      'name' => 'Vietnam',
      'code' => 'VN',
      'phone_code' => '+84',
    ),
    228 => 
    array (
      'name' => 'Wallis and Futuna',
      'code' => 'WF',
      'phone_code' => '+681',
    ),
    229 => 
    array (
      'name' => 'Yemen',
      'code' => 'YE',
      'phone_code' => '+967',
    ),
    230 => 
    array (
      'name' => 'Zambia',
      'code' => 'ZM',
      'phone_code' => '+260',
    ),
    231 => 
    array (
      'name' => 'Zimbabwe',
      'code' => 'ZW',
      'phone_code' => '+263',
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
        'url' => NULL,
        'database' => 'bugfinderadmin',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'bugfinderadmin',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'bugfinderadmin',
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
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'bugfinderadmin',
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
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'investment_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\app/public',
        'url' => 'https://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'D:\\Bug Finder\\Laravel Boilerplate\\project\\public\\storage' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\app/public',
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
  ),
  'langcheck' => 
  array (
    'override_locale' => NULL,
  ),
  'languages' => 
  array (
    'country' => 
    array (
      'AF' => 'Afghanistan',
      'AX' => 'Aland Islands',
      'AL' => 'Albania',
      'DZ' => 'Algeria',
      'AS' => 'American Samoa',
      'AD' => 'Andorra',
      'AO' => 'Angola',
      'AI' => 'Anguilla',
      'AQ' => 'Antarctica',
      'AG' => 'Antigua And Barbuda',
      'AR' => 'Argentina',
      'AM' => 'Armenia',
      'AW' => 'Aruba',
      'AU' => 'Australia',
      'AT' => 'Austria',
      'AZ' => 'Azerbaijan',
      'BS' => 'Bahamas',
      'BH' => 'Bahrain',
      'BD' => 'Bangladesh',
      'BB' => 'Barbados',
      'BY' => 'Belarus',
      'BE' => 'Belgium',
      'BZ' => 'Belize',
      'BJ' => 'Benin',
      'BM' => 'Bermuda',
      'BT' => 'Bhutan',
      'BO' => 'Bolivia',
      'BA' => 'Bosnia And Herzegovina',
      'BW' => 'Botswana',
      'BV' => 'Bouvet Island',
      'BR' => 'Brazil',
      'IO' => 'British Indian Ocean Territory',
      'BN' => 'Brunei Darussalam',
      'BG' => 'Bulgaria',
      'BF' => 'Burkina Faso',
      'BI' => 'Burundi',
      'KH' => 'Cambodia',
      'CM' => 'Cameroon',
      'CA' => 'Canada',
      'CV' => 'Cape Verde',
      'KY' => 'Cayman Islands',
      'CF' => 'Central African Republic',
      'TD' => 'Chad',
      'CL' => 'Chile',
      'CN' => 'China',
      'CX' => 'Christmas Island',
      'CC' => 'Cocos (Keeling) Islands',
      'CO' => 'Colombia',
      'KM' => 'Comoros',
      'CG' => 'Congo',
      'CD' => 'Congo, Democratic Republic',
      'CK' => 'Cook Islands',
      'CR' => 'Costa Rica',
      'CI' => 'Cote D\'Ivoire',
      'HR' => 'Croatia',
      'CU' => 'Cuba',
      'CY' => 'Cyprus',
      'CZ' => 'Czech Republic',
      'DK' => 'Denmark',
      'DJ' => 'Djibouti',
      'DM' => 'Dominica',
      'DO' => 'Dominican Republic',
      'EC' => 'Ecuador',
      'EG' => 'Egypt',
      'SV' => 'El Salvador',
      'GQ' => 'Equatorial Guinea',
      'ER' => 'Eritrea',
      'EE' => 'Estonia',
      'ET' => 'Ethiopia',
      'FK' => 'Falkland Islands (Malvinas)',
      'FO' => 'Faroe Islands',
      'FJ' => 'Fiji',
      'FI' => 'Finland',
      'FR' => 'France',
      'GF' => 'French Guiana',
      'PF' => 'French Polynesia',
      'TF' => 'French Southern Territories',
      'GA' => 'Gabon',
      'GM' => 'Gambia',
      'GE' => 'Georgia',
      'DE' => 'Germany',
      'GH' => 'Ghana',
      'GI' => 'Gibraltar',
      'GR' => 'Greece',
      'GL' => 'Greenland',
      'GD' => 'Grenada',
      'GP' => 'Guadeloupe',
      'GU' => 'Guam',
      'GT' => 'Guatemala',
      'GG' => 'Guernsey',
      'GN' => 'Guinea',
      'GW' => 'Guinea-Bissau',
      'GY' => 'Guyana',
      'HT' => 'Haiti',
      'HM' => 'Heard Island & Mcdonald Islands',
      'VA' => 'Holy See (Vatican City State)',
      'HN' => 'Honduras',
      'HK' => 'Hong Kong',
      'HU' => 'Hungary',
      'IS' => 'Iceland',
      'IN' => 'India',
      'ID' => 'Indonesia',
      'IR' => 'Iran, Islamic Republic Of',
      'IQ' => 'Iraq',
      'IE' => 'Ireland',
      'IM' => 'Isle Of Man',
      'IL' => 'Israel',
      'IT' => 'Italy',
      'JM' => 'Jamaica',
      'JP' => 'Japan',
      'JE' => 'Jersey',
      'JO' => 'Jordan',
      'KZ' => 'Kazakhstan',
      'KE' => 'Kenya',
      'KI' => 'Kiribati',
      'KR' => 'Korea',
      'KW' => 'Kuwait',
      'KG' => 'Kyrgyzstan',
      'LA' => 'Lao People\'s Democratic Republic',
      'LV' => 'Latvia',
      'LB' => 'Lebanon',
      'LS' => 'Lesotho',
      'LR' => 'Liberia',
      'LY' => 'Libyan Arab Jamahiriya',
      'LI' => 'Liechtenstein',
      'LT' => 'Lithuania',
      'LU' => 'Luxembourg',
      'MO' => 'Macao',
      'MK' => 'Macedonia',
      'MG' => 'Madagascar',
      'MW' => 'Malawi',
      'MY' => 'Malaysia',
      'MV' => 'Maldives',
      'ML' => 'Mali',
      'MT' => 'Malta',
      'MH' => 'Marshall Islands',
      'MQ' => 'Martinique',
      'MR' => 'Mauritania',
      'MU' => 'Mauritius',
      'YT' => 'Mayotte',
      'MX' => 'Mexico',
      'FM' => 'Micronesia, Federated States Of',
      'MD' => 'Moldova',
      'MC' => 'Monaco',
      'MN' => 'Mongolia',
      'ME' => 'Montenegro',
      'MS' => 'Montserrat',
      'MA' => 'Morocco',
      'MZ' => 'Mozambique',
      'MM' => 'Myanmar',
      'NA' => 'Namibia',
      'NR' => 'Nauru',
      'NP' => 'Nepal',
      'NL' => 'Netherlands',
      'AN' => 'Netherlands Antilles',
      'NC' => 'New Caledonia',
      'NZ' => 'New Zealand',
      'NI' => 'Nicaragua',
      'NE' => 'Niger',
      'NG' => 'Nigeria',
      'NU' => 'Niue',
      'NF' => 'Norfolk Island',
      'MP' => 'Northern Mariana Islands',
      'NO' => 'Norway',
      'OM' => 'Oman',
      'PK' => 'Pakistan',
      'PW' => 'Palau',
      'PS' => 'Palestinian Territory, Occupied',
      'PA' => 'Panama',
      'PG' => 'Papua New Guinea',
      'PY' => 'Paraguay',
      'PE' => 'Peru',
      'PH' => 'Philippines',
      'PN' => 'Pitcairn',
      'PL' => 'Poland',
      'PT' => 'Portugal',
      'PR' => 'Puerto Rico',
      'QA' => 'Qatar',
      'RE' => 'Reunion',
      'RO' => 'Romania',
      'RU' => 'Russian Federation',
      'RW' => 'Rwanda',
      'BL' => 'Saint Barthelemy',
      'SH' => 'Saint Helena',
      'KN' => 'Saint Kitts And Nevis',
      'LC' => 'Saint Lucia',
      'MF' => 'Saint Martin',
      'PM' => 'Saint Pierre And Miquelon',
      'VC' => 'Saint Vincent And Grenadines',
      'WS' => 'Samoa',
      'SM' => 'San Marino',
      'ST' => 'Sao Tome And Principe',
      'SA' => 'Saudi Arabia',
      'SN' => 'Senegal',
      'RS' => 'Serbia',
      'SC' => 'Seychelles',
      'SL' => 'Sierra Leone',
      'SG' => 'Singapore',
      'SK' => 'Slovakia',
      'SI' => 'Slovenia',
      'SB' => 'Solomon Islands',
      'SO' => 'Somalia',
      'ZA' => 'South Africa',
      'GS' => 'South Georgia And Sandwich Isl.',
      'ES' => 'Spain',
      'LK' => 'Sri Lanka',
      'SD' => 'Sudan',
      'SR' => 'Suriname',
      'SJ' => 'Svalbard And Jan Mayen',
      'SZ' => 'Swaziland',
      'SE' => 'Sweden',
      'CH' => 'Switzerland',
      'SY' => 'Syrian Arab Republic',
      'TW' => 'Taiwan',
      'TJ' => 'Tajikistan',
      'TZ' => 'Tanzania',
      'TH' => 'Thailand',
      'TL' => 'Timor-Leste',
      'TG' => 'Togo',
      'TK' => 'Tokelau',
      'TO' => 'Tonga',
      'TT' => 'Trinidad And Tobago',
      'TN' => 'Tunisia',
      'TR' => 'Turkey',
      'TM' => 'Turkmenistan',
      'TC' => 'Turks And Caicos Islands',
      'TV' => 'Tuvalu',
      'UG' => 'Uganda',
      'UA' => 'Ukraine',
      'AE' => 'United Arab Emirates',
      'GB' => 'United Kingdom',
      'US' => 'United States',
      'UM' => 'United States Outlying Islands',
      'UY' => 'Uruguay',
      'UZ' => 'Uzbekistan',
      'VU' => 'Vanuatu',
      'VE' => 'Venezuela',
      'VN' => 'Viet Nam',
      'VG' => 'Virgin Islands, British',
      'VI' => 'Virgin Islands, U.S.',
      'WF' => 'Wallis And Futuna',
      'EH' => 'Western Sahara',
      'YE' => 'Yemen',
      'ZM' => 'Zambia',
      'ZW' => 'Zimbabwe',
    ),
    'langCode' => 
    array (
      'AF' => 'Afghanistan',
      'AL' => 'Albania',
      'DZ' => 'Algeria',
      'AS' => 'American Samoa',
      'AD' => 'Andorra',
      'AO' => 'Angola',
      'AI' => 'Anguilla',
      'AG' => 'Antigua and Barbuda',
      'AR' => 'Argentina',
      'AM' => 'Armenia',
      'AW' => 'Aruba',
      'AU' => 'Australia',
      'AT' => 'Austria',
      'AZ' => 'Azerbaijan',
      'BS' => 'Bahamas',
      'BH' => 'Bahrain',
      'BD' => 'Bangladesh',
      'BB' => 'Barbados',
      'BY' => 'Belarus',
      'BE' => 'Belgium',
      'BZ' => 'Belize',
      'BJ' => 'Benin',
      'BM' => 'Bermuda',
      'BT' => 'Bhutan',
      'BO' => 'Bolivia, Plurinational State of',
      'BA' => 'Bosnia and Herzegovina',
      'BW' => 'Botswana',
      'BV' => 'Bouvet Island',
      'BR' => 'Brazil',
      'IO' => 'British Indian Ocean Territory',
      'BN' => 'Brunei Darussalam',
      'BG' => 'Bulgaria',
      'BF' => 'Burkina Faso',
      'BI' => 'Burundi',
      'KH' => 'Cambodia',
      'CM' => 'Cameroon',
      'CA' => 'Canada',
      'CV' => 'Cape Verde',
      'KY' => 'Cayman Islands',
      'CF' => 'Central African Republic',
      'TD' => 'Chad',
      'CL' => 'Chile',
      'CN' => 'China',
      'CO' => 'Colombia',
      'KM' => 'Comoros',
      'CG' => 'Congo',
      'CD' => 'Congo, the Democratic Republic of the',
      'CK' => 'Cook Islands',
      'CR' => 'Costa Rica',
      'CI' => 'C&ocirc;te d\'Ivoire',
      'HR' => 'Croatia',
      'CU' => 'Cuba',
      'CW' => 'Cura & ccedil;ao',
      'CY' => 'Cyprus',
      'CZ' => 'Czech Republic',
      'DK' => 'Denmark',
      'DJ' => 'Djibouti',
      'DM' => 'Dominica',
      'DO' => 'Dominican Republic',
      'EC' => 'Ecuador',
      'EG' => 'Egypt',
      'SV' => 'El Salvador',
      'GQ' => 'Equatorial Guinea',
      'ER' => 'Eritrea',
      'EE' => 'Estonia',
      'ET' => 'Ethiopia',
      'FK' => 'Falkland Islands(Malvinas)',
      'FO' => 'Faroe Islands',
      'FJ' => 'Fiji',
      'FI' => 'Finland',
      'FR' => 'France',
      'GF' => 'French Guiana',
      'PF' => 'French Polynesia',
      'TF' => 'French Southern Territories',
      'GA' => 'Gabon',
      'GM' => 'Gambia',
      'GE' => 'Georgia',
      'DE' => 'Germany',
      'GH' => 'Ghana',
      'GI' => 'Gibraltar',
      'GR' => 'Greece',
      'GL' => 'Greenland',
      'GD' => 'Grenada',
      'GP' => 'Guadeloupe',
      'GU' => 'Guam',
      'GT' => 'Guatemala',
      'GG' => 'Guernsey',
      'GN' => 'Guinea',
      'GW' => 'Guinea - Bissau',
      'GY' => 'Guyana',
      'HT' => 'Haiti',
      'HM' => 'Heard Island and McDonald Islands',
      'VA' => 'Holy See(Vatican City State)',
      'HN' => 'Honduras',
      'HK' => 'Hong Kong',
      'HU' => 'Hungary',
      'IS' => 'Iceland',
      'IN' => 'India',
      'ID' => 'Indonesia',
      'IR' => 'Iran, Islamic Republic of',
      'IQ' => 'Iraq',
      'IE' => 'Ireland',
      'IM' => 'Isle of Man',
      'IL' => 'Israel',
      'IT' => 'Italy',
      'JM' => 'Jamaica',
      'JP' => 'Japan',
      'JE' => 'Jersey',
      'JO' => 'Jordan',
      'KZ' => 'Kazakhstan',
      'KE' => 'Kenya',
      'KI' => 'Kiribati',
      'KP' => 'Korea, Democratic People\'s Republic of',
      'KR' => 'Korea, Republic of',
      'KW' => 'Kuwait',
      'KG' => 'Kyrgyzstan',
      'LA' => 'Lao People\'s Democratic Republic',
      'LV' => 'Latvia',
      'LB' => 'Lebanon',
      'LS' => 'Lesotho',
      'LR' => 'Liberia',
      'LY' => 'Libya',
      'LI' => 'Liechtenstein',
      'LT' => 'Lithuania',
      'LU' => 'Luxembourg',
      'MO' => 'Macao',
      'MK' => 'Macedonia, the former Yugoslav Republic of',
      'MG' => 'Madagascar',
      'MW' => 'Malawi',
      'MY' => 'Malaysia',
      'MV' => 'Maldives',
      'ML' => 'Mali',
      'MT' => 'Malta',
      'MH' => 'Marshall Islands',
      'MQ' => 'Martinique',
      'MR' => 'Mauritania',
      'MU' => 'Mauritius',
      'YT' => 'Mayotte',
      'MX' => 'Mexico',
      'FM' => 'Micronesia, Federated States of',
      'MD' => 'Moldova, Republic of',
      'MC' => 'Monaco',
      'MN' => 'Mongolia',
      'ME' => 'Montenegro',
      'MS' => 'Montserrat',
      'MA' => 'Morocco',
      'MZ' => 'Mozambique',
      'MM' => 'Myanmar',
      'NA' => 'Namibia',
      'NR' => 'Nauru',
      'NP' => 'Nepal',
      'NL' => 'Netherlands',
      'NC' => 'New Caledonia',
      'NZ' => 'New Zealand',
      'NI' => 'Nicaragua',
      'NE' => 'Niger',
      'NG' => 'Nigeria',
      'NU' => 'Niue',
      'NF' => 'Norfolk Island',
      'MP' => 'Northern Mariana Islands',
      'NO' => 'Norway',
      'OM' => 'Oman',
      'PK' => 'Pakistan',
      'PW' => 'Palau',
      'PS' => 'Palestinian Territory, Occupied',
      'PA' => 'Panama',
      'PG' => 'Papua New Guinea',
      'PY' => 'Paraguay',
      'PE' => 'Peru',
      'PH' => 'Philippines',
      'PN' => 'Pitcairn',
      'PL' => 'Poland',
      'PT' => 'Portugal',
      'PR' => 'Puerto Rico',
      'QA' => 'Qatar',
      'RE' => 'R & eacute;union',
      'RO' => 'Romania',
      'RU' => 'Russian Federation',
      'RW' => 'Rwanda',
      'SH' => 'Saint Helena, Ascension and Tristan da Cunha',
      'KN' => 'Saint Kitts and Nevis',
      'LC' => 'Saint Lucia',
      'MF' => 'Saint Martin(French part)',
      'PM' => 'Saint Pierre and Miquelon',
      'VC' => 'Saint Vincent and the Grenadines',
      'WS' => 'Samoa',
      'SM' => 'San Marino',
      'ST' => 'Sao Tome and Principe',
      'SA' => 'Saudi Arabia',
      'SN' => 'Senegal',
      'RS' => 'Serbia',
      'SC' => 'Seychelles',
      'SL' => 'Sierra Leone',
      'SG' => 'Singapore',
      'SX' => 'Sint Maarten(Dutch part)',
      'SK' => 'Slovakia',
      'SI' => 'Slovenia',
      'SB' => 'Solomon Islands',
      'SO' => 'Somalia',
      'ZA' => 'South Africa',
      'GS' => 'South Georgia and the South Sandwich Islands',
      'SS' => 'South Sudan',
      'ES' => 'Spain',
      'LK' => 'Sri Lanka',
      'SD' => 'Sudan',
      'SR' => 'Suriname',
      'SZ' => 'Swaziland',
      'SE' => 'Sweden',
      'CH' => 'Switzerland',
      'SY' => 'Syrian Arab Republic',
      'TW' => 'Taiwan, Province of China',
      'TJ' => 'Tajikistan',
      'TZ' => 'Tanzania, United Republic of',
      'TH' => 'Thailand',
      'TL' => 'Timor - Leste',
      'TG' => 'Togo',
      'TK' => 'Tokelau',
      'TO' => 'Tonga',
      'TT' => 'Trinidad and Tobago',
      'TN' => 'Tunisia',
      'TR' => 'Turkey',
      'TM' => 'Turkmenistan',
      'TC' => 'Turks and Caicos Islands',
      'TV' => 'Tuvalu',
      'UG' => 'Uganda',
      'UA' => 'Ukraine',
      'AE' => 'United Arab Emirates',
      'GB' => 'United Kingdom',
      'US' => 'United States',
      'UM' => 'United States Minor Outlying Islands',
      'UY' => 'Uruguay',
      'UZ' => 'Uzbekistan',
      'VU' => 'Vanuatu',
      'VE' => 'Venezuela, Bolivarian Republic of',
      'VN' => 'Viet Nam',
      'VG' => 'Virgin Islands, British',
      'VI' => 'Virgin Islands, U . S . ',
      'WF' => 'Wallis and Futuna',
      'EH' => 'Western Sahara',
      'YE' => 'Yemen',
      'ZM' => 'Zambia',
      'ZW' => 'Zimbabwe',
    ),
    'langCodeWithoutFlag' => 
    array (
      'aa' => 'Afar',
      'ab' => 'Abkhaz',
      'ae' => 'Avestan',
      'af' => 'Afrikaans',
      'ak' => 'Akan',
      'am' => 'Amharic',
      'an' => 'Aragonese',
      'ar' => 'Arabic',
      'as' => 'Assamese',
      'av' => 'Avaric',
      'ay' => 'Aymara',
      'az' => 'Azerbaijani',
      'ba' => 'Bashkir',
      'be' => 'Belarusian',
      'bg' => 'Bulgarian',
      'bh' => 'Bihari',
      'bi' => 'Bislama',
      'bm' => 'Bambara',
      'bn' => 'Bengali',
      'bo' => 'Tibetan Standard, Tibetan, Central',
      'br' => 'Breton',
      'bs' => 'Bosnian',
      'ca' => 'Catalan; Valencian',
      'ce' => 'Chechen',
      'ch' => 'Chamorro',
      'co' => 'Corsican',
      'cr' => 'Cree',
      'cs' => 'Czech',
      'cu' => 'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic',
      'cv' => 'Chuvash',
      'cy' => 'Welsh',
      'da' => 'Danish',
      'de' => 'German',
      'dv' => 'Divehi; Dhivehi; Maldivian;',
      'dz' => 'Dzongkha',
      'ee' => 'Ewe',
      'el' => 'Greek, Modern',
      'en' => 'English',
      'eo' => 'Esperanto',
      'es' => 'Spanish; Castilian',
      'et' => 'Estonian',
      'eu' => 'Basque',
      'fa' => 'Persian',
      'ff' => 'Fula; Fulah; Pulaar; Pular',
      'fi' => 'Finnish',
      'fj' => 'Fijian',
      'fo' => 'Faroese',
      'fr' => 'French',
      'fy' => 'Western Frisian',
      'ga' => 'Irish',
      'gd' => 'Scottish Gaelic; Gaelic',
      'gl' => 'Galician',
      'gn' => 'GuaranÃƒÂ­',
      'gu' => 'Gujarati',
      'gv' => 'Manx',
      'ha' => 'Hausa',
      'he' => 'Hebrew (modern)',
      'hi' => 'Hindi',
      'ho' => 'Hiri Motu',
      'hr' => 'Croatian',
      'ht' => 'Haitian; Haitian Creole',
      'hu' => 'Hungarian',
      'hy' => 'Armenian',
      'hz' => 'Herero',
      'ia' => 'Interlingua',
      'id' => 'Indonesian',
      'ie' => 'Interlingue',
      'ig' => 'Igbo',
      'ii' => 'Nuosu',
      'ik' => 'Inupiaq',
      'io' => 'Ido',
      'is' => 'Icelandic',
      'it' => 'Italian',
      'iu' => 'Inuktitut',
      'ja' => 'Japanese (ja)',
      'jv' => 'Javanese (jv)',
      'ka' => 'Georgian',
      'kg' => 'Kongo',
      'ki' => 'Kikuyu, Gikuyu',
      'kj' => 'Kwanyama, Kuanyama',
      'kk' => 'Kazakh',
      'kl' => 'Kalaallisut, Greenlandic',
      'km' => 'Khmer',
      'kn' => 'Kannada',
      'ko' => 'Korean',
      'kr' => 'Kanuri',
      'ks' => 'Kashmiri',
      'ku' => 'Kurdish',
      'kv' => 'Komi',
      'kw' => 'Cornish',
      'ky' => 'Kirghiz, Kyrgyz',
      'la' => 'Latin',
      'lb' => 'Luxembourgish, Letzeburgesch',
      'lg' => 'Luganda',
      'li' => 'Limburgish, Limburgan, Limburger',
      'ln' => 'Lingala',
      'lo' => 'Lao',
      'lt' => 'Lithuanian',
      'lu' => 'Luba-Katanga',
      'lv' => 'Latvian',
      'mg' => 'Malagasy',
      'mh' => 'Marshallese',
      'mi' => 'Maori',
      'mk' => 'Macedonian',
      'ml' => 'Malayalam',
      'mn' => 'Mongolian',
      'mr' => 'Marathi (Mara?hi)',
      'ms' => 'Malay',
      'mt' => 'Maltese',
      'my' => 'Burmese',
      'na' => 'Nauru',
      'nb' => 'Norwegian BokmÃƒÂ¥l',
      'nd' => 'North Ndebele',
      'ne' => 'Nepali',
      'ng' => 'Ndonga',
      'nl' => 'Dutch',
      'nn' => 'Norwegian Nynorsk',
      'no' => 'Norwegian',
      'nr' => 'South Ndebele',
      'nv' => 'Navajo, Navaho',
      'ny' => 'Chichewa; Chewa; Nyanja',
      'oc' => 'Occitan',
      'oj' => 'Ojibwe, Ojibwa',
      'om' => 'Oromo',
      'or' => 'Oriya',
      'os' => 'Ossetian, Ossetic',
      'pa' => 'Panjabi, Punjabi',
      'pi' => 'Pali',
      'pl' => 'Polish',
      'ps' => 'Pashto, Pushto',
      'pt' => 'Portuguese',
      'qu' => 'Quechua',
      'rm' => 'Romansh',
      'rn' => 'Kirundi',
      'ro' => 'Romanian, Moldavian, Moldovan',
      'ru' => 'Russian',
      'rw' => 'Kinyarwanda',
      'sa' => 'Sanskrit (Sa?sk?ta)',
      'sc' => 'Sardinian',
      'sd' => 'Sindhi',
      'se' => 'Northern Sami',
      'sg' => 'Sango',
      'si' => 'Sinhala, Sinhalese',
      'sk' => 'Slovak',
      'sl' => 'Slovene',
      'sm' => 'Samoan',
      'sn' => 'Shona',
      'so' => 'Somali',
      'sq' => 'Albanian',
      'sr' => 'Serbian',
      'ss' => 'Swati',
      'st' => 'Southern Sotho',
      'su' => 'Sundanese',
      'sv' => 'Swedish',
      'sw' => 'Swahili',
      'ta' => 'Tamil',
      'te' => 'Telugu',
      'tg' => 'Tajik',
      'th' => 'Thai',
      'ti' => 'Tigrinya',
      'tk' => 'Turkmen',
      'tl' => 'Tagalog',
      'tn' => 'Tswana',
      'to' => 'Tonga (Tonga Islands)',
      'tr' => 'Turkish',
      'ts' => 'Tsonga',
      'tt' => 'Tatar',
      'tw' => 'Twi',
      'ty' => 'Tahitian',
      'ug' => 'Uighur, Uyghur',
      'uk' => 'Ukrainian',
      'ur' => 'Urdu',
      'uz' => 'Uzbek',
      've' => 'Venda',
      'vi' => 'Vietnamese',
      'vo' => 'VolapÃƒÂ¼k',
      'wa' => 'Walloon',
      'wo' => 'Wolof',
      'xh' => 'Xhosa',
      'yi' => 'Yiddish',
      'yo' => 'Yoruba',
      'za' => 'Zhuang, Chuang',
      'zh' => 'Chinese',
      'zu' => 'Zulu',
    ),
  ),
  'location' => 
  array (
    'default' => 'assets/admin/images/default.png',
    'logoIcon' => 
    array (
      'path' => 'assets/uploads/logo/',
    ),
    'admin' => 
    array (
      'path' => 'assets/uploads/admin/',
      'size' => '400x400',
    ),
    'user' => 
    array (
      'path' => 'assets/uploads/users/',
      'size' => '400x400',
    ),
    'category' => 
    array (
      'path' => 'assets/uploads/categories/',
      'size' => '250x250',
    ),
    'ticket' => 
    array (
      'path' => 'assets/uploads/ticket/',
    ),
    'gateway' => 
    array (
      'path' => 'assets/uploads/gateway/',
      'size' => '300x250',
    ),
    'withdraw' => 
    array (
      'path' => 'assets/uploads/withdraw/',
      'size' => '300x250',
    ),
    'withdrawLog' => 
    array (
      'path' => 'assets/uploads/withdrawLog/',
    ),
    'logo' => 
    array (
      'path' => 'assets/uploads/logo/',
    ),
    'language' => 
    array (
      'path' => 'assets/uploads/language/',
      'size' => '60x60',
    ),
    'content' => 
    array (
      'path' => 'assets/uploads/content/',
      'size' => '60x60',
    ),
    'template' => 
    array (
      'path' => 'assets/uploads/content/',
      'size' => '60x60',
    ),
    'deposit' => 
    array (
      'path' => 'assets/uploads/deposit/',
    ),
    'kyc' => 
    array (
      'path' => 'assets/uploads/kyc/',
    ),
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
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
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
        'formatter' => NULL,
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
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => '',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.mailtrap.io',
        'port' => '2525',
        'encryption' => 'tls',
        'username' => 'sadsadsadas',
        'password' => 'sadsadsadas',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => '',
      'name' => '',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'purify' => 
  array (
    'settings' => 
    array (
      'Core.Encoding' => 'utf-8',
      'Cache.SerializerPath' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\app/purify',
      'HTML.Doctype' => 'XHTML 1.0 Strict',
      'HTML.Allowed' => 'h1,h2,h3,h4,h5,h6,b,strong,i,em,a[href|title],ul,ol,li,p[style],br,span,img[width|height|alt|src]',
      'HTML.ForbiddenElements' => '',
      'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
      'AutoFormat.AutoParagraph' => false,
      'AutoFormat.RemoveEmpty' => false,
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
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
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'requirements' => 
  array (
    'php' => 
    array (
      'version' => '7.4.0',
      'extension' => 
      array (
        0 => 'bcmath',
        1 => 'ctype',
        2 => 'fileinfo',
        3 => 'gd',
        4 => 'json',
        5 => 'mbstring',
        6 => 'openssl',
        7 => 'PDO',
        8 => 'tokenizer',
        9 => 'xml',
      ),
      'permissions' => 
      array (
        'bootstrap/cache' => '775',
        'storage/app' => '775',
        'storage/framework' => '775',
        'storage/logs' => '775',
        '.env' => '775',
      ),
    ),
    'pid' => '164002245098',
    'home_url' => '/',
    'portfolio_url' => 'https://codecanyon.net/user/bug-finder/portfolio',
  ),
  'role' => 
  array (
    'dashboard' => 
    array (
      'label' => 'Dashboard',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.dashboard',
        ),
        'add' => 
        array (
        ),
        'edit' => 
        array (
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'manage_staff' => 
    array (
      'label' => 'Manage Staff',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.staff',
        ),
        'add' => 
        array (
          0 => 'admin.storeStaff',
        ),
        'edit' => 
        array (
          0 => 'admin.updateStaff',
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'identify_form' => 
    array (
      'label' => 'Identity Form',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.identify-form',
        ),
        'add' => 
        array (
          0 => 'admin.identify-form.store',
        ),
        'edit' => 
        array (
          0 => 'admin.identify-form.store',
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'all_transaction' => 
    array (
      'label' => 'All Transaction',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.transaction',
          1 => 'admin.transaction.search',
        ),
        'add' => 
        array (
        ),
        'edit' => 
        array (
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'user_management' => 
    array (
      'label' => 'User Management',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.users',
          1 => 'admin.users.search',
          2 => 'admin.email-send',
          3 => 'admin.user.transaction',
          4 => 'admin.user.fundLog',
          5 => 'admin.user.withdrawal',
          6 => 'admin.user.userKycHistory',
          7 => 'admin.kyc.users.pending',
          8 => 'admin.kyc.users',
          9 => 'admin.user-edit',
        ),
        'add' => 
        array (
        ),
        'edit' => 
        array (
          0 => 'admin.user-multiple-active',
          1 => 'admin.user-multiple-inactive',
          2 => 'admin.send-email',
          3 => 'admin.user.userKycHistory',
          4 => 'admin.user-balance-update',
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'payment_gateway' => 
    array (
      'label' => 'Payment Gateway',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.payment.methods',
          1 => 'admin.deposit.manual.index',
        ),
        'add' => 
        array (
          0 => 'admin.deposit.manual.create',
        ),
        'edit' => 
        array (
          0 => 'admin.edit.payment.methods',
          1 => 'admin.deposit.manual.edit',
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'payment_log' => 
    array (
      'label' => 'Payment Request & Log',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.payment.pending',
          1 => 'admin.payment.log',
          2 => 'admin.payment.search',
        ),
        'add' => 
        array (
        ),
        'edit' => 
        array (
          0 => 'admin.payment.action',
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'payout_manage' => 
    array (
      'label' => 'Payout method & Log',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.payout-method',
          1 => 'admin.payout-log',
          2 => 'admin.payout-request',
          3 => 'admin.payout-log.search',
        ),
        'add' => 
        array (
          0 => 'admin.payout-method.create',
        ),
        'edit' => 
        array (
          0 => 'admin.payout-method.edit',
          1 => 'admin.payout-action',
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'support_ticket' => 
    array (
      'label' => 'Support Ticket',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.ticket',
          1 => 'admin.ticket.view',
        ),
        'add' => 
        array (
          0 => 'admin.ticket.reply',
        ),
        'edit' => 
        array (
        ),
        'delete' => 
        array (
          0 => 'admin.ticket.delete',
        ),
      ),
    ),
    'subscriber' => 
    array (
      'label' => 'Subscriber',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.subscriber.index',
          1 => 'admin.subscriber.sendEmail',
        ),
        'add' => 
        array (
        ),
        'edit' => 
        array (
        ),
        'delete' => 
        array (
          0 => 'admin.subscriber.remove',
        ),
      ),
    ),
    'website_controls' => 
    array (
      'label' => 'Website Controls',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.basic-controls',
          1 => 'admin.email-controls',
          2 => 'admin.email-template.show',
          3 => 'admin.sms.config',
          4 => 'admin.sms-template',
          5 => 'admin.notify-config',
          6 => 'admin.notify-template.show',
          7 => 'admin.notify-template.edit',
        ),
        'add' => 
        array (
        ),
        'edit' => 
        array (
          0 => 'admin.basic-controls.update',
          1 => 'admin.email-controls.update',
          2 => 'admin.email-template.edit',
          3 => 'admin.sms-template.edit',
          4 => 'admin.notify-config.update',
          5 => 'admin.notify-template.update',
        ),
        'delete' => 
        array (
        ),
      ),
    ),
    'language_settings' => 
    array (
      'label' => 'Language Settings',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.language.index',
        ),
        'add' => 
        array (
          0 => 'admin.language.create',
        ),
        'edit' => 
        array (
          0 => 'admin.language.edit',
          1 => 'admin.language.keywordEdit',
        ),
        'delete' => 
        array (
          0 => 'admin.language.delete',
        ),
      ),
    ),
    'theme_settings' => 
    array (
      'label' => 'Theme Settings',
      'access' => 
      array (
        'view' => 
        array (
          0 => 'admin.manage.theme',
          1 => 'admin.logo-seo',
          2 => 'admin.breadcrumb',
          3 => 'admin.template.show',
          4 => 'admin.content.index',
        ),
        'add' => 
        array (
          0 => 'admin.content.create',
        ),
        'edit' => 
        array (
          0 => 'admin.logoUpdate',
          1 => 'admin.seoUpdate',
          2 => 'admin.breadcrumbUpdate',
          3 => 'admin.content.show',
        ),
        'delete' => 
        array (
          0 => 'admin.content.delete',
        ),
      ),
    ),
  ),
  'seo' => 
  array (
    'meta_image' => 'meta.png',
    'meta_keywords' => 'investment, HYIP, HYIP investment, hyip website, invest, investment, Investment Management system, investment script, Bug Finder, bug-finder, bugfinder.net, bugfinder',
    'meta_description' => 'Hyip Pro,  A Modern Hyip Investmet Platform',
    'social_title' => 'Hyip Pro,  A Modern Hyip Investmet Platform',
    'social_description' => 'Hyip Pro,  A Modern Hyip Investmet Platform',
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'investment_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'templates' => 
  array (
    'hero' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
        'short_description' => 'textarea',
        'button_name' => 'text',
        'button_link' => 'url',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'short_description.*' => 'required|max:2000',
        'button_name.*' => 'required|max:2000',
        'button_link.*' => 'required|max:2000',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
    ),
    'about-us' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
        'short_title' => 'text',
        'short_description' => 'textarea',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'sub_title.*' => 'required|max:100',
        'short_description.*' => 'required|max:2000',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
    ),
    'why-chose-us' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
        'short_details' => 'textarea',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'sub_title.*' => 'required|max:200',
        'short_details.*' => 'required|max:2000',
      ),
    ),
    'how-it-work' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'youtube_link' => 'url',
        'image' => 'file',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
      ),
      'size' => 
      array (
        'image' => '960x500',
      ),
    ),
    'testimonial' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
        'short_title' => 'text',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'sub_title.*' => 'required|max:2000',
        'short_title.*' => 'required|max:2000',
      ),
    ),
    'news-letter' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'sub_title.*' => 'required|max:2000',
      ),
    ),
    'blog' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
        'short_title' => 'text',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'sub_title.*' => 'required|max:2000',
        'short_title.*' => 'required|max:2000',
      ),
    ),
    'faq' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
        'short_details' => 'textarea',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'sub_title.*' => 'required|max:100',
        'short_details.*' => 'required|max:2000',
      ),
    ),
    'we-accept' => 
    array (
      'field_name' => 
      array (
        'title' => 'text',
        'sub_title' => 'text',
        'short_details' => 'textarea',
      ),
      'validation' => 
      array (
        'title.*' => 'required|max:100',
        'sub_title.*' => 'required|max:100',
        'short_details.*' => 'required|max:2000',
      ),
    ),
    'contact-us' => 
    array (
      'field_name' => 
      array (
        'heading' => 'text',
        'sub_heading' => 'text',
        'title' => 'text',
        'address' => 'text',
        'email' => 'text',
        'phone' => 'text',
        'footer_short_details' => 'textarea',
      ),
      'validation' => 
      array (
        'heading.*' => 'required|max:100',
        'sub_heading.*' => 'required|max:100',
        'title.*' => 'required|max:100',
        'address.*' => 'required|max:2000',
        'email.*' => 'required|max:2000',
        'phone.*' => 'required|max:2000',
      ),
    ),
    'message' => 
    array (
      'required' => 'This field is required.',
      'min' => 'This field must be at least :min characters.',
      'max' => 'This field may not be greater than :max characters.',
      'image' => 'This field must be image.',
      'mimes' => 'This image must be a file of type: jpg, jpeg, png.',
    ),
    'template_media' => 
    array (
      'image' => 'file',
      'thumbnail' => 'file',
      'youtube_link' => 'url',
      'button_link' => 'url',
    ),
  ),
  'test' => 
  array (
    0 => 'Home',
    1 => 'About Us',
    2 => 'Services',
    3 => 'Blog',
    4 => 'FAQ',
    5 => 'Contact',
    6 => 'Plan',
    7 => 'Login',
    8 => 'Logout',
    9 => 'Sign up',
    10 => 'Copyright',
    11 => 'All Rights Reserved',
    12 => 'Username',
    13 => 'Email Or Username',
    14 => 'Password',
    15 => 'Remember Me',
    16 => 'Forgot password?',
    17 => 'Don\'t have any account? Sign Up',
    18 => 'SIGN UP FORM',
    19 => 'Sponsor By',
    20 => 'First Name',
    21 => 'Last Name',
    22 => 'Email Address',
    23 => 'Your Phone Number',
    24 => 'Confirm Password',
    25 => 'Already have an account? Login',
    26 => 'Please confirm your password before continuing.',
    27 => 'Forgot Your Password?',
    28 => 'Already have an account?',
    29 => 'Reset Password',
    30 => 'Enter your Email Address',
    31 => 'Don\'t have an account?',
    32 => 'Send Password Reset Link',
    33 => 'New Password',
    34 => '403 Forbidden',
    35 => 'You don’t have permission to access ‘/’ on this server.',
    36 => 'Back To Home',
    37 => 'Sorry page was not found!',
    38 => 'We\'re sorry, the page you requested could not be found. Please go back to the homepage or contact us at',
    39 => 'Method not allowed',
    40 => 'opps!',
    41 => 'Session has expired',
    42 => 'Dashboard',
    43 => 'Invest History',
    44 => 'Add Fund',
    45 => 'Fund History',
    46 => 'Transaction',
    47 => 'Payout',
    48 => 'Payout History',
    49 => 'My Referral',
    50 => 'Referral Bonus',
    51 => 'Profile Settings',
    52 => 'Support Ticket',
    53 => 'Main Balance',
    54 => 'Interest Balance',
    55 => 'Total Deposit',
    56 => 'Total Earn',
    57 => 'Account Statistics',
    58 => 'Total Invest',
    59 => 'Total Payout',
    60 => 'Total Ticket',
    61 => 'Total Referral Bonus',
    62 => 'Latest Registered Partner',
    63 => 'The last Referral Bonus',
    64 => 'Email',
    65 => 'Phone Number',
    66 => 'Joined At',
    67 => 'Code',
    68 => 'Pay Now',
    69 => 'Payment By',
    70 => 'Two Factor Authenticator',
    71 => 'Enable Two Factor Authenticator',
    72 => 'Disable Two Factor Authenticator',
    73 => 'Google Authenticator',
    74 => 'DOWNLOAD APP',
    75 => 'Verify Your OTP',
    76 => 'Close',
    77 => 'Verify',
    78 => 'Verify Your OTP to Disable',
    79 => 'Transactions',
    80 => 'Search for Transaction ID',
    81 => 'Remark',
    82 => 'Search',
    83 => 'SL No.',
    84 => 'Transaction ID',
    85 => 'Amount',
    86 => 'Remarks',
    87 => 'Time',
    88 => 'Type Here',
    89 => 'All Payment',
    90 => 'Complete Payment',
    91 => 'Pending Payment',
    92 => 'Cancel Payment',
    93 => 'Gateway',
    94 => 'Charge',
    95 => 'Search Service',
    96 => 'Subject',
    97 => 'Image Upload',
    98 => 'Upload',
    99 => 'Last Reply',
    100 => 'Reply',
    101 => 'Open',
    102 => 'Answered',
    103 => 'Customer Reply',
    104 => 'Closed',
    105 => 'Upload File',
    106 => 'Confirm',
    107 => 'Are you want to close ticket?',
    108 => 'My Profile',
    109 => 'Open Ticket',
    110 => 'Show Ticket',
    111 => 'No Data found',
    112 => 'Email Verification',
    113 => 'Update User',
    114 => 'Update Password',
    115 => 'Admin Feedback',
    116 => 'PAYOUT NOW',
    117 => 'Transaction Limit:',
    118 => 'Payout By',
    119 => 'Remove',
    120 => 'Confirm Now',
    121 => 'Return Interest',
    122 => 'Received Amount',
    123 => 'Upcoming Payment',
    124 => 'Search User',
    125 => 'Bonus From',
    126 => 'Current Password',
    127 => 'Address',
    128 => 'Submit',
    129 => 'Useful Links',
    130 => 'Deposit Balance',
    131 => '2FA Security',
    132 => 'Referral Link',
    133 => 'Level',
  ),
  'theme' => 
  array (
    'deepblue' => 
    array (
      'title' => 'Deep Blue',
      'path' => 'assets/uploads/theme/deepblue.png',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\resources\\views',
    ),
    'compiled' => 'D:\\Bug Finder\\Laravel Boilerplate\\project\\storage\\framework\\views',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
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
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'browser-detect' => 
  array (
    'cache' => 
    array (
      'interval' => 10080,
      'prefix' => 'bd4_',
    ),
    'security' => 
    array (
      'max-header-length' => 2048,
    ),
  ),
  'mollie' => 
  array (
    'key' => 'test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  ),
  'nexmo' => 
  array (
    'api_key' => '',
    'api_secret' => '',
    'signature_secret' => '',
    'private_key' => '',
    'application_id' => '',
    'app' => 
    array (
      'name' => 'NexmoLaravel',
      'version' => '1.1.2',
    ),
    'http_client' => '',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
