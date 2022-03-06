function update(){
    var select = document.getElementById('jenis');
    var value = select.options[select.selectedIndex].value;

    if(value === "Perubahan Sifat (HITAM)"){
        document.getElementById('br').innerHTML = "";
        document.getElementById('namaPemilikLama').innerHTML = "";
        document.getElementById('namaPemilikBaru').innerHTML = "";
        document.getElementById('ktp').innerHTML = "";
        document.getElementById('br2').innerHTML = "";
        document.getElementById('br3').innerHTML = "";
        document.getElementById('br4').innerHTML = "";
        document.getElementById('notaris').innerHTML = "";
        document.getElementById('namaPemilik').innerHTML = "<div class='col-sm-6'>Nama Pemilik</div><div class='col-sm-6'><input type='text' class='form-control' id='namePemilik' name='namaPemilik' ></div>";
        document.getElementById('kbli').innerHTML = "";
    }

    else if(value === "Perubahan Sifat (HITAM) BBN"){
        
        document.getElementById('namaPemilik').innerHTML = "";
        document.getElementById('namaPemilikLama').innerHTML = "<div class='col-sm-6'>Nama Pemilik Lama</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikLama'></div>";
        document.getElementById('br').innerHTML = "<br>";
        document.getElementById('br2').innerHTML = "<br>";
        document.getElementById('br3').innerHTML = "";
        document.getElementById('br4').innerHTML = "";
        document.getElementById('namaPemilikBaru').innerHTML = "<div class='col-sm-6'>Nama Pemilik Baru</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikBaru'></div>";
        document.getElementById('ktp').innerHTML = "                            <div class='col-sm-6'>Foto FC. KTP</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='fcKTP'></div>";
        document.getElementById('notaris').innerHTML = "";
        document.getElementById('kbli').innerHTML = "";
    }

    else if (value === "Penetapan Sifat (KUNING)"){
        document.getElementById('namaPemilik').innerHTML = "";
        document.getElementById('ktp').innerHTML = "";
        document.getElementById('namaPemilikLama').innerHTML = "<div class='col-sm-6'>Nama Pemilik Lama</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikLama'></div>";
        document.getElementById('br').innerHTML = "<br>";
        document.getElementById('br2').innerHTML = "";
        document.getElementById('namaPemilikBaru').innerHTML = "<div class='col-sm-6'>Nama Pemilik Baru</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikBaru'></div>";
        document.getElementById('notaris').innerHTML = "<div class='col-sm-6'>Akte Notaris</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='akteNotaris' value='{{old('akteNotaris')}}'></div>";
        document.getElementById('kbli').innerHTML = "<div class='col-sm-6'>NIB / SIUP / TDP dengan KBLI yang sudah ditentukan</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='kbli'></div>";
        document.getElementById('br3').innerHTML = "<br>";
        document.getElementById('br4').innerHTML = "<br>";
    }
    else if (value === "Perubahan Sifat (HITAM KE KUNING)"){
        document.getElementById('namaPemilik').innerHTML = "";
        document.getElementById('ktp').innerHTML = "";
        document.getElementById('namaPemilikLama').innerHTML = "<div class='col-sm-6'>Nama Pemilik Lama</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikLama'></div>";
        document.getElementById('br').innerHTML = "<br>";
        document.getElementById('br2').innerHTML = "";
        document.getElementById('namaPemilikBaru').innerHTML = "<div class='col-sm-6'>Nama Pemilik Baru</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikBaru'></div>";
        document.getElementById('notaris').innerHTML = "<div class='col-sm-6'>Akte Notaris</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='akteNotaris' value='{{old('akteNotaris')}}'></div>";
        document.getElementById('kbli').innerHTML = "<div class='col-sm-6'>NIB / SIUP / TDP dengan KBLI yang sudah ditentukan</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='kbli'></div>";  
        document.getElementById('br3').innerHTML = "<br>";    
        document.getElementById('br4').innerHTML = "<br>";       
    }   
}   
update();

function updateReload()
{
    var select = document.getElementById('jenis');
    var value = select.options[select.selectedIndex].value="ss";
}