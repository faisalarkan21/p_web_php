<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM list_komputer"); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>List Laptop</title>
    <link rel="stylesheet" href="stylesheets/style.css">
</head>

<body>   
    <br/>
    <div class="back-table">
        <table class="table" border="1">
            <h3 class="titleInner tableTitle">List Pesanan Komputer
                <i class="fa fa-cogs  fa-lg left" aria-hidden="true"></i>
            </h3>
            <thead>
                <tr height="50">
                <th width="160" class="thTable">Id Order</th>
                     <th width="160" class="thTable">Tipe VGA</th>
                     <th width="100" class="thTable">Tipe Hardisk</th>
                    <th width="280" class="thTable">Jenis Prosesor</th>
                     <th width="240" class="thTable">Memory (RAM)</th>
                    <th width="100" class="thTable">Monitor Touchscreen</th>
                    <th width="400" class="thTable">Tindakan</th>
                 </tr>
            </thead>
            <br/>
            <tbody id="table-body-build">
            <?php 
	
	while($res = mysqli_fetch_array($result)) { 		
        echo "<tr>";
        echo "<td>".$res['id_order']."</td>";
		echo "<td>".$res['t_vga']."</td>";
		echo "<td>".$res['t_hardisk']."</td>";
        echo "<td>".$res['t_prosesor']."</td>";	
        echo "<td>".$res['t_ram']."</td>";	
        echo "<td>".$res['is_touchscreen']."</td>";	
        echo "<td  class=\"td-tindakan\" ><a class=\"btn btn-primary\" href=\"update_komputer.php?id_order=$res[id_order]\">Edit</a>  
        <a class=\"btn btn-primary btn-delete \" href=\"delete_komputer.php?id_order=$res[id_order]\" 
        onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
            </tbody>
        </table>
        <a href="add_komputer.php" class="btn btn-primary btn-tambah-table" /> Tambah Pesanan Komputer </a>
    </div>
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
        alert("Terima kasih Pesanan Diterima 😉 ");
        return true;
    }
</script>