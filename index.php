<?php
include 'function.php';
include 'cek-login.php';
head();
if (isset($_GET['pag'])){
$pag=$_GET['pag'];
    if ($pag=='datamhs'){
        datamhs();
    }if ($pag=='keuangan'){
        keuangan();
    }if ($pag=='trans'){
        trans();
    }if ($pag=='nilai'){
        nilai();
    }if ($pag=='pas'){
        pas();
    }if ($pag=='pass'){
        pass();
    }if ($pag=='mhssimpan'){
        mhssimpan();
    }if ($pag=='lib'){
        lib();
    }if ($pag=='perwalian'){
        perwalian();
    }if ($pag=='searchnilai'){
        searchnilai();
    }if ($pag=='logout'){
        logout();
    }
}else{
home();
}
foot();
?>