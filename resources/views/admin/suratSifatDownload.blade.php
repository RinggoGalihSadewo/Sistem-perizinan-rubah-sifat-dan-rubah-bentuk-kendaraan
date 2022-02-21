<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Surat Perizinan Rubah Sifat</title>
  <link href="/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/ruang-admin.min.css" rel="stylesheet">

  <style type="text/css">
    .surat{
        background-color: white;
        width: 100%;
        height: auto;
        padding: 0px;
        font-family: 'times new roman';
        color: black;
        
    }

    .paraf{
      margin: 2% auto;
      width: auto;
      height: 230px;
      position: relative;
    }

    .qr{
      position: absolute;
      left: 20%;
      bottom: 35%;
    }

    .subParaf{
      position: absolute;
      right: 10%;
      bottom: 0;
    }
  </style>

</head>

<body id="page-top">

    <div class="surat">
 
        <div class="kop">
          <img src="{{ storage_path('app/public/kop.PNG') }}" width="100%">
        </div>

        <center>
        <h4><u>SURAT KETERANGAN</u></h4>
        <p>Nomor : {{isset($data->qrSifat['no_surat']) ? $data->qrSifat['no_surat'] : ''}}</p>
        </center>

        <table border="0" cellpadding="" style="text-align: justify;"> 
          <tr>
            <td>Membaca</td>
            <td>:</td>
            <td>Permohonan dari <b>Sdr. {{$data->nama_pemilik}}</b> Tanggal {{$data->created_at}}. yang beralamat di {{$data->alamat}}</td>
          </tr>
          <br>
          <tr>
            <td>Menimbang</td>
            <td>:</td>
            <td>Bahwa berdasarkan hasil penelitian/check fisik kendaraan tersebut memenuhi persyaratan untuk dilakukan <b>Perubahan Sifat.</b></td>
          </tr>
          <tr>
            <td>Mengigat</td>
            <td>:</td>
            <td>
              <ol start="1">
                <li>Undang-Undang No. 22 Tahun 2009 Tentang Lalu Lintas dan Angkutan Jalan;</li>
                <li>Peraturan Pemerintah No. 55 Tahun 2012 Tentang Kendaraan dan Pengemudi;</li>
                <li>Peraturan Pemerintah No. 74 Tahun 2014 Tentang Angkutan Jalan;</li>
                <li>Peraturan Menteri Perhubungan No. PM. 60 Tahun 2019 tentang Penyelenggaraan Angkutan Barang dengan Kendaraan Bermotor di Jalan;</li>
                <li>Peraturan Menteri Perhubungan No. PM. 19 Tahun 2021 Tentang Pengujian Berkala Kendaraan Bermotor</li>
                <li>Keputusan Menteri Perhubungan No. PM. 33 Tahun 2018 Tentang Pengujian Tipe Kendaraan Bermotor;</li>
                <li>Peraturan Gubernur Lampung No. 36 Tahun 2007 Tentang Ketentuan Perubahan Sifat dan Perubahan Bentuk Kendaraan Bermotor</li>
              </ol>
            </td>
          </tr>
          <tr>
            <td>Menerangkan</td>
            <td>:</td>
            <td>Memberikan Surat Keterangan Perubahan Sifat dari <b>{{$data->jenis_perubahan}}, Sdr. {{$data->nama_pemilik}}</b> yang beralamat di {{$data->alamat}}, dengan data kendaraan sebagai berikut:
            <br><br>
              <table>
                <tr>
                    <td>-</td>
                    <td>
                      Nomor Kendaraan
                    </td>
                    <td>:</td>
                    <td>{{$data->nomor_kendaraan}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Nama Pemilik
                    </td>
                    <td>:</td>
                    <td>{{$data->nama_pemilik}}</td>
                </tr>                     
                <tr>
                    <td>-</td>
                    <td>
                      Alamat Pemilik
                    </td>
                    <td>:</td>
                    <td>{{$data->alamat}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Merk/Type
                    </td>
                    <td>:</td>
                    <td>{{$data->merk}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Jenis
                    </td>
                    <td>:</td>
                    <td>{{$data->jenis}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Model
                    </td>
                    <td>:</td>
                    <td>{{$data->model}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Warna
                    </td>
                    <td>:</td>
                    <td>{{$data->warna}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Tahun Pembuatan
                    </td>
                    <td>:</td>
                    <td>{{$data->tahun}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Isi Silinder
                    </td>
                    <td>:</td>
                    <td>{{$data->isi_silinder}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      No. Landasan/Rangka
                    </td>
                    <td>:</td>
                    <td>{{$data->no_landasan}}</td>
                </tr>                        
                <tr>
                    <td>-</td>
                    <td>
                      No.Mesin
                    </td>
                    <td>:</td>
                    <td>{{$data->no_mesin}}</td>
                </tr>  
                <tr>
                    <td>-</td>
                    <td>
                      Nomor Kendaraan
                    </td>
                    <td>:</td>
                    <td>{{$data->no_bpkb}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Masa Berlaku s/d
                    </td>
                    <td>:</td>
                    <td style="color:red;">REVISI</td>
                </tr>
              </table>
            </td>
          </tr>
          <br>
          <tr>
            <td></td>
            <td></td>
            <td>Catatan : Surat Keterangan ini hanya berlaku untuk Perpanjangan Masa Berlaku STNK Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</td>
          </tr>
        </table>

        <div class="paraf d-flex" style="text-align: justify;"> 
          <div class="qr">
            <img src="data:image/png;base64, {{$qr}}">
          </div>
          <div class="subParaf">
            <table border="0" cellpadding="5">
              <tr>
                <td>DIKELUARKAN DI</td>
                <td>:</td>
                <td>BANDAR LAMPUNG</td>
              </tr>
              <tr>
                <td>TANGGAL</td>
                <td>:</td>
                <td>{{$data->created_at}}</td>
              </tr>
              <tr>
                <td>KEPALA DINAS</td>
              </tr>
              <tr>
              </tr>
            </table>
            <br>
            <br>
            <div style="margin-left: 1%;">
              <b><u>BAMBANG SUMBOGO, SE,. MM</u></b>
              <p>
                Pembina Utama Muda
                <br>
                NIP. 19710422 199503 1 002
              </p>
              
            </div>
          </div>
        </div>   
      
    </div>

</body>

</html>