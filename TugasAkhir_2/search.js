// AMBIL ELEMEN
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('button-cari');
var konten = document.getElementById('content');

var url = window.location.href;

// Membuat objek URLSearchParams dari URL
// var params = new URLSearchParams(url);

// Mendapatkan nilai parameter id_pengguna
// var id_pengguna = params.get("id_pengguna");

// tombolCari.addEventListener('click', function(){
//     alert('berhasil');
// })

// var id_pengguna = document.getElementById("id_pengguna").value;

var queryString = window.location.search;
var params = new URLSearchParams(queryString);
var id_pengguna = params.get("id_pengguna");

keyword.addEventListener('keyup', function(){
    // console.log(keyword.value);

    //buat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200){
            // console.log(id_pengguna);
            // console.log(xhr.responseText);
            konten.innerHTML = xhr.responseText;
        }
    }

    //eksekusi
    xhr.open('GET', 'cari_user.php?keyword='+keyword.value+'&id_pengguna='+id_pengguna, true);

    xhr.send();




});