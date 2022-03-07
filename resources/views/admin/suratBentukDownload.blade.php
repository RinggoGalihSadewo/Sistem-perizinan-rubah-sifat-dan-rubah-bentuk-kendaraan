<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Surat Perizinan Rubah Bentuk</title>
  <link href="/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/ruang-admin.min.css" rel="stylesheet">

  <style type="text/css">
    .surat{
        background-color: white;
        width: 100%;
        font-size: 13px;
        height: auto;
        padding: 0px;
        font-family: 'times new roman';
        color: black;
        
    }

    .paraf{
      margin: -5px auto;
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
      top: 2%;
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
        <h4 style="font-size: 16px;"><u>SURAT KETERANGAN</u></h4>
        <p>Nomor : {{isset($data->qrBentuk['no_surat']) ? $data->qrBentuk['no_surat'] : ''}}</p>
        </center>

        <table border="0" cellpadding=""> 
          <tr>
            <td>Membaca</td>
            <td>:</td>
            <td>Permohonan Rubah Bentuk dari <b>Sdr. {{$data->nama_pemilik_baru}}</b> Tanggal {{$data->created_at}}. yang beralamat di {{$data->alamat}}</td>
          </tr>
          <tr>
            <td></td>
            <td>:</td>
            <td>Bahwa berdasarkan hasil penelitian fisik kendaraan dan memenuhi persyaratan untuk dilakukan <b>Perubahan Bentuk.</b></td>
          </tr>
          <tr>
            <td>Mengigat</td>
            <td>:</td>
            <td>
              <ol start="1">
                <li>Undang-Undang No. 22 Tahun 2009 Tentang Lalu Lintas dan Angkutan Jalan;</li>
                <li>Peraturan Pemerintah No. 55 Tahun 2012 Tentang Kendaraan dan Pengemudi;</li>
                <li>Keputusan Menteri Perhubungan No. 133 Tahun 2015 Tentang Pengujian Berkala Kendaraan Bermotor;</li>
                <li>Keputusan Menteri Perhubungan No. 33 Tahun 2018 Tentang Pengujian Tipe Kendaraan Bermotor;</li>
                <li>Peraturan Gubernur Lampung No. 36 Tahun 2007 Tentang Ketentuan Perubahan Sifat dan Perubahan Bentuk Kendaraan Bermotor</li>
              </ol>
            </td>
          </tr>
          <tr>
            <td>Menerangkan</td>
            <td>:</td>
            <td>Memberikan Surat Keterangan Perubahan Bentuk dari <b>{{$data->perubahan_bentuk}}</b> kepada <b>Sdr. {{$data->nama_pemilik_baru}}</b> yang beralamat di {{$data->alamat}}. Pemilik/Pemohon menjamin keselamatan (Safety) dari Kendaraan yang telah di Rubah Bentuk dengan data kendaraan sebagai berikut :
            <br>
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
                      Nama Pemilik Lama
                    </td>
                    <td>:</td>
                    <td>{{$data->nama_pemilik_lama}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Nama Pemilik Baru
                    </td>
                    <td>:</td>
                    <td>{{$data->nama_pemilik_baru}}</td>
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
                    <td>{{$data->jenis}} (sebelum dirubah)</td>
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
                      Volume Silinder
                    </td>
                    <td>:</td>
                    <td>{{$data->volume_silinder}}</td>
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
                      No. Mesin
                    </td>
                    <td>:</td>
                    <td>{{$data->no_mesin}}</td>
                </tr>  
                <tr>
                    <td>-</td>
                    <td>
                      No. BPKB
                    </td>
                    <td>:</td>
                    <td>{{$data->no_bpkb}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      No. Uji Kendaraan
                    </td>
                    <td>:</td>
                    <td>{{$data->no_uji}}</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>
                      Masa Berlaku S.K
                    </td>
                    <td>:</td>
                    <td>{{$data->qrBentuk->masa}}</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            @if($data->qrBentuk->catatan != "-")
            <td>Catatan : {{$data->qrBentuk->catatan}}, Surat Keterangan ini hanya berlaku untuk Perpanjangan Masa Berlaku STNK Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</td>
            @elseif($data->qrBentuk->catatan == "-")
            <td>Catatan : Surat Keterangan ini hanya berlaku untuk Perpanjangan Masa Berlaku STNK Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</td>
          @endif
          </tr>
        </table>

        <p>Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</p>

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