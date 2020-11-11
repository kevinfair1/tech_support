<?php include '../view/header.php'; ?>
<main>
    <h3>Update Incident</h3>
    <p> This is to show my data from the update page is correctly being passed through to the variables
        that should be updating the database. However, all this works fine, except for the actual
        update of the database.</p>
    <p style="color:red;">Description: <?php echo $description; ?></p>
    <p style="color:red;">Date Closed: <?php echo $date_closed; ?></p>
    <p style="color:red;">Incident ID: <?php echo $incident_id; ?></p>
    <div id="main">
        <p>This incident was updated.</p>
        <p><a href=".">Select Another Incident</a></p>
        <form action="." method ="post" id="logout">
            <input type="hidden" name="action" value="logout" />
            <p>You are logged in as <?php echo $email; ?></p>
            <input type="submit" value="Logout" />
        </form>
    </div>
</main>
<?php include '../view/footer.php'; ?>