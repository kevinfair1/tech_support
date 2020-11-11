<?php
require('../model/database_pdo.php');
require('../model/database.php');
require('../model/incident_db.php');
require('../model/customer_db.php');
require('../model/technician.php');
require('../model/technician_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {        
        if (isset($_SESSION['tech_user'])) {
            $action = 'returning_tech';
        } else {
            $action = 'display_incidents';
        }
    }
}

switch($action) {
    case 'display_incidents':
        $incidents = get_incidents_unassigned();        
        include('incident_open.php');
        break;
    
    case 'select_tech':
        $id = filter_input(INPUT_POST, 'incidentID');
        $techs = count_assigned_incidents_by_technicians();        
        include('select_tech.php');
        break;
    case 'assign_tech':
        $id = filter_input(INPUT_POST, 'incidentID');
        $tech_id = filter_input(INPUT_POST, 'techID');
        $incidentInfo = get_incident_info_by_incidentID($id);
        $tech_name = get_technician_name($tech_id);
        include('assign_tech.php');
        break;
    case 'tech_assign_confirm':
        $id = filter_input(INPUT_POST, 'incidentID');
        $tech_id = filter_input(INPUT_POST, 'techID');
        assign_incident($id, $tech_id);
        include('tech_assign_confirm.php');
        break;
}
?>