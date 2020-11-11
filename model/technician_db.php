<?php
function get_technicians() {
    global $db;
    $query = 'SELECT * FROM technicians
              ORDER BY techID';
try {
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement; 
} catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}

function get_technician_name($tech_id) {
    global $db;
    $query = 'SELECT firstName, lastName
              FROM technicians
              WHERE techID = :techID';
try {
        $statement = $db->prepare($query);
        $statement->bindValue(':techID', $tech_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
} catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}


function delete_technician($tech_id) {
    global $db;
    $query = 'DELETE FROM technicians
              WHERE techID = :tech_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':tech_id', $tech_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_technician($tech_id, $first_name, $last_name, $email_address, $phone_number, $tech_pw) {
    global $db;
    $query = 'INSERT INTO technicians
                 (techID, firstName, lastName, email, phone, password)
              VALUES
                 (:tech_id, :first_name, :last_name, :email_address, :phone_number, :tech_pw)';
    $statement = $db->prepare($query);
    $statement->bindValue(':tech_id', $tech_id);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email_address', $email_address);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->bindValue(':tech_pw', $tech_pw);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_technician_login($email, $password) {
    global $db;
    $query = '
        SELECT * FROM technicians
        WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    if ($statement->rowCount() == 1) {
        $valid = true;
    } else {
        $valid = false;
    }
    $statement->closeCursor();
    return $valid;
}

function get_technician_by_email($email) {
    global $db;
    $query = 'SELECT * FROM technicians
              WHERE email = :email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}

?>

