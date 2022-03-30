<?php require_once "core/base.php"; ?>
<?php require_once "core/function.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Contacts</title>

    <link rel="shortcut icon" href="<?php echo $url; ?>img/contact.png" type="image/png">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url; ?>dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/style.css">

</head>

<body>

    <section class="container-fluid">
        <div class="row">

            <?php require_once "template/sidebar.php"; ?>

            <div class="col-12 col-md-9 px-0">
                <nav class="navbar navbar-expand-lg navbar-light mt-3">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-between"
                            id="navbarSupportedContent">

                            <form class="d-flex w-50">

                                <div class="input-group">
                                    <input type="search" class="form-control shadow-sm search-bar w-50" type="search"
                                        placeholder="Search" aria-label="Search">
                                </div>

                            </form>

                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item dropdown d-flex align-items-center">
                                    <img src="img/blogger.png" alt="" class="profile-img me-2">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Solomon Tuangpu
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Profile Setting</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Log Out</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
        