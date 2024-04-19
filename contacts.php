<?php

require_once 'database.php';

class Contact{
    static function select(){
        global $conn;
        $sql = "SELECT * FROM db_artikel";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value){
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert($ID, $Nama, $Alamat, $No. Telp) {
        global $conn;
        $sql = "INSERT INTO`db_artikel`(ID, Nama, Alamat Status, No. Telp) VALUES(?,?,?,?,?,?)";
        $stnt = $conn->prepare($sql);
        $stnt->bind_param("sss", $ID, $Nama, $Alamat, $No. Telp);
        $stnt->execute();
        $result = $stnt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function update($ID, $Nama, $Alamat, $Status, $No. Telp) {
        global $conn;
        $sql = "UPDATE db_artikel SET  ?, Nama = AlamatESS = ?, Status = ?, No. Telp = ? WHERE ID = ?";
        $stnt = $conn->prepare($sql);
        $stnt->bind_param("ssssss", $Nama, $Alamat, $Status, $No. Telp, $ID);
        $stnt->execute();
        $result = $stnt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function delete($ID) {
        global $conn;
        $sql = "DELETE FROM db_artikel WHERE ID = ?";
        $stnt = $conn->prepare($sql);
        $stnt->bind_param("s", $ID);
        $stnt->execute();
        $result = $stnt->affected_rows > 0 ? true : false;
        return $result;
    }
}
