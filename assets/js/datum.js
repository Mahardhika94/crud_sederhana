
function pilih(fak){
var fak = document.getElementById('add_fak').value;

if(fak  =='FST'){
document.getElementById('add_prod').innerHTML ="<option>Pilih Prodi</option><option>Teknik Informatika</option><option>Teknik Elektro</option><option>Sistem Informasi</option><option>Manajemen Informatika</option>";

}
else if( fak =='FIKES'){
document.getElementById('add_prod').innerHTML ="<option>Pilih Prodi</option><option>Fisioterapi</option><option>Keperawatan</option><option>NERS</option><option>D-III Kebidanan</option><option>Ilmu Gizi</option><option>Kesehatan Masyarakat</option><option>Bidan Pendidik</option>";
}else if(fak =='FISE'){
document.getElementById('add_prod').innerHTML ="<option>Pilih Prodi</option><option>Akuntansi</option><option>Hubungan Internasional</option><option>Sastra Inggris</option><option>Ilmu Komunikasi</option>";
}else{
document.getElementById('add_prod').innerHTML="<option>Pilih Prodi</option>";
}
}

function pilih2(fak){
var fak = document.getElementById('up_fak').value;

if(fak  =='FST'){
document.getElementById('up_prod').innerHTML ="<option>Pilih Prodi</option><option>Teknik Informatika</option><option>Teknik Elektro</option><option>Sistem Informasi</option><option>Manajemen Informatika</option>";

}
else if( fak =='FIKES'){
document.getElementById('up_prod').innerHTML ="<option>Pilih Prodi</option><option>Fisioterapi</option><option>Keperawatan</option><option>NERS</option><option>D-III Kebidanan</option><option>Ilmu Gizi</option><option>Kesehatan Masyarakat</option><option>Bidan Pendidik</option>";
}else if(fak =='FISE'){
document.getElementById('up_prod').innerHTML ="<option>Pilih Prodi</option><option>Akuntansi</option><option>Hubungan Internasional</option><option>Sastra Inggris</option><option>Ilmu Komunikasi</option>";
}else{
document.getElementById('up_prod').innerHTML="<option>Pilih Prodi</option>";
}
}
