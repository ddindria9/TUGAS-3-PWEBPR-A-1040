<?php
require_once 'database.php';
require_once 'contacts.php';

if (isset($_POST['ID'])) {
    $Id = $_POST['ID'];
    $result = Contact::delete($ID);
    if ($result) {
        echo "Data with ID = $ID deleted successfully.";
    } else {
        echo "Failed to delete data with ID = $ID.";
    }
} else {
    echo "ID parameter is missing.";
}
?>
