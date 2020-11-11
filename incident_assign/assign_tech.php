<?php include '../view/header.php'; ?>
<main>
    <h1>Assign Incident</h1>

  
    <section> 
        
       <div style="margin-left: 10px;">
        <p>Customer:&emsp;&emsp;&emsp;<?php echo $incidentInfo['firstName'].' '.$incidentInfo['lastName']; ?> </p>        
        <p>Product:&emsp;&emsp;&emsp;&emsp;<?php echo $incidentInfo['productCode']; ?></p>
        <p>Technician:&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $tech_name['firstName'].' '.$tech_name['lastName']; ?>
            <form action="." method="post">
                    <input type="hidden" name="action"
                           value="tech_assign_confirm">
                    <input type="hidden" name="techID"
                           value="<?php echo $tech_id; ?>">
                    <input type="hidden" name="incidentID"
                           value="<?php echo $id; ?>">
                    <input type="submit" value="Assign Incident">
                    </form>
       </div>
        
    </section>
</main>
<?php include '../view/footer.php'; ?>

