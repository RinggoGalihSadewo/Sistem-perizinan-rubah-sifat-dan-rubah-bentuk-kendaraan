function update(){
    var select = document.getElementById('jenis');
    var value = select.options[select.selectedIndex].value;
    if(value === "Perubahan Sifat (HITAM)"){
        document.getElementById('iKtp').value = "";
        document.getElementById('iNotaris').value = "";
        document.getElementById('iKbli').value = "";
        document.getElementById('br').innerHTML = "";
        document.getElementById('br2').innerHTML = "";
        document.getElementById('br3').innerHTML = "";
        document.getElementById('br4').innerHTML = "";
        document.getElementById('namaPemilik').style.display = "flex";
        document.getElementById('namaPemilikLama').style.display = "none";
        document.getElementById('ktp').style.display = "none";
        document.getElementById('namaPemilikBaru').style.display = "none";
        document.getElementById('notaris').style.display = "none";
        document.getElementById('kbli').style.display = "none";
        document.getElementById('iNamaPemilik').value = "";
        document.getElementById('iNamaPemilikLama').value = "-";
        document.getElementById('iNamaPemilikBaru').value = "-";
        document.getElementById('iKtp').value = "-";
        document.getElementById('iNotaris').value = "-";
        document.getElementById('iKbli').value = "-";
    }

    else if(value === "Perubahan Sifat (HITAM) BBN"){
        document.getElementById('iNamaPemilikLama').value = "";
        document.getElementById('iNamaPemilikBaru').value = "";
        document.getElementById('iNamaPemilik').value = "";
        document.getElementById('iNotaris').value = "";
        document.getElementById('iKbli').value = "";
        document.getElementById('br').innerHTML = "<br>";
        document.getElementById('br2').innerHTML = "<br>";
        document.getElementById('br3').innerHTML = "";
        document.getElementById('br4').innerHTML = "";
        document.getElementById('namaPemilik').style.display = "none";
        document.getElementById('namaPemilikLama').style.display = "flex";
        document.getElementById('namaPemilikBaru').style.display = "flex";
        document.getElementById('ktp').style.display = "flex";
        document.getElementById('notaris').style.display = "none";
        document.getElementById('kbli').style.display = "none";
        document.getElementById('iNamaPemilik').value = "-";
        document.getElementById('iNamaPemilikLama').value = "";
        document.getElementById('iNamaPemilikBaru').value = "";
        document.getElementById('iKtp').value = "";
        document.getElementById('iNotaris').value = "-";
        document.getElementById('iKbli').value = "-";
    }

    else if (value === "Penetapan Sifat (KUNING)"){
        document.getElementById('br').innerHTML = "<br>";
        document.getElementById('br2').innerHTML = "";
        document.getElementById('br3').innerHTML = "<br>";
        document.getElementById('br4').innerHTML = "<br>";
        document.getElementById('namaPemilik').style.display = "none";
        document.getElementById('namaPemilikLama').style.display = "flex";
        document.getElementById('namaPemilikBaru').style.display = "flex";
        document.getElementById('ktp').style.display = "none";
        document.getElementById('notaris').style.display = "flex";
        document.getElementById('kbli').style.display = "flex";
        document.getElementById('iNamaPemilik').value = "-";
        document.getElementById('iNamaPemilikLama').value = "";
        document.getElementById('iNamaPemilikBaru').value = "";
        document.getElementById('iKtp').value = "-";
        document.getElementById('iNotaris').value = "";
        document.getElementById('iKbli').value = "";
    }
    else if (value === "Perubahan Sifat (HITAM KE KUNING)"){
        document.getElementById('iNamaPemilik').value = "";
        document.getElementById('iKtp').value = "";
        document.getElementById('br').innerHTML = "<br>";
        document.getElementById('br2').innerHTML = "";
        document.getElementById('br3').innerHTML = "<br>";
        document.getElementById('br4').innerHTML = "<br>";
        document.getElementById('namaPemilik').style.display = "none";
        document.getElementById('namaPemilikLama').style.display = "flex";
        document.getElementById('namaPemilikBaru').style.display = "flex";
        document.getElementById('ktp').style.display = "none";
        document.getElementById('notaris').style.display = "flex";
        document.getElementById('kbli').style.display = "flex";  
        document.getElementById('iNamaPemilik').value = "-";
        document.getElementById('iNamaPemilikLama').value = "";
        document.getElementById('iNamaPemilikBaru').value = "";
        document.getElementById('iKtp').value = "-";
        document.getElementById('iNotaris').value = "";
        document.getElementById('iKbli').value = "";
    }
}   
update()