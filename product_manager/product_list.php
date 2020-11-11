<?php include '../view/header.php'; ?>
<main>
    <h1>Product List</h1>

  
    <section>       
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Version</th>
                <th>Release Date</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product) :
                $dateForm = strtotime($product['releaseDate']);
                $releaseDateFormatted = date('m/d/Y', $dateForm);
                ?>
            
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td class="right"><?php echo $product['version']; ?></td>
                <td><?php echo $releaseDateFormatted; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="product_code"
                           value="<?php echo $product['productCode']; ?>">
                    <input type="submit" value="Delete">
                    </form>                
                
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Product</a></p>        
              
    </section>
</main>
<?php include '../view/footer.php'; ?>

