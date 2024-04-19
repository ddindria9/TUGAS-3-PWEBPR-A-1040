<?php
require_once 'database.php';
require_once 'contacts.php';

if (
    isset($_POST['ID']) &&
    isset($_POST['Nama']) &&
    isset($_POST['Alamat']) &&
    isset($_POST['No.Telp'])
) {
    $Id = $_POST['ID'];
    $NAME = $_POST['Nama'];
    $ADRESS = $_POST['Alamat'];
    $PHONE_NUMBER = $_POST['No.Telp'];

    $result = Contact::update($ID, $Nama, $Alamat, $Status, $No.Telp);
    if ($result) {
        echo "Data with ID = $ID updated successfully.";
    } else {
        echo "Failed to update data with ID = $ID.";
    }
} else {
    echo "One or more parameters are missing.";
}
?>
