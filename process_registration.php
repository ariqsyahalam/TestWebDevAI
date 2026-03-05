<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";  // Ganti dengan username MySQL kamu
$password = "";      // Ganti dengan password MySQL kamu
$dbname = "sanbercode_courses";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$pilihanKelas = $_POST['pilihanKelas'];
$nama = $_POST['nama'];
$nomorWhatsapp = $_POST['nomorWhatsapp'];

// Membuat query untuk menyimpan data
$sql = "INSERT INTO registrations (pilihan_kelas, nama, nomor_whatsapp)
        VALUES ('$pilihanKelas', '$nama', '$nomorWhatsapp')";

// Eksekusi query dan cek apakah data berhasil disimpan
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan. <a href='index.html'>Kembali ke beranda</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>