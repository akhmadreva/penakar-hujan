<?
include "koneksi.php";
?>

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <table class='table'>

            <tr>
                <th>No.</th>
                <th>Pengamat</th>
                <th>Stasiun</th>
                <th>Data Hujan</th>
                <th>Aksi</th>
                <th></th>
            </tr>

            <?php
            if(mysqli_num_rows($result) > 0) 
            {
                $no = 0;
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $no++;
                    
                    echo "<tr>
                        <td>".$no."</td>
                        <td>".$row['nip']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['nama_stasiun']."</td>
                        <td>".$row['tanggal']."</td>
                        <td><a  class=' btn btn-primary fa fa-pencil' href='?page=form_edit_objek_wisata&id=".$row['id_objek_wisata']."'>Edit</a></td>
                        <td><a class='btn btn-danger fa fa-trash' href='?page=hapus_objek_wisata&id=".$row['id_objek_wisata']."'>Hapus</a></td>
                        </tr>";
                }
            }
            ?>

            </table>
        </div>
        </div>
    </div>
</div>