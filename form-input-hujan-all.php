<head>
	<link rel="stylesheet" href="http://code.jquery.com/ ui/ 1.10.3/ themes/ smoothness/ jquery-ui.css" type="text/css" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">	
			
			<div class="card">
                <div class="card-header">
                    <h3>Input Data Intensitas Hujan</h3>
                </div>

                <div class="card-body">
                <form action="index.php?page=input-hujan-all" method="post">
                <div class="form-group ">
                    <label for="tanggal">Taggal mulai</label>
                    <input type="date" name="tanggal" id="date" class="form-control mr-2">
                </div>
                <div class="form-group">
                    <label for="lima_mnt">5 Menit</label>
                    <input type="decimal" name="lima_mnt">
                </div>
                <div class="form-group">
					<label for="sepuluh_mnt">10 Menit</label>
                    <input type="decimal" name="sepuluh_mnt">
                </div>
                <div class="form-group">
					<label for="lima_mnt">5 Menit</label>
                    <input type="decimal" name="lima_mnt">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password">
                    <small id="passHelp" class="form-text text-muted">Password terdiri dari 8 karakter huruf dan terdapat angka</small>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <small id="emailHelp" class="form-text text-muted">Pastikan Data Sudah Benar</small>
                </div>
				<br>
				<button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
                </form>

                </div>
                </div>
			
			<h1>Penakar Hujan Hellman</h1>

 
	<br/>
	<h3>Input data baru</h3>	
	<form action="index.php?page=input-hujan-all" method="post">	
		<table>	
			<tr>
				<td>Intensitas Hujan</td>					
			</tr>
			<tr>
				<td><label for="tanggal">Tanggal mulai </label></td>
        		<td><input type="date" name="tanggal" id="date" class="form-control mr-2"></td>
			</tr>
            <tr>
				<td>5 Menit</td>
				<td><input type="decimal" name="lima_mnt"></td>					
				<td>10 Menit</td>
				<td><input type="decimal" name="sepuluh_mnt"></td>					
				<td>15 Menit</td>
				<td><input type="decimal" name="limabelas_mnt"></td>					
				<td>30 Menit</td>
				<td><input type="decimal" name="tigapuluh_mnt"></td>
            </tr>
            <tr>					
				<td>45 Menit</td>
				<td><input type="decimal" name="empatlima_mnt"></td>					
				<td>60 Menit</td>
				<td><input type="decimal" name="enampuluh_mnt"></td>					
				<td>120 Menit</td>
				<td><input type="decimal" name="seratusduapuluh"></td>					
			</tr>
			<tr>
				<td>3 Jam</td>
				<td><input type="decimal" name="tiga_jm"></td>					
				<td>6 Jam</td>
				<td><input type="decimal" name="enam_jm"></td>					
				<td>12 Jam</td>
				<td><input type="decimal" name="duabelas_jm"></td>					
			</tr>
			<tr>
				<td>07-08</td>
				<td><input type="decimal" name="tujuh"></td>
				<td>08-09</td>
				<td><input type="decimal" name="delapan"></td>
				<td>09-10</td>
				<td><input type="decimal" name="sembilan"></td>
				<td>10-11</td>
				<td><input type="decimal" name="sepuluh"></td>
			</tr>
			<tr>
				<td>11-12</td>
				<td><input type="decimal" name="sebelas"></td>
				<td>12-13</td>
				<td><input type="decimal" name="duabelas"></td>
				<td>13-14</td>
				<td><input type="decimal" name="tigabelas"></td>
				<td>14-15</td>
				<td><input type="decimal" name="empatbelas"></td>
			</tr>
			<tr>
				<td>15-16</td>
				<td><input type="decimal" name="limabelas"></td>
				<td>16-17</td>
				<td><input type="decimal" name="enambelas"></td>
				<td>17-18</td>
				<td><input type="decimal" name="tujuhbelas"></td>
				<td>18-19</td>
				<td><input type="decimal" name="delapanbelas"></td>
			</tr>
			<tr>
				<td>19-20</td>
				<td><input type="decimal" name="sembilanbelas"></td>
				<td>20-21</td>
				<td><input type="decimal" name="duapuluh"></td>
				<td>21-22</td>
				<td><input type="decimal" name="duasatu"></td>
				<td>22-23</td>
				<td><input type="decimal" name="duadua"></td>
			</tr>
			<tr>
				<td>23-24</td>
				<td><input type="decimal" name="duatiga"></td>
				<td>24-01</td>
				<td><input type="decimal" name="duaempat"></td>
				<td>01-02</td>
				<td><input type="decimal" name="satu"></td>
				<td>02-03</td>
				<td><input type="decimal" name="dua"></td>
			</tr>
			<tr>
				<td>03-04</td>
				<td><input type="decimal" name="tiga"></td>
				<td>04-05</td>
				<td><input type="decimal" name="empat"></td>
				<td>05-06</td>
				<td><input type="decimal" name="lima"></td>
				<td>06-07</td>
				<td><input type="decimal" name="enam"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary"></td>					
			</tr>				
		</table>
	</form>
	</div>
	</div>
	</div>
	</div>
</body>