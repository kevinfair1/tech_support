<?php
require('../model/database.php');
require('../model/product_db.php');


$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

if ($action == 'list_products') {
    $product_code = filter_input(INPUT_GET, 'product_code');
    if ($product_code == NULL || $product_code == FALSE) {
        $product_code = 1;
    }
    
    
    $products = get_products();
    
    include('product_list.php');
}
 else if ($action == 'delete_product') {
    $product_code = filter_input(INPUT_POST, 'product_code');   
    if ($product_code == NULL || $product_code == FALSE) {
        $error = "Missing or incorrect product code.";
        include('../errors/error.php');
    } else { 
        delete_product($product_code);
        header("Location: .?product_code=$product_code");
    }
} 

else if ($action == 'show_add_form') {
    $products = get_products();
    include('product_add.php');    
}

else if ($action == 'add_product') {
    $product_code = filter_input(INPUT_POST, 'product_code');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version');
    $release_date = filter_input(INPUT_POST, 'release_date');
    
    $dateForm = strtotime($release_date);
    $release_date_db = date('Y-m-d', $dateForm);
    
    if ($product_code == NULL || $name == NULL || 
            $version == NULL || empty($release_date_db)) {
        $error = "Empty field found. Please ensure all fields are filled out.";
        include('../errors/error.php');
    } else { 
        add_product($product_code, $name, $version, $release_date_db);
        header("Location: .?product_code=$product_code");
    }
}


?>