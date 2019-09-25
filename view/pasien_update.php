<?php
//Fetch Data  Function
$id = filter_input(INPUT_GET,'id');
if (isset($id)){
    $pasien = getPasienById($id);
}



//Update Function
$submitted = filter_input(INPUT_POST,'btnSubmit');
if(isset($submitted)){
    $mid = filter_input(INPUT_POST,'txtNP');
    $cid = filter_input(INPUT_POST,'txtIP');
    $name = filter_input(INPUT_POST,'txtName');
    $addr = filter_input(INPUT_POST,'txtAddr');
    $bplace = filter_input(INPUT_POST,'txtPL');
    $bdate = filter_input(INPUT_POST,'txtTL');
    $phone = filter_input(INPUT_POST,'txtPhone');
    $inid = filter_input(INPUT_POST,'txtAsuransi');
    updatePasien($mid,$cid,$name,$addr,$bplace,$bdate,$phone,$inid);
    header("Location: ?menu=pasien");
    exit;

}
?>
<form method="post">
    <p>UPDATE NEW PASIEN :</p>
    No.Pasien :<input readonly type="text" name="txtNP" id="name" value="<?php echo $pasien['med_record_number']; ?>"><br>
    ID. Pasien :<input type="text" name="txtIP" id="name" value="<?php echo $pasien['citizen_id_number']; ?>"><br>
    Nama :<input type="text" name="txtName" id="name" value="<?php echo $pasien['name']; ?>"><br>
    Alamat :<input type="textarea" name="txtAddr" id="name" value="<?php echo $pasien['address']; ?>"><br>
    Tempat Lahir :<input type="text" name="txtPL" id="name" value="<?php echo $pasien['birth_place']; ?>"><br>
    Tanggal Lahir :<input type="date" name="txtTL" id="name" value="<?php echo $pasien['birth_date']; ?>"><br>
    No. HP/Telp :<input type="text" name="txtPhone" id="name" value="<?php echo $pasien['phone_number']; ?>"><br>
    Asuransi :
    <?php
    $asuransis = getAllAsuransi();
    echo '<select name="txtAsuransi">';
    foreach ($asuransis as $asuransi) {
        echo '  <option ';
        echo ' value="'.($asuransi['id']).'">'.($asuransi['name_class']);
        echo '</option>';
    }
    echo '<select>';

    ?><br>
    <input name="btnSubmit" type="submit" value="submit">
</form>

