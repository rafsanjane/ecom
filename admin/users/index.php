<?php require_once __DIR__ . '/../partials/header.php'; ?>
<?php
$sql = "SELECT * FROM users";
$user_data = $connection->query($sql);
?>

<div class="card">
    <div class="card-header">
        <a href="create.php">
            <button class="btn btn-primary"><i class="bi bi-plus">Create</i></button>
        </a>
    </div>
    <div class="card-content">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">Password</th>
                        <th scope="col">role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $serial_num = 1;
                    if ($user_data->num_rows > 0) :

                        // output data of each row
                        foreach ($user_data as $row) :
                    ?>
                            <tr>
                                <td scope="col"><?php echo $serial_num++; ?></td>
                                <td scope="col"><?php echo $row['name']; ?></td>
                                <td scope="col"><?php echo $row['email'] ?></td>
                                <td scope="col"><?php echo $row['phone'] ?></td>
                                <td scope="col"><?php echo $row['password'] ?></td>
                                <td scope="col"><?php echo $row['role'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['user_id']; ?>">Edit</a> | <a href="func/delete.php?id=<?php echo $row['user_id']; ?>">Delete</a>
                                </td>
                            </tr>
                    <?php
                        endforeach;

                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once '../partials/js_scripts.php' ?>
<?php require_once __DIR__ . '/../partials/footer.php'; ?>