<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'admin_moodle';
$CFG->dbuser    = 'admin_rinofitoch';
$CFG->dbpass    = 'Dominiquerr2004****';
$CFG->prefix    = 'ccm_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://www.escuelanacionalfitness.com/plataforma';
$CFG->dataroot  = '/home/admin/web/escuelanacionalfitness.com/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
