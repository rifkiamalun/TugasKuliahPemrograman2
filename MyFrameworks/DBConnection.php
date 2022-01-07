<?php
    class DBConnection {
    public  function getDBConnection() {
        $con = mysqli_connect("localhost","root","","data_mahasiswa_online");
        return $con;
    }
}
