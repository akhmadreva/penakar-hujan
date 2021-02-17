<?
include 'koneksi.php';

$tanggal = $_POST['tanggal'];
$lima_mnt = $_POST['lima_mnt'];
$seuluh_mnt = $_POST['sepuluh_mnt'];
$limabelas_mnt = $_POST['limabelas_mnt'];
$tigapuluh_mnt = $_POST['tigapuluh_mnt'];
$empatlima_mnt = $_POST['empatlima_mnt'];
$enampuluh_mnt = $_POST['enampuluh_mnt'];
$srtsduaplh_mnt = $_POST['srtsduaplh_mnt'];
$tiga_jm = $_POST['tiga_jm'];
$enam_jm = $_POST['enam_jm'];
$duabelas_jm = $_POST['duabelas_jm'];

$tujuh_delapan = $_POST['tujuh_delapan'];
$delapan_sembilan = $_POST['delapan_sembilan'];
$sembilan_sepuluh = $_POST['sembilan_sepuluh'];
$sepuluh_sebelas = $_POST['sembilan_sepuluh'];
$sebelas_duabelas = $_POST['enam_jm'];
$duabelas_tigabelas = $_POST['enam_jm'];
$tigabelas_empatbelas = $_POST['enam_jm'];
$empatbelas_limabelas = $_POST['enam_jm'];
$limabelas_enambelas = $_POST['enam_jm'];
$enambelas_tujuhbelas = $_POST['enam_jm'];
$tujuhbelas_lapanbelas = $_POST['enam_jm'];
$lapanbelas_sembilanbelas = $_POST['enam_jm'];
$sembilanbelas_duapuluh = $_POST['sembilan_sepuluh'];
$duapuluh_duasatu = $_POST['enam_jm'];
$duasatu_duadua = $_POST['sembilan_sepuluh'];
$duadua_duatiga = $_POST['enam_jm'];
$duatiga_duaempat = $_POST['enam_jm'];
$duaempat_satu = $_POST['enam_jm'];
$satu_dua = $_POST['enam_jm'];
$dua_tiga = $_POST['enam_jm'];
$tiga_empat = $_POST['enam_jm'];
$empat_lima = $_POST['enam_jm'];
$lima_enam = $_POST['enam_jm'];
$enam_tujuh = $_POST['enam_jm'];
 
mysql_query("INSERT INTO data_hujan VALUES('','$nama','$alamat','$pekerjaan')");
 
header("location:index.php?pesan=input");
?>