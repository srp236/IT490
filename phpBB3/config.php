$dbms = 'phpbb\\db\\driver\\mysql';
$dbhost = 172.29.245.74;
$dbport = 'database port if not default';
$dbname = IT490;
$dbuser = 'shy';
$dbpasswd = 'pass';
$table_prefix = 'phbb_';
$phpbb_adm_relative_path = 'adm/';
$acm_type = 'phpbb\\cache\\driver\\file';

@define('PHPBB_INSTALLED', true);
// @define('PHPBB_DISPLAY_LOAD_TIME', true);
@define('PHPBB_ENVIRONMENT', 'production');
// @define('DEBUG_CONTAINER', true);