<section class="container-fluid form-content">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12 col-md-4">
                <div class="">
                    <?php 
                    if(isset($_POST['addContacts'])) {
                        addContacts();
                    }
                    ?>
                   
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-primary">Add Contact</h4>
                            
                                <hr>

                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-2">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="<?php echo old('name'); ?>">

                                <?php if(getError('name')) { ?>
                                <small class="text-danger"> <?php echo getError('name'); ?> </small>
                                <?php } ?>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email" class="mb-2">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="<?php echo old('email'); ?>">

                                <?php if(getError('email')) { ?>
                                <small class="text-danger"> <?php echo getError('email'); ?> </small>
                                <?php } ?>
                            </div>
                            <div class="form-group mb-2">
                                <label for="phone" class="mb-2">Phone Number</label>
                                <input type="number" id="phone" name="phone" class="form-control"
                                    value="<?php echo old('phone'); ?>">

                                <?php if(getError('phone')) { ?>
                                <small class="text-danger"> <?php echo getError('phone'); ?> </small>
                                <?php } ?>
                            </div>
                            <div class="form-group mb-2">
                                <label for="address" class="mb-2">Address</label>
                                <input type="text" id="address" name="address" class="form-control"
                                    value="<?php echo old('address'); ?>">

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
                                <button type="button" class="btn btn-danger close-form">Cancel</button>
                                <button type="submit" name="addContacts" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                        </div>
                    </div>

                      
                 
                </div>
            </div>
        </div>
</section>