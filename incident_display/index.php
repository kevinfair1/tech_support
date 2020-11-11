<?php
require('../model/database.php');
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/incident_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'display_incidents';
    }
}

switch ($action){
    case 'display_incidents':
        $incidents = get_incidents_unassigned();    
        include('display_incident.php');
        break;
    case 'assigned_incidents':
        $incidents = get_all_incidents_assigned();
        include('assigned_incidents.php');
}