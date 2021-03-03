<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12"> 
            
            <br/>
            <h3>Edit Data User</h3>
        
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from user where id='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <form form method="post" action="update-user.php">
                <div class="form-group ">
                    <label for="nip">NIP</label>
                    <input type="number" name="nip" value="<?php echo $d['nip']; ?>" >
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" value="<?php echo $d['email']; ?>">
                    <small id="emailHelp" class="form-text text-muted">Pastikan menggunakan email yang valid</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" value="<?php echo $d['password']; ?>">
                    <small id="passHelp" class="form-text text-muted">Password terdiri dari 8 karakter huruf dan terdapat angka</small>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
                </form>

                <?php 
            }
            ?>

            </div>
        </div>
    </div>
</div>