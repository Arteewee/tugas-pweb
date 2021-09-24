<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Project PWEB</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="btn btn-outline-primary" href="<?=base_url('')?>">Home</a>
	</nav>
	<a class="btn btn-outline-primary" href="<?=base_url('pweb/logout')?>">Sign Out</a>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center">Tambah Data</div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							 <label for="jenis_mbl">Jenis Mobil</label>
							 <select type ="text" class="form-control" name="jenis_mbl" id="jenis_mbl" required name="jenis_mbl">
							 <option placeholder="Masukan jenis kendaraan"></option>
					         <option value="sedan">sedan</option>
					         <option value="SUV">SUV</option>
					         <option value="MVP">MVP</option>
					         <option value="cross-over">cross-over</option>
					         </select>
					         <div class="invalid-feedback">
								Anda belum memasukan Nama Kendaraan.
							</div>
      					</div>
						<div class="form-group">
							<label for="nk">Nama Kendaraan</label>
							<input type="nk" class="form-control" name="nk" id="nk" placeholder="Masukan Nama Kendaraan" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda Belum Memasukan Nama Kendaraan.
							</div>
						</div>
						<div class="form-group">
							<label for="np">Nama Pemilik kendaraan</label>
							<input type="np" class="form-control" name="np" id="np" placeholder="Masukan Warna Kendaraan" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda Belum Memasukan Warna Kendaraan.
							</div>
						</div>
						<div class="form-group">
							<label for="pn">Plat Nomor Kendaraan</label>
							<input type="pn" class="form-control" name="pn" id="pn" placeholder="Masukan Plat Nomor Kendaraan" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda Belum Memasukan Plat Nomor Kendaraan.
							</div>
						</div>

						<div class="form-group">
							<label for="ka">KM Kendaraan</label>
							<input type="ka" class="form-control" name="ka" id="ka" placeholder="Masukan KM Kendaraan" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda Belum Memasukan KM Kendaraan.
							</div>
						</div>
						<div class="form-group">
							<label for="tgl1">Tanggal Penggantian Oli</label>
							<input type="date" class="form-control" name="tgl1" id="tgl1" placeholder="Masukan Tanggal Penggantian Oli" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda Belum Memasukan Tanggal Penggantian Oli.
							</div>
						<div class="form-group">
							<label for="tgl2">Tanggal Penggantian Oli Selanjutnya</label>
							<input type="date" class="form-control" name="tgl2" id="tgl2" placeholder="Masukan Tanggal Penggantian Oli Selanjutnya" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan Tanggal Penggantian Oli Selanjutnya.
							</div>	
						     <div class="form-group">

                                    <label for="exampleFormControlInput1"></label><br>

                                 <label for="exampleFormControlSelect1">Gambar Kendaraan</label>

                                    <input type="file" name="gbr" accept=".jpg,.png,.jpeg">

                                  </div>
							<br>
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="tambah">Tambah Data</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>