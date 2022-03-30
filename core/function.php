<?php 
//common start
function alert($data, $color="danger") {
    return "<p class='alert alert-$color'>$data</p>";
}
    
function runQuery($sql) {
    
    if(mysqli_query(con(), $sql)) {
         return true;
    } else {
         die("Query Failed!");
    }
    
}
    
function fetchAll($sql) {
    
    $query = mysqli_query(con(), $sql);
    $rows = [];
    
    while($row = mysqli_fetch_assoc($query)) {
    array_push($rows, $row);
    }
    
    return $rows;
}
    
function fetch($sql) {
    
    $query = mysqli_query(con(), $sql);
    $row = mysqli_fetch_assoc($query);
    
    return $row;
}
    
function redirect($location) {
    
    header("location: $location");
    
}
    
function linkTo($location) {
    echo "<script>
        location.href = '$location';
        </script>";
}
    
function showTime($timestamp, $format='d-m-Y') {
    
    return date($format, strtotime($timestamp));

}
    
function shortenString($str, $length = "50") {
    return substr($str, 0, $length). "...";
}
    
function textFilter($text) {
    
    $text = trim($text);
    $text = htmlentities($text, ENT_QUOTES);
    $text = stripslashes($text);
    
    return $text;
    
}
    
function countTotal($table, $condition=1) {
    $sql = "SELECT COUNT(id) FROM $table WHERE $condition";
    $total = fetch($sql);
    
    return $total['COUNT(id)'];
}


function old($input_name) {

        if(isset($_POST[$input_name])) {
            return $_POST[$input_name];
        } else {
            return "";
        }
    
}
    
function setError($input_name, $message) {
    
        $_SESSION['error'][$input_name] = $message;
    
}
    
function getError($input_name) {
    
        if(isset($_SESSION['error'][$input_name])) {
           return $_SESSION['error'][$input_name];
        } else {
           return "";
        }
    
}
    
function clearError() {
    
        $_SESSION['error'] = [];
    
}
//common end

//addContact start

function addContacts() {


    $error_status = 0;
  
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
    $photo = "";

    if(empty($_POST['name'])) {
        setError('name', 'Name is required!');
        $error_status = 1;
    } else {
        if(strlen($_POST['name']) < 5) {
            setError('name', 'Name is too short!');
            $error_status = 1;
        } else {
            if(strlen($_POST['name']) > 20) {
                setError('name', 'Name is too long!');
                $error_status = 1;
            } else {
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
                    setError('name', 'Only letters and white space allowed');
                    $error_status = 1;
                  } else {
                        $name = textFilter($_POST['name']);
                  }
            }
        }
    }

    if(empty($_POST['email'])) {
        setError('email', 'Email is required!');
        $error_status = 1;
    } else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            setError('email', 'Incorrect Email Format!');
            $error_status = 1;
        } else {
            $email = textFilter($_POST['email']);
        }
    }

    if(empty($_POST['phone'])) {
        setError('phone', 'Phone Number is required!');
        $error_status = 1;
    } else {
        if(!preg_match("/^[0-9 ]*$/",$_POST['phone'])) {
            setError('phone', 'Only Numbers');
            $error_status = 1;
        } else {
            $phone = textFilter($_POST['phone']);
        }
    }

    if(empty($_POST['address'])) {
        setError('address', 'Address is required!');
        $error_status = 1;
    } else {
        if(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST['address'])) {
            setError('address', 'Only Numbers');
            $error_status = 1;
        } else {
            $address = textFilter($_POST['address']);
        }
    }


    if(!$_FILES['upload']['name']) {
        setError('upload', 'File is required!');
        $error_status = 1;
    } else {
        $supportFileType = ['image/png', 'image/jpeg'];    
        if(!in_array($_FILES['upload']['type'], $supportFileType)) {
            setError('upload', 'Invalid file type');
            $error_status = 1;
        } else { 
            $temp_file = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];

            $save_folder = "store/";
            $new_filename = $save_folder.uniqid()."_".$file_name;
            move_uploaded_file($temp_file, $new_filename);

            $photo = $new_filename;
        }
    }
      

    if(!$error_status) {

        $sql = "INSERT INTO contact_list (photo, name, email, phone, address) VALUES ('$photo', '$name', '$email', '$phone', '$address')";
        
        runQuery($sql);

        return linkTo('index.php');

    }

}

//addContact end

//showContact start

function showContact() {
    $sql = "SELECT * FROM contact_list";

    return fetchAll($sql);
}

function contactDetail($id) {
    $sql = "SELECT * FROM contact_list WHERE id = '$id'";

    return fetch($sql);
}

function contactDelete($id) {
    $sql = "DELETE FROM contact_list WHERE id='$id'";
    return runQuery($sql);
}

function contactEdit($id) {

    $current = contactDetail($id);
    unlink($current['photo']);

    $error_status = 0;
  
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
    $photo = "";

    if(empty($_POST['name'])) {
        setError('name', 'Name is required!');
        $error_status = 1;
    } else {
        if(strlen($_POST['name']) < 5) {
            setError('name', 'Name is too short!');
            $error_status = 1;
        } else {
            if(strlen($_POST['name']) > 20) {
                setError('name', 'Name is too long!');
                $error_status = 1;
            } else {
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
                    setError('name', 'Only letters and white space allowed');
                    $error_status = 1;
                  } else {
                        $name = textFilter($_POST['name']);
                  }
            }
        }
    }

    if(empty($_POST['email'])) {
        setError('email', 'Email is required!');
        $error_status = 1;
    } else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            setError('email', 'Incorrect Email Format!');
            $error_status = 1;
        } else {
            $email = textFilter($_POST['email']);
        }
    }

    if(empty($_POST['phone'])) {
        setError('phone', 'Phone Number is required!');
        $error_status = 1;
    } else {
        if(!preg_match("/^[0-9 ]*$/",$_POST['phone'])) {
            setError('phone', 'Only Numbers');
            $error_status = 1;
        } else {
            $phone = textFilter($_POST['phone']);
        }
    }

    if(empty($_POST['address'])) {
        setError('address', 'Address is required!');
        $error_status = 1;
    } else {
        if(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST['address'])) {
            setError('address', 'Only Numbers');
            $error_status = 1;
        } else {
            $address = textFilter($_POST['address']);
        }
    }


    if(!$_FILES['upload']['name']) {
        setError('upload', 'File is required!');
        $error_status = 1;
    } else {
        $supportFileType = ['image/png', 'image/jpeg'];    
        if(!in_array($_FILES['upload']['type'], $supportFileType)) {
            setError('upload', 'Invalid file type');
            $error_status = 1;
        } else { 
            $temp_file = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];

            $save_folder = "store/";
            $new_filename = $save_folder.uniqid()."_".$file_name;
            move_uploaded_file($temp_file, $new_filename);

            $photo = $new_filename;
        }
    }
      

    if(!$error_status) {

        $sql = "UPDATE contact_list SET photo='$photo', name='$name', email ='$email', phone='$phone' , address='$address' WHERE id = '$id'";
        
        runQuery($sql);

        linkTo('index.php');

    }
}
//showContact End
