<?php
function get_products() {
    global $db;
    $query = 'SELECT * FROM products
              ORDER BY productCode';
try {
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
} catch (PDOException $e) {
        display_db_error($e->getMessage());
    }    
}


function delete_product($product_code) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productCode = :product_code';
try {
    $statement = $db->prepare($query);
    $statement->bindValue(':product_code', $product_code);
    $statement->execute();
    $statement->closeCursor();
} catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}

function add_product($product_code, $name, $version, $release_date_db) {
    global $db;
    $query = 'INSERT INTO products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:product_code, :name, :version, :release_date)';
try {
    $statement = $db->prepare($query);
    $statement->bindValue(':product_code', $product_code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':release_date', $release_date_db);
    $statement->execute();
    $statement->closeCursor();
} catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}

?>

