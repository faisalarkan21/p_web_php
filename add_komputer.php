<?php

include_once("config.php");

if(isset($_POST['submitKomputer'])) {	
	$merkVGA =  $_POST['merkVGA'];
	$tipeHardisk =  $_POST['tipeHardisk'];
    $prosesor =$_POST['prosesor'];
    $jenisRAM =  $_POST['jenisRAM'];
    $touch =  $_POST['touch'];    

    if(empty($touch)) {
       $touch = 'Tidak';
    }

	// checking empty fields	
	$result = mysqli_query($mysqli, "INSERT INTO list_komputer(t_vga,t_hardisk,	t_prosesor,t_ram,is_touchscreen) 
    VALUES('$merkVGA','$tipeHardisk','$prosesor', '$jenisRAM', '$touch')");
    
    header("Location:index.php"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>List Laptop</title>
<link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>
<div class="back">
    <h1>
        <i class="fa fa-paper-plane fa-2x title" aria-hidden="true"></i>
        <br> Jasa Rakit Komputer</h1>
    <br/>
    <div class="main">
        <form name="form-rakit" action="add_komputer.php" method="POST">
            <div class="innerForm">
                <h3 class="titleInner ">
                    Pilih Komponen Komputer
                    <i class="fa fa-plug left" aria-hidden="true"></i>
                </h3>
                <hr>
                <br/>
                <label class="inputLabel" for="">
                    <i class="fa fa-arrow-circle-right right" aria-hidden="true"></i>
                    <b>Tipe VGA : </b>
                </label>
                <select name="merkVGA">
                    <option value="" selected disabled hidden>Pilih Tipe VGA</option>
                    <option value="GeForce GTX 1080 Ti">GeForce GTX 1080 Ti</option>
                    <option value="NVIDIA TITAN X">NVIDIA TITAN X</option>
                    <option value="Radeon RX 480">Radeon RX 480</option>
                    <option value="Radeon RX 470">Radeon RX 470</option>
                </select>
                <br/>
                <br/>
                <br/>
                <label class="inputLabel" for="">
                    <i class="fa fa-arrow-circle-right right" aria-hidden="true"></i>
                    <b>Tipe Hardisk : </b>
                </label>
                <br/>
                <input class="text_input" placeholder="Contoh HDD 500 GB" type="text" name="tipeHardisk">
                <br/>
                <br/>
                <br/>
                <label class="inputLabel" for="">
                    <i class="fa fa-arrow-circle-right right" aria-hidden="true"></i>
                    <b>Pilih Jenis Prosessor : </b>
                </label>
                <br/>
                <br/>
                <input type="radio" id="prosesorChoice1" name="prosesor" value="7th Generation Intel Core i3-7100U">
                <label class="non-blue" for="prosesorChoice1">7th Generation Intel® Core™ i3-7100U</label>
                <br/>
                <input type="radio" id="prosesorChoice2" name="prosesor" value="7th Generation Intel Core i5-7200U">
                <label class="non-blue" for="prosesorChoice2">7th Generation Intel® Core™ i5-7200U</label>
                <br/>
                <input type="radio" id="prosesorChoice3" name="prosesor" value="7th Generation Intel Core i7-7500U">
                <label class="non-blue" for="prosesorChoice3">7th Generation Intel® Core™ i7-7500U</label>
                <br/>
                <br/>
                <br/>
                <label class="inputLabel" for="">
                    <i class="fa fa-arrow-circle-right right" aria-hidden="true"></i>
                    <b>Memory (RAM) :</b>
                </label>
                <br/>
                <input class="text_input" placeholder="Contoh 4GB DDR4 SDRAM" type="text" name="jenisRAM">
                <br/>
                <br/>                   
                <input type="checkbox" id="touchId" name="touch" value="Ya">
                <label class="non-blue" id="labelTouch" for="touchId">Fitur monitor touchscreen (optional) ?</label>
                <br/>
                <br/>
                <input readonly name="submitKomputer" class="btn btn-primary btn-tambah" value="Pesan Komputer Sekarang" onClick="cekValidasi()"/>
        </FORM>
        <br/>
        <br/>
        <br/>
        </div>
        </form>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>
</body>
</html>

<script type="text/javascript">
    function cekValidasi() {

        var elementForm = document.forms["form-rakit"];

        let checked = document.getElementsByName("touch");
        console.log(checked[0].checked);

        if (elementForm[0].value === '') {
            alert("Isi Tipe VGA dengan benar! 😑");
            return false;
        } else if (elementForm[1].value === '') {
            alert("Isi Tipe hardisk dengan benar! 😣");
            return false;
        } else if (elementForm["prosesor"].value === '') {
            alert("Isi Tipe Prosesor dengan benar! 😩");
            return false;
        } else if (elementForm[5].value === '') {
            alert("Isi Memory ram dengan benar! 😫");
            return false;
        }
        

        if (elementForm) {
            elementForm.submit();
        }

    }
</script>