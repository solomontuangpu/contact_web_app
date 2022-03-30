<?php require_once "template/header.php"; ?>

<section class="container mt-5">
    <div class="row">
        <div class="col-6">
          
            <?php 
                $id = $_GET['id'];
                $d = contactDetail($id);
            ?>

                <div class="">
                    <img src="<?php echo $d['photo']; ?>" alt="" class="w-25">
                </div>
                <div class="d-flex mt-3">
                    <p>Name :</p>
                    <p><?php echo $d['name']; ?></p>
                </div>
                <div class="d-flex">
                    <p>Email :</p>
                    <p><?php echo $d['email']; ?></p>
                </div>
                <div class="d-flex">
                    <p>Phone :</p>
                    <p><?php echo $d['phone']; ?></p>
                </div>
                <div class="d-flex">
                    <p>Address :</p>
                    <p><?php echo $d['address']; ?></p>
                </div>
                <div class="d-flex">
                    <a href="contact_edit.php?id=<?php echo $d['id']; ?>" class="btn">
                        <i class="feather-edit text-info"></i>
                    </a>
                    <a href="contact_delete.php?id=<?php echo $d['id']; ?>" class="btn">
                        <i class="feather-trash-2 text-danger"></i>
                    </a>
                </div>

         
        </div>
      
    </div>
</section>
  

<?php require_once "template/form.php"; ?>

<?php require_once "template/footer.php"; ?>