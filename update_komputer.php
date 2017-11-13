<?php

include_once("config.php");
if(isset($_POST['update-order']))
{       
    $id = $_GET['id_order'];
    $merkVGA =  $_POST['merkVGA'];
	$tipeHardisk =  $_POST['tipeHardisk'];
    $prosesor =$_POST['prosesor'];
    $jenisRAM =  $_POST['jenisRAM'];
    $touch =  $_POST['touch'];    

    if(empty($touch)) {
       $touch = 'Tidak';
    }

    $result = mysqli_query($mysqli, "UPDATE list_komputer SET t_vga='$merkVGA',t_hardisk='$tipeHardisk',
    t_prosesor='$prosesor', t_ram='$jenisRAM', is_touchscreen='$touch' WHERE id_order=$id");
    
    if ($result){
        header("Location:index.php");        
    }else{
        printf("Errormessage: %s\n", $mysqli->error);
        die("Gagal menyimpan perubahan...");
    }   
}
?>

<?php

$id = $_GET['id_order'];

$result = mysqli_query($mysqli, "SELECT * FROM list_komputer WHERE id_order=$id");

while($res = mysqli_fetch_array($result))
{
	$vga = $res['t_vga'];
	$hardisk = $res['t_hardisk'];
    $prosesor = $res['t_prosesor'];
    $ram = $res['t_ram'];
    $touchscreen = $res['is_touchscreen'];
}

?>
<!DOCTYPE html>
<html>

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
            <form name="form-rakit" action="update_komputer.php?id_order='<?php echo $id ?>'" method="POST">
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
                    <select name="merkVGA" id="vgaCheck">                        
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
                    <input class="text_input" placeholder="Contoh HDD 500 GB" value="<?php echo $hardisk ?>" type="text" name="tipeHardisk">
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
                    <input class="text_input" placeholder="Contoh 4GB DDR4 SDRAM" value="<?php echo $ram ?>" type="text" name="jenisRAM">
                    <br/>
                    <br/>                   
                    <input type="checkbox" id="touchId" name="touch" value="Ya">
                    <label class="non-blue" id="labelTouch" for="touchId">Fitur monitor touchscreen (optional) ?</label>
                    <br/>
                    <br/>
                    <input readonly name="update-order" class="btn btn-primary btn-tambah" VALUE="Update Data Order" onClick="cekValidasi()"
                    />           
                
       
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
  
    var vga = document.getElementById('vgaCheck');
    vga.value = '<?php echo $vga ?>' ;

    var prosesor1 = document.getElementById('prosesorChoice1');
    var prosesor2 = document.getElementById('prosesorChoice2');
    var prosesor3 = document.getElementById('prosesorChoice3');

    if ( prosesor1.value === '<?php echo $prosesor ?>'){
        prosesor1.checked = true;
    } else if ( prosesor2.value === '<?php echo $prosesor ?>'){
        prosesor2.checked = true;
    }
    else if ( prosesor3.value === '<?php echo $prosesor ?>'){
        prosesor3.checked = true;
    }

    var touchScreen = document.getElementById('touchId');
    if ('Ya' === '<?php echo $touchscreen ?>'){
        touchScreen.checked = true;
    }

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