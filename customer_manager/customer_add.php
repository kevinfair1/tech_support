<?php include '../view/header.php'; ?>

<main>

    <!-- display a table of customer information -->
    <h2>Add Customer</h2>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_customer">        

        <label>First Name:</label>
        <input type="text" name="first_name">
       
        <br>

        <label>Last Name:</label>
        <input type="text" name="last_name">
       
        <br>

        <label>Address:</label>
        <input type="text" name="address">
        
        <br>

        <label>City:</label>
        <input type="text" name="city">
       
        <br>

        <label>State:</label>
        <input type="text" name="state">
       
        <br>

        <label>Postal Code:</label>
        <input type="text" name="postal_code">
        
        <br>

        <label>Phone:</label>
        <input type="text" name="phone">
      
        <br>

        <label>Email:</label>
        <input type="text" name="email">
      
        <br>

        <label>Password:</label>
        <input type="text" name="password">
        
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Customer">
        <br>
    </form>
    <p><a href="">Search Customers</a></p>

</main>
<?php include '../view/footer.php'; ?>