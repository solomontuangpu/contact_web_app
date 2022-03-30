<?php require_once "template/header.php"; ?>

<section class="container-fluid mt-5">
    <div class="row">
    
    <h4 class="text-primary">Edit Contact</h4>

        <hr>

        <div class="col-12 col-md-4">
            <div class="">
                <?php 
                    $id = $_GET['id'];
                    $current = contactDetail($id);

                    if(isset($_POST['editContacts'])) {
                        contactEdit($id);
                    }
                    ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <label for="name" class="mb-2">Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="<?php echo $current['name']; ?>">

                        <?php if(getError('name')) { ?>
                        <small class="text-danger"> <?php echo getError('name'); ?> </small>
                        <?php } ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="<?php echo $current['email']; ?>">

                        <?php if(getError('email')) { ?>
                        <small class="text-danger"> <?php echo getError('email'); ?> </small>
                        <?php } ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone" class="mb-2">Phone Number</label>
                        <input type="number" id="phone" name="phone" class="form-control"
                            value="<?php echo $current['phone']; ?>">

                        <?php if(getError('phone')) { ?>
                        <small class="text-danger"> <?php echo getError('phone'); ?> </small>
                        <?php } ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address" class="mb-2">Address</label>
                        <input type="text" id="address" name="address" class="form-control"
                            value="<?php echo $current['address']; ?>">

                        <?php if(getError('address')) { ?>
                        <small class="text-danger"> <?php echo getError('address'); ?> </small>
                        <?php } ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="formFile" class="form-label">Choose Photo</label>
                        <input class="form-control" type="file" id="formFile" name="upload">

                        <?php if(getError('upload')) { ?>
                        <small class="text-danger"> <?php echo getError('upload'); ?> </small>
                        <?php } ?>
                    </div>
                    <div class="form-group mt-3">
                        <a href="<?php echo $url; ?>index.php" type="button" class="btn btn-danger close-form">
                           Cancel
                        </a>
                        <button type="submit" name="editContacts" class="btn btn-primary">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<?php require_once "template/form.php"; ?>

<?php require_once "template/footer.php"; ?>