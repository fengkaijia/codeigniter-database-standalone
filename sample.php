<?php
define('BASEPATH', realpath(dirname(__FILE__)).'/');
define('APPPATH', realpath(dirname(__FILE__)).'');
include_once('core/Common.php');
include_once('database/DB.php');
function get_config(){}

function &load_database($params = '', $active_record_override = false)
{
	$database =& DB($params, $active_record_override);
	return $database;
}

/* Load database via Database source name, eg. "mysql://root:password@localhost/mydatabase" */
$db =& load_database("driver://username:password@hostname/dbname", true);

//---------------------------------------------------------

/* Sample below */
$db->where('key', 'value');
$query = $db->get('table');
foreach($query->result_array() as $data)
{
	print_r($data);
}
$query->free_result();