<?php include '../view/header.php'; ?>
<main>
    <h1>Assigned Incidents</h1>
         <p><a href="?action=display_incidents">View Unassigned Incidents</a></p> 
  
    <section>       
        <table>
            <tr>
                <th>Customer</th>
                <th>Product</th>
                <th>Technician</th>
                <th>Incident</th>
            </tr>
            <?php foreach ($incidents as $incident) :  ?>
            
            <tr>
                <td><?php echo $incident['firstName'];?> <?php echo $incident['lastName']; ?></td>
                <td><?php echo $incident['productName']; ?></td>
                <td><?php echo $incident['techFirstName'].' '.$incident['techLastName']; ?></td>
                <td><p>ID: <?php echo $incident['incidentID'];?></p>
                    <p>Opened: <?php echo $incident['dateOpened'];?></p>
                    <p>Closed: <?php 
                        if($incident['dateClosed'] == NULL) {
                            echo 'OPEN';
                        } else {
                            echo $incident['dateClosed'];
                            } ?></p>
                    <p>Title: <?php echo $incident['title'];?></p>
                    <p>Description: <?php echo $incident['description'];?></p>              
                </td>
                           
                
            </tr>            
            <?php endforeach; ?>
        </table>              
              
    </section>
</main>
<?php include '../view/footer.php'; ?>

