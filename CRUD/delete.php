<?php
require_once 'database.php';
require_once 'contacts.php';

if (isset($_POST['Id'])) {
    $Id = $_POST['Id'];
    $result = Contact::delete($Id);
    if ($result) {
        echo "Data with ID = $Id deleted successfully.";
    } else {
        echo "Failed to delete data with ID = $Id.";
    }
} else {
    echo "ID parameter is missing.";
}
?>