function deletePasien(id) {
    var com = window.confirm("yakin Delete?")
    if (com){
        window.location = "index.php?menu=pasien&delcom=1&id=" + id;
    }
}

function updatePasien(id) {
    window.location = "index.php?menu=pasien_update&id=" + id;
}


function deleteAsuransi(id) {
    var com = window.confirm("yakin Delete?")
    if (com){
        window.location = "index.php?menu=asuransi&delcom=1&id=" + id;
    }
}

function updateAsuransi(id) {
    window.location = "index.php?menu=asuransi_update&id=" + id;
}