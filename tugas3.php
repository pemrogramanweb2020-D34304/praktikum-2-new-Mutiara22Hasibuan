<?php
if(isset($_POST['nama'])){

$nama = $_POST['nama'];
$user = array(
    array(
        'nama'              => 'Arsene Lupin',
        'nik'               => '1234',
        'jenis_kelamin'     => 'male',
        'tgl_lahir'         => '1902-03-23'),
    array(
        'nama'              => 'Sherlock Holmes',
        'nik'               => '4321',
        'jenis_kelamin'     => 'male',
        'tgl_lahir'         => '1876-08-16'),
    array(
        'nama'              => 'Irene Adler',
        'nik'               => '6789',
        'jenis_kelamin'     => 'female',
        'tgl_lahir'         => '1884-10-07'
   ),
);

$a=0;
$b=0;
foreach($user as $y){
if(strtoupper($y["nama"]) == strtoupper($nama)){
$a=1;
$b=$y;
} 
}
if($b){
echo "nama              : ".$b["nama"]."<br>";
echo "nik               : ".$b["nik"]."<br>";
echo "jenis kelamin     : ".$b["jenis_kelamin"]."<br>";
echo "tanggal lahir     : ".$b["tgl_lahir"]."<br>";
}
else{
    echo "[".$nama."] Failed";
}
}
?>