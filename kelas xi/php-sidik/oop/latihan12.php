<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Asal Sekolah</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container shadow-lg mt-5">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <p class="card-text">Apabila anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status Pendaftaran"</p>
                    <div class="d-grip gap-4">
                        <a href="#" class="btn btn-primary">Cek Status Pendaftaran</a>
                        <a href="#" class="btn btn-warning">Kembali ke Home</a>
                        <a href="#" class="btn btn-danger">Situs Resmi SMK ASSALAAM</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container shadow-lg mt-5">
            <div class="card border-0">
                <div class="card-body">
                    <h3 class="mb-4">Data Diri Calon Pendaftar </h3>
                    <form action="latihan12_2.php" method="post">
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan </label>
                            <select class="form-control" name="jurusan" required>
                                <option selected>Pilih Jurusan</option>
                                <option value="TKRO">TKRO (MOBIL)</option>
                                <option value="TBSM">TBSM (SEPEDA MOTOR)</option>
                                <option value="RPL">RPL (KOMPUTER)</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap </label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="jeniskelamin" class="form-label" >Jenis Kelamin </label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" value="Laki-laki">
                                    <label class="form-check-label" for="lakiLaki">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" value="Perempuan">
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tempatLahir" class="form-label">Tempat Lahir </label>
                            <input type="text" class="form-control" id="" name="tempatlahir" placeholder="Tempat Lahir" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir </label>
                            <input type="date" class="form-control" name="tanggallahir" id="" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor HP siswa yang bisa dihubungi </label>
                            <input type="number" class="form-control" name="nomorhp" id="" placeholder="HP" required>
                        </div>
                        
                        <div class="mb-5">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" class="form-control" name="email" id="" placeholder="Email" required>
                            <small class="form-text text-muted">
                                Setelah melakukan pendaftaran, anda akan menerima softcopy form pendaftaran yang kami kirimkan ke alamat email anda.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container shadow-lg mt-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h3>Alamat Calon Pendaftar</h3>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi </label>
                            <select class="form-control" name="provinsi" id="">
                                <option selected>Pilih Provinsi</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Sumatera Utara">Sumatera Utara</option>
                                <option value="Sumatera Barat">Sumatera Barat</option>
                                <option value="Riau">Riau</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="Bali">Bali</option>
                                <option value="Papua">Papua</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kabkota" class="form-label">Kab / Kota: </label>
                            <select class="form-control" name="kabkota" id="">
                                <option selected>Pilih Kota</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Bandung Barat">Bandung Barat</option>
                                <option value="Bekasi">Bekasi</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Ciamis">Ciamis</option>
                                <option value="Cianjur">Cianjur</option>
                                <option value="Cimahi">Cimahi</option>
                                <option value="Cirebon">Cirebon</option>
                                <option value="Garut">Garut</option>
                                <option value="Indramayu">Indramayu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan </label>
                            <select class="form-control" name="kecamatan" id="">
                                <option selected>Pilih Kecamatan</option>
                                <option value="Andir">Andir</option>
                                <option value="Antapani">Antapani</option>
                                <option value="Arcamanik">Arcamanik</option>
                                <option value="Astanaanyar">Astanaanyar</option>
                                <option value="Babakan Ciparay">Babakan Ciparay</option>
                                <option value="Bandung Kidul">Bandung Kidul</option>
                                <option value="Bandung Kulon">Bandung Kulon</option>
                                <option value="Bandung Wetan">Bandung Wetan</option>
                                <option value="Batununggal">Batununggal</option>
                                <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="desa" class="form-label">Desa / Kelurahan </label>
                            <select class="form-control" name="desa" id="">
                                <option selected>Pilih Desa/Kelurahan</option>
                                <option value="Ciburial">Ciburial</option>
                                <option value="Cileunyi">Cileunyi</option>
                                <option value="Ciparay">Ciparay</option>
                                <option value="Margaluyu">Margaluyu</option>
                                <option value="Mekarsari">Mekarsari</option>
                                <option value="Cangkuang">Cangkuang</option>
                                <option value="Pangalengan">Pangalengan</option>
                                <option value="Rancamanyar">Rancamanyar</option>
                                <option value="Sukamaju">Sukamaju</option>
                                <option value="Sukasari">Sukasari</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat </label>
                            <textarea class="form-control" name="alamat" id="" rows="3" placeholder="Alamat"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kodepos" class="form-label">Kode Pos</label>
                            <input type="number" class="form-control" name="kodepos" id="" placeholder="Kode Pos">
                        </div>
                    </div></div>
                </div>
            </div>
            
            <div class="container shadow-lg mt-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="mb-4">Data Asal Sekolah</h2>
                        <div class="form-group">
                            <label for="namasekolah">Nama Asal Sekolah</label>
                            <input type="text" class="form-control" name="namasekolah" id="" placeholder="Nama Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="alamatSekolah">Alamat Sekolah</label>
                            <textarea class="form-control" name="alamatsekolah" id="" rows="3" placeholder="Alamat Lengkap Asal Sekolah"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="container shadow-lg mt-5">
                <div class="card border-0">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Data Orang Tua</h4> 
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>Nama Lengkap Ayah / Ibu / Wali</span>
                                            </div>
                                            <div class="col-md-8 controls">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <select name="status" class="form-control select2">
                                                            <option value="ayah">Ayah</option>
                                                            <option value="ibu">Ibu</option>
                                                            <option value="wali">Wali</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="namaorangtua" placeholder="Nama Lengkap" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>Pekerjaan Ayah / Ibu / Wali </span>
                                            </div>
                                            <div class="col-md-8 controls">
                                                <input type="text" class="form-control" name="pekerjaanorangtua" placeholder="Pekerjaan" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>Nomor HP yang bisa dihubungi </span>
                                            </div>
                                            <div class="col-md-8 controls">
                                                <input type="number" class="form-control" name="hporangtua" placeholder="Nomor HP" required="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>Alamat Lengkap </span>
                                            </div>
                                            <div class="col-md-8 controls">
                                                <textarea name="alamatorangtua" class="form-control" rows="3" required="" placeholder="Alamat Lengkap"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light" name="proses" id="">Simpan &amp; Daftar</button>
                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    