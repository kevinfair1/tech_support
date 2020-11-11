<?php include '../view/header.php'; ?>
<main>
    <h1>Open Incidents</h1>

  
    <section>       
        <table>
            <tr>
                <th>Customer</th>
                <th>Product</th>
                <th class="right">Date Opened</th>
                <th>Title</th>
                <th>Description</th>
                <th>Assign Tech</th>
            </tr>
            <?php foreach ($incidents as $incident) :  ?>
            
            <tr>
                <td><?php echo $incident['firstName'];?> <?php echo $incident['lastName']; ?></td>
                <td><?php echo $incident['productCode']; ?></td>
                <td class="right"><?php echo $incident['dateOpened'];?></td>
                <td><?php echo $incident['title'];?></td>
                <td><?php echo $incident['description'];?>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="select_tech">
                    <input type="hidden" name="incidentID"
                           value="<?php echo $incident['incidentID']; ?>">
                    <input type="submit" value="Select">
                    </form>                
                
            </tr>            
            <?php endforeach; ?>
        </table>              
              
    </section>
</main>
<?php include '../view/footer.php'; ?>

