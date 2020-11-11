<?php include '../view/header.php'; ?>
<main>
    <h3>Update Incident</h3>
    
    
    <div id="main">
        <form action="." method="post" id="incident_form">
            <input type="hidden" name="action" value="update_incident">
            <input type="hidden" name="id" value="<?php echo $incident['incidentID']; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            
            <label>Incident ID:</label> <?php echo $incident['incidentID']; ?>
            <br />
            
            <label>Product Code:</label> <?php echo $incident['productCode']; ?>
            <br />
            
            <label>Date Opened:</label>
            <?php $date = new DateTime($incident['dateOpened']); 
                  echo $date->format('m/d/Y'); ?>
            <br />
            
            <label>Date Closed:</label> 
            <input type="text" name="date" id="datepicker" />
            <br />
            
            <label>Title:</label> <?php echo $incident['title']; ?>
            <br />
            
            <label>Description:</label><br />
            <textarea name="description" rows="5" cols="46"><?php echo $incident['description']; ?></textarea>
            <br />
            
            <input type="submit" value="Update Incident" />
        </form>
        <form action="." method ="post" id="logout">
            <input type="hidden" name="action" value="logout" />
            <p>You are logged in as <?php echo $email; ?></p>
            <input type="submit" value="Logout" />
        </form>
    </div>
</main>
<?php include '../view/footer.php'; ?>