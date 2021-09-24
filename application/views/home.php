<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <style>
   h3{
      text-align:center; }
   table { 
     border-collapse: collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:500px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      margin:auto; }
   table th {
    border: 1px solid black;
      font-weight:bold;
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      color:#ffffff;
      background-color:#1119BB;
  }
   table td {
    border: 1px solid black;
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      border-left: :5px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; 
   }
   </style>
</head>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Project PWEB</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="btn btn-outline-primary" href="<?=base_url('pweb/tambah')?>">Tambah Data Oli Kendaraan</a>
  </nav>
  <a class="btn btn-outline-primary" href="<?=base_url('pweb/logout')?>">Sign Out</a>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Data Kendaraan dan Oli Kendaraan</h1>
  <?php if($this->session->flashdata('pesan') == "Ditambah"): ?>
        <div class="alert alert-success" role="alert">
            Data Telah Berhasil Ditambah!
        </div>
  <?php elseif($this->session->flashdata('pesan') == "Diubah"): ?>
        <div class="alert alert-success" role="alert">
            Data Telah Berhasil Diubah!
        </div>
  <?php elseif($this->session->flashdata('pesan') == "Dihapus"): ?>
        <div class="alert alert-success" role="alert">
            Data Telah Berhasil Dihapus!
        </div>
  <?php endif?>
</div>

<div class="container">
  <table>
    <thead class="thead-light align-middle">
      <tr>
        <th  rowspan="1" class="align-middle text-center">No.</th>
        <th  rowspan="1" class="align-middle text-center">jenis mobil</th>
        <th  rowspan="1" class="align-middle text-center">nama kendaraan</th>
        <th  rowspan="1" class="align-middle text-center">nama pemilik kendaraan</th>
        <th  rowspan="1" class="align-middle text-center">plat nomor kendaraan</th>
        <th  rowspan="1" class="align-middle text-center">KM kendaraan awal</th>
        <th  rowspan="1" class="align-middle text-center">KM kendaraan selanjutnya</th>
        <th  rowspan="1" class="align-middle text-center">tanggal penggantian Oli</th>
        <th  rowspan="1" class="align-middle text-center">tanggal penggantian selanjutnya</th>
        <th  rowspan="1" class="align-middle text-center">Gambar Kendaraan</th>
         <th  rowspan="1" class="align-middle text-center">aksi</th>
         <th  rowspan="1" class="align-middle text-center">keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no =1;
      foreach ($nilai as $data) :?>
          <tr <?php if($data['keterangan'] == "harus ganti oli"){echo "class = 'bg-warning'";}?>>
            <td  class="align-middle text-center"><?=$no++?></td>
            <td  class="align-middle"><?=$data['jenis_mobil']?></td>
            <td  class="align-middle text-center"><?=$data['nama_kendaraan']?></td>
            <td class="align-middle text-center"><?=$data['nama_pemilik']?></td>
            <td class="align-middle text-center"><?=$data['plat_nomor']?></td>
            <td class="align-middle text-center"><?=$data['km_awal']?></td>
            <td class="align-middle text-center"><?=$data['km_akhir']?></td>
            <td class="align-middle text-center"><?=$data['tgl1']?></td>
            <td class="align-middle text-center"><?=$data['tgl2']?></td>
            <td><img src="<?= base_url('assets/gambar/'.$data['gbr']);?>" class="Rectangle" height="110" data-toggle="tooltip" title="Wildan Ahdian"></td>
            <td class="align-middle text-center"><?=$data['keterangan']?></td>
            <td class="align-middle text-center">
              <a href="<?=base_url('pweb/edit/'.$data['id_nilai'])?>" class="align-middle btn btn-success">Edit</a>
              <a href="<?=base_url('pweb/delete/'.$data['id_nilai'])?>" onclick="return confirm('Data ini akan dihapus. Anda Yakin?')" class="align-middle btn btn-danger">Hapus</a>
            </td>
          </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
</html>