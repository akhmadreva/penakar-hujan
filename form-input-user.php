<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
				<div class="card-header">
					<a href="index.php">Kembali</a> |
					<a href="index.php?page=data-user">Lihat Semua Data</a>
				</div>


            <h3>Input Data User Baru</h3>

			<form action="input-user.php" method="post">
                <div class="form-group ">
                    <label for="nip">NIP</label>
                    <input type="number" name="nip">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" >
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email">
                    <small id="emailHelp" class="form-text text-muted">Pastikan menggunakan email yang valid</small>
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
    </div>
</div>