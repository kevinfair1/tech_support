<?php include '../view/header.php'; ?>

<main>
    <h1>Add Product</h1>
    
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">

        <label>Product Code:</label>
        <input type="text" name="product_code" />
        <br><br>

        <label>Name:</label>
        <input type="text" name="name" />
        <br><br>

        <label>Version:</label>
        <input type="text" name="version" />
        <br><br>

        <label>Release Date:</label>
        <input type="text" name="release_date" />Use any valid date format.
        <br>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
        <br>
    </form>
    
    
    <p class="last_paragraph">
        <a href="../product_manager">View Product List</a>
    </p>

</main>
