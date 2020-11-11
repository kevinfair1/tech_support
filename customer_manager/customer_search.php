<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Search</h2>    
    
    <form action="." method="post">
        <input type="hidden" name="action" value="display_customers">
        <label>Last Name:</label>
        <input type="text" name="last_name" 
               value="<?php echo ($last_name); ?>">
        <input type="submit" value="Search">
    </form>
    <h2>Add Customer</h2>
    <form action="customer_add.php" method="post">
        <button type="submit"> Add Customer</button>
    </form>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php elseif ($customers) : ?>
        <h2>Results</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($customers as $customer) : ?>
            <tr>
                <td><?php echo (
                        $customer['firstName'] . ' ' . 
                        $customer['lastName']); ?></td>
                <td><?php echo ($customer['email']); ?></td>
                <td><?php echo ($customer['city']); ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="display_customer" />
                    <input type="hidden" name="customer_id"
                           value="<?php echo ($customer['customerID']); ?>" />
                    <input type="submit" value="Select" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</main>
<?php include '../view/footer.php'; ?>