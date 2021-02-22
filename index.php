<?php

require 'vendor/autoload.php';

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Tanda Terima Berkas.docx');

$templateProcessor->setValues([
    'nomor' => '212/SKD/VII/2019',
    'nama' => 'I Gusti Agung Ngurah Panji Palguna',
    'alamat' => 'Gunung Sari IV No.9 Banjar Buana Kubu Negara Indonesia Planet Bumi Bhur Loka Swah Loka Bwah Loka',
    'nohp' => '082146149373',
    'jenis_izin' => 'Izin Pembuatan Apotek',
    'lokasi' => 'Denpasar jdkjnkflnkn kljskknknfkn kakdnknm aknkfnknkn ajnfjnjdnnxnjkndjkn jndnjksanklnfklnamnmnmnwklenjnn mkmk krklmk kewlmklm kmkrmekwm kmekwmkm kwemkmk kmeklmkmxkkm kekmk',
    'jenis_pengajuan' => 'pengajuan hjewkfbhbhfwiduhkbsdhubghkjb hubewiufbuibdiufsb hjbgwiqdsugauibjkdsbv ueqfdsuaiugvuijb nmbvdshgvuibhekjqsda hcvyughubdhvduigewuidbviu terbatas sekolah',

]);

// header("Content-Disposition: attachment; filename=Tanda Terima Berkas-signed.docx");

// $templateProcessor->saveAs('php://output');
$templateProcessor->saveAs('./assets/uploads/file_surat/Tanda_Terima_Berkas-signed1.pdf');
