<?php include '../view/header.php'; ?>
<main>
    <h1>Select Technician</h1>

  
    <section>       
        <table>
            <tr>
                <th>Name</th>
                <th>Open Incidents</th>                
                <th>Assign Tech</th>
            </tr>
            <?php foreach ($techs as $tech) :  ?>
            
            
            <tr>
                <td><?php echo $tech['firstName'];?> <?php echo $tech['lastName']; ?></td>
                <td><?php echo $tech['openIncidents']; ?></td>                
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="assign_tech">
                    <input type="hidden" name="techID"
                           value="<?php echo $tech['techID']; ?>">
                    <input type="hidden" name="incidentID"
                           value="<?php echo $id; ?>">
                    <input type="submit" value="Select">
                    </form>                
                
            </tr>
            
            <?php endforeach; ?>
           
        </table>              
              
    </section>
</main>
<?php include '../view/footer.php'; ?>

