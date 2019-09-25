<?php
//Fetch Data  Function
$id = filter_input(INPUT_GET,'id');
if (isset($id)){
    $asuransi = getAsuransiById($id);
}



//Update Function
$submitted = filter_input(INPUT_POST,'btnSubmit');
if(isset($submitted)){
    $name = filter_input(INPUT_POST,'txtName');
    updateAsuransi($asuransi['id'],$name);
    header("Location: ?menu=asuransi");
    exit;

}
?>
<form method="post">
    <p>UPDATE Asuransi :</p>
    ID Asuransi :<input readonly type="text" name="txtID" value="<?php echo $asuransi['id']; ?>">
    Nama Asuransi :<input type="text" name="txtName" value="<?php echo $asuransi['name_class']; ?>">
    <input name="btnSubmit" type="submit" value="Update Asuransi">
</form>
<br>




