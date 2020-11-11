<?php include '../view/header.php'; ?>

<main>
    <h1>Add Technician</h1>
    
    <form action="index.php" method="post" id="add_technician_form">
        <input type="hidden" name="action" value="add_technician">

        <label>Technician ID:</label>
        <input type="text" name="tech_id" />
        <br><br>

        <label>First Name:</label>
        <input type="text" name="first_name" />
        <br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" />
        <br><br>

        <label>E-mail Address:</label>
        <input type="text" name="email_address" /> "name@domain.com"
        <br><br>
        
          <label>Phone Number:</label>
        <input type="text" name="phone_number" />
        <br><br>
        
          <label>Tech Password:</label>
        <input type="text" name="tech_pw" />
        <br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br><br>
    </form>
    
    
    <p class="last_paragraph">
        <a href="../technician_manager">View Technician List</a>
    </p>

</main>
