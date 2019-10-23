<?php
$conn = mysqli_connect("localhost", "root", "none", "lendy_11");

function checkExist($wallet, $conn) {
    $sql = "SELECT * FROM codengon_user_wallet_random WHERE wallet = '$wallet'";
   
    $result = mysqli_query($conn, $sql);
    return $result->num_rows;
}

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");

        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

            $wallet = $column['0'];
            if (checkExist($wallet, $conn) == 0) {
                $sqlInsert = "INSERT into codengon_user_wallet_random (type,wallet,status)
                       values (1,'$wallet',0)";
                $result = mysqli_query($conn, $sqlInsert);
                
                if (! empty($result)) {
                    $type = "success";
                    $message = "CSV Data Imported into the Database";
                } else {
                    $type = "error";
                    $message = "Problem in Importing CSV Data";
                }
            }
        }
    }
}
?>
<form action="#" method="POST" enctype='multipart/form-data'>
    <input type="file" name="file">
    <input type="submit" name="import">
</form>