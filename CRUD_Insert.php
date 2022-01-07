
<form method="POST">
<table class="table">
    <thead>
        <td><a>Data Baru</a></td>
        <td>           
            <div>Nim</div>
            <div><input name="nimtbx" class="form-control" required></div>
        </td>
        <td>
            <div>Name</div>
            <div><input name="namatbx" class="form-control" required></div>
        </td>
        <td>
            <div>Matkul</div>
            <div><input name="matkulltbx" class="form-control" required></div>
        </td>
        <td class="align-bottom">
            <input type="Submit" name="addbtn" class="btn btn-success">
        </td>
    </thead>
</table>
</form>
<?php
    if(isset($_POST["addbtn"])){
        include_once 'MyFrameworks/DBQuery.php';
        DBQuery::IUD("Insert INTO bank_table (IDNim,IDNama,IDMatkull ) VALUES ('".$_POST["nimtbx"]."','".$_POST["namatbx"]."','".$_POST["matkulltbx"]."') ");
    }
?>