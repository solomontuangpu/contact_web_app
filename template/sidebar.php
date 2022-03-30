<div class="col-12 col-md-3">
    <div class="mt-4 ps-2">
        <div class="d-flex justify-content-start align-items-center">
            <div class="me-2 contact-logo bg-primary text-white">
                <i class="feather-user fw-bolder fs-3"></i>
            </div>
            <a class="navbar-brand" href="#">
                <h4 class="text-secondary mb-0">My Contacts</h4>
            </a>
        </div>

        <div class="mt-5">

            <!-- Button trigger modal -->
            <button type="button" class="btn create-btn shadow text-secondary" id="createContactBtn">
                <i class="feather-plus fs-4 mb-0 text-primary me-2"></i>
                Create Contact
            </button>

            <div class="mt-3">
                <ul class="menu-nav">
                    <li class="menu-link d-flex justify-content-between align-content-center">
                        <a href="<?php $url; ?>index.php" class="btn text-secondary">
                            Contacts
                            <span class="badge rounded-pill bg-primary ms-1">
                                <?php
                                    echo countTotal('contact_list');
                                ?>
                            </span>
                        </a>
                        
                    </li>
                </ul>
            </div>
         
        </div>

    </div>
</div>