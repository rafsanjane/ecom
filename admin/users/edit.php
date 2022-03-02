<?php require_once __DIR__ . '/../partials/header.php' ?>

<?php

if (isset($_GET['id'])) :
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE user_id = '$id'";
        $user_data = $connection->query($sql);

        foreach ($user_data as $row) {
               $role =  $row['role'];
        }
else :
        return header('location: index.php');

endif;
?>

<div class="card">
        <div class="card-header">
                <a href="index.php">
                        <button class="btn btn-primary"><i class="bi bi-back"> Back</i></button>
                </a>
        </div>
        <div class="card-content">
                <div class="card-body">
                        <form class="form form-horizontal" method="post" action="func/update.php" enctype="multipart/form-data">
                                <div class="form-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                        <label>Name</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="name" class="form-control" name="name" placeholder="Ex: Jone Doi" value="<?php echo $row['name'] ?>" required>
                                                </div>
                                                <div class=" col-md-4">
                                                        <label>Email</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="email" id="email-id" class="form-control" name="email" placeholder="example@example.com" value="<?php echo $row['email'] ?>" required>
                                                </div>
                                                <div class=" col-md-4">
                                                        <label>Phone</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="phone" id="contact-info" class="form-control" name="phone" placeholder="+000 123 4567" value="<?php echo $row['phone'] ?>" required>
                                                </div>
                                                <div class=" col-md-4">
                                                        <label>Password</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="password" placeholder="User Password" value="<?php echo $row['password'] ?>" required>
                                                </div>
                                                <div class=" col-md-4">
                                                        <label>Role</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                <select name="role" id="" class="form-control" required>
                                                        <option value="Admin" 
                                                            <?php 
                                                                if($role=='Admin'):
                                                                    echo "selected";
                                                                endif;
                                                            ?>
                                                            >Admin</option>
                                                        <option value="User"
                                                            <?php 
                                                                if($role=='User'):
                                                                    echo "selected";
                                                                endif;
                                                            ?>
                                                        > User</option>
                                                        <option value="Editor"
                                                            <?php 
                                                                if($role=='Editor'):
                                                                    echo "selected";
                                                                endif;
                                                            ?>
                                                        >Editor</option>
                                                        <option value="Seller"
                                                            <?php 
                                                                if($role=='Seller'):
                                                                    echo "selected";
                                                                endif;
                                                            ?>
                                                        >Seller</option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="user_id" value="<?php echo $id ?>">
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="update">Update</button>

                                                </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>



<?php require_once '../partials/footer.php' ?>