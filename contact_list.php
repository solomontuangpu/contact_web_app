<div class="mt-5">
    <table class="table table-hover text-secondary">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
           
            <?php foreach(showContact() as $s) { ?>

            
              
                <tr id="tableRow" onclick="go('<?php echo $url; ?>contact_detail.php?id=<?php echo $s['id']; ?>')">
                    <td>
                        <img src="<?php echo $s['photo'] ?>" alt="" class="contact-image me-2">
                       <?php echo $s['name'] ?>
                    </td>
                    <td><?php echo $s['email']; ?></td>
                    <td><?php echo $s['phone']; ?></td>
                    <td><?php echo $s['address']; ?></td>
                    <td>
                        <a href="contact_edit.php?id=<?php echo $s['id']; ?>" class="btn btn-sm">
                            <i class="feather-edit text-info"></i>
                        </a>
                        <a href="contact_delete.php?id=<?php echo $s['id']; ?>" class="btn btn-sm">
                            <i class="feather-trash-2 text-danger"></i>
                        </a>
                    </td>
                    </tr>
             
            

            <?php } ?>
           
        </tbody>
    </table>
</div>

