<?php require_once __DIR__ . '/../partials/header.php' ?>


<div class="card" style="width: 1200px; margin:70px auto;">
    <div class="card-header">
        <a href="index.php">
            <button class="btn btn-primary"><i class="bi bi-back"> Back</i></button>
        </a>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" method="post" action="func/create.php" enctype="multipart/form-data">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div <?php if (isset($username_exist)) : ?> class="form_error" <?php endif ?>>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Ex: Jone Doi" required>
                                <?php if (isset($username_exist)) : ?>
                                    <span><?php echo $username_exist; ?></span>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div <?php if (isset($email_exist)) : ?> class="form_error" <?php endif ?>>
                                <input type="email" id="email-id" class="form-control" name="email" placeholder="example@example.com" required>
                                <?php if (isset($email_exist)) : ?>
                                    <span><?php echo $email_exist; ?></span>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="phone" id="contact-info" class="form-control" name="phone" placeholder="+000 123 4567" required>
                        </div>
                        <div class="col-md-4">
                            <label>Password</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="contact-info" class="form-control" name="password" placeholder="User Password" required>
                        </div>
                        <div class="col-md-4">
                            <label>Role</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="role" id="" class="form-control" required>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                                <option value="Editor">Editor</option>
                                <option value="Seller">Seller</option>
                            </select>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Create</button>
                            <!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php require_once '../partials/js_scripts.php' ?>
<?php require_once '../partials/footer.php' ?>