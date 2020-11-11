<?php include '../view/header.php'; ?>
<main>
    <h1>All Unassigned Incidents</h1>   
       
        <p><a href="?action=assigned_incidents">View Assigned Incidents</a></p>   
  
    <section>       
        <table>
            <tr>
                <th>Customer</th>
                <th>Product</th>                
                <th>Incident</th>
            </tr>
            <?php foreach ($incidents as $incident) :  ?>
            
            <tr>
                <td><?php echo $incident['firstName'];?> <?php echo $incident['lastName']; ?></td>
                <td><?php echo $incident['productName']; ?></td>                
                <td><p>ID: <?php echo $incident['incidentID'];?></p>
                    <p>Opened: <?php echo $incident['dateOpened'];?></p>
                    <p>Title: <?php echo $incident['title'];?></p>
                    <p>Description: <?php echo $incident['description'];?></p>              
                </td>
                           
                
            </tr>            
            <?php endforeach; ?>
        </table>              
              
    </section>
</main>
<?php include '../view/footer.php'; ?>

