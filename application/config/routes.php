<?php
defined('BASEPATH') OR exit('No direct script access allowed');
## RESERVED ##
$route['default_controller'] = 'scada';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['press_shop'] = 'scada/press_shop';
$route['press_shop/line_5a'] = 'scada/line_5a';
$route['line/(:any)'] = 'scada/line/$1';

$route['alarm'] = 'alarm/alarm';
$route['alarm/(:any)'] = 'alarm/alarm/$1';
$route['get_alarm_by_code'] = 'alarm/get_alarm_by_code';
$route['get_alarm_by_machine_code'] = 'alarm/get_alarm_by_machine_code';
$route['upload_action_alarm'] = 'alarm/upload_action_alarm';

$route['symptom'] = 'symptom/symptom';
$route['symptom/(:any)'] = 'symptom/symptom/$1';
$route['get_data_today'] = 'symptom/get_data_today';
$route['get_data'] = 'symptom/get_data';
$route['get_machine_line'] = 'symptom/get_machine_line';
$route['upload_standard'] = 'symptom/upload_standard';

$route['hmi_update_postition'] = 'scada/hmi_update_postition';
