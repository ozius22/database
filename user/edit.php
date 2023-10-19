<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="../index.php">Back</a>
    <h2>Edit User</h2>

    <?php
        require ('../php/user/user.php');
        while ($row = $result->fetch_assoc()) {
    ?>

        <form action="../php/user/update-user.php" method="POST">
            <div>
                <label>First Name</label><br />
                <input type="text" name="first_name" placeholder="First Name" value="<?php echo $row['first_name'];?>"/>
            </div>
            <div>
                <label>Last Name</label><br />
                <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $row['last_name'];?>"/>
            </div>
            <div>
                <label>Gender</label><br />
                <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'Male') echo 'checked'; ?> /> Male
                <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'Female') echo 'checked'; ?>/> Female
                <input type="radio" name="gender" value="other" <?php if ($row['gender'] == 'Other') echo 'checked'; ?>/> Other
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit">Update</button>
            </div>
        </form>
    <?php } ?>
</body>
</html> 