
<tr>
    <th><?php echo $row["IDNum"]?></th>
    <th><?php echo $row["IDNim"]?></th>
    <th><?php echo $row["IDNama"]?></th>
    <th><?php echo $row["IDMatkull"]?></th>
    <th>
        <button class="btn btn-primary " onclick="Gridview_mhsw_table_Update('<?php echo $row['IDNum']?>','<?php echo $row['IDNim']?>','<?php echo $row['IDNama']?>','<?php echo $row['IDMatkull']?>','Update_bank_table')">Update</button>
        <button class="btn btn-danger " onclick="Gridview_mhsw_table_Delete('<?php echo $row['IDNum']?>','Delete_bank_table')">Delete</button>
    </th> 
</tr>

<script>
    function Gridview_mhsw_table_Update(IDNum,IDNim,IDNama,IDMatkull,IDModal)
    {   
        document.getElementById('update_IDNum').value =IDNum;
        document.getElementById('update_nimtbx').value =IDNim;
        document.getElementById('update_namatbx').value =IDNama;
        document.getElementById('update_matkullktbx').value =IDMatkull;
        showModal(IDModal);  
         
    }
    function Gridview_mhsw_table_Delete(IDNum,IDModal)
    {   
        document.getElementById('delete_IDNum').value =IDNum;
        showModal(IDModal);  
         
    }

    
</script>
