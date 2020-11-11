<?php include '../view/header.php'; ?>
<main>
    <h1>Technician List</h1>

<!-- Display a table of technicians -->  
    <section>        
        <table>
            <tr>
                <th>ID #</th>
                <th>Name</th>                
                <th>E-Mail</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($technicians as $technician) : ?>
            <tr>
                <td><?php echo $technician['techID']; ?></td>
                <!-- Call the function to get technician name -->
                <td><?php echo Technician::get_names($technician); ?></td>           
                <td><?php echo $technician['email']; ?></td>
                <td><?php echo $technician['phone']; ?></td>
                <td><?php echo $technician['password']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_technician">
                    <input type="hidden" name="tech_id"
                           value="<?php echo $technician['techID']; ?>">
                    <input type="submit" value="Delete">
                    </form>                
                
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Technician</a></p>        
              
    </section>
</main>
<?php include '../view/footer.php'; ?>

