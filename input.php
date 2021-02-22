    <script>
        $(function() {
            $("#date").datepicker({
                autoclose:true,
                todayHighlight:true,
                format:'yyyy-mm-dd',
                language: 'id'
            });
        });
    </script>

<!-- Page Content -->
<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Sistem Informasi Input Data Curah Hujan Otomatis / Tipe Hellman Stasiun Klimatologi Semarang</h3>
                            </div>
                            <form action="?page=input_data.php" method="POST">
                            <div class="card-body">
                                <div class="row g-1">
                                    <div class="col-md-2">
                                        <label for="tanggal" class="form-label">Tanggal Laporan</label>
                                        <input type="text" class="form-control" id="date" name="tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
 
                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Dalam Menit</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="input5menit" class="form-label">5 Menit</label>
                                        <input type="text" class="form-control" placeholder="5 menit pertama" aria-label="5menit">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input10menit" class="form-label">10 Menit</label>
                                        <input type="text" class="form-control" placeholder="10 menit pertama" aria-label="10menit">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input15menit" class="form-label">15 Menit</label>
                                        <input type="text" class="form-control" placeholder="15 menit Pertama" aria-label="15menit">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input30menit" class="form-label">30 Menit</label>
                                        <input type="text" class="form-control" placeholder="30 menit pertama" aria-label="30menit">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input45menit" class="form-label">45 Menit</label>
                                        <input type="text" class="form-control" placeholder="45 menit pertama" aria-label="45menit">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input60menit" class="form-label">60 Menit</label>
                                        <input type="text" class="form-control" placeholder="60 menit pertama" aria-label="60menit">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input120menit" class="form-label">120 Menit</label>
                                        <input type="text" class="form-control" placeholder="120 menit Pertama" aria-label="120menit">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Dalam Jam</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="input3jam" class="form-label">3 Jam</label>
                                        <input type="text" class="form-control" placeholder="3 jam pertama" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input6jam" class="form-label">6 Jam</label>
                                        <input type="text" class="form-control" placeholder="6 jam pertama" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input12jam" class="form-label">12 Jam</label>
                                        <input type="text" class="form-control" placeholder="12 jam Pertama" aria-label="12jam">
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                        <br>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Per Jam</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">07 - 08</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">08 - 09</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">09 - 10</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">10 - 11</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">11 - 12</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">12 - 13</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">13 - 14</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">14 - 15</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">15 - 16</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">16 - 17</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">17 - 18</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">18 - 19</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">19 - 20</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">20 - 21</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">21 - 22</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">22 - 23</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">23 - 00</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">00 - 01</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">01 - 02</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">02 - 03</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">03 - 04</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">04 - 05</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">05 - 06</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">06 - 07</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                            <div class="col-6">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
