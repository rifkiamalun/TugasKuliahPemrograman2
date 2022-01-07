<?php

?>
<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Update_bank_table">
        <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">          
            <div class=" modal-content">
            <form method="POST">        
            <div class="modal-header"> <a class="navbar-brand"><b>Update Entry</b></a></div>
             <div class="modal-body">
             <input id="update_IDNum" name="update_IDNum"  style="display:none" >
             <div>Nim</div>
                <div><input class="form-control" id="update_nimtbx" name="update_nimtbx" required></div>
                <div>Nama</div>
                <div><input class="form-control" id="update_namatbx" name="update_namatbx" required></div>
                <div>Matkul</div>
                <div><input class="form-control" id="update_matkulltbx" name="update_matkulltbx" required></div>                
             </div>
             <div class ="modal-footer">
                    <button onclick="hideModal('Update_bank_table')" class="btn btn-danger w-25">Cancel</button>
                    <button name="updatebtn" class="btn btn-success w-25">Yes</button>                                  
                </div>
            </form>                
            </div>
        </div>
    </div>
<script>

</script>
<?php
    if(isset($_POST["updatebtn"])){     
        DBQuery::IUD("Update_bank_table SET IDNim = '".$_POST["update_nimtbx"]."',  IDNama ='".$_POST["update_namatbx"]."', IDMatkull ='".$_POST["update_matkulltbx"]."' WHERE IDNum ='".$_POST["update_IDNum"]."'");
        echo '<script>window.location.href="";</script>';   
    }
?>