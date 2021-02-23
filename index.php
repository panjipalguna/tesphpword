<?php

require 'vendor/autoload.php';

// $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Tanda Terima Berkas.docx');
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Cetak Izin TDP.docx');

// $templateProcessor->setValues([
//     'no_1' => '01',
//     'no_2' => 'VII',
//     'no_3' => '2020',
//     'no_4' => '98988989',
//     'no_5' => '9090',
//     'nama_perusahaan' => 'perusahbhvhuv uhbhuvbhvbh',
//     'alamat_perusahaan' => 'jk jn n nj j jjbbjbnjbnjbjbnjk jnjkj jnjjbj jbjbjbjjio',
//     'nomor_telp' => '8676768768767578 6796866',
//     'nama_pimpinan' => 'i gusti agung ry jentyu',
//     'alamat_pimpinan' => 'br buana kubu',
//     'npwp' => '998990898908975656757',
//     'nilai_modal' => 'uwuq8u2089u39u198u',
//     'kegiatan_usaha' => 'jeijinaifninisnv',
//     'kelembagaan' => 'kokkokokoko',
//     'bidang_usaha' => 'vgvgvghvhvhvv hvhjvbhjv hvhjv',
//     'kode_kbli' => '09898989887898',
//     'jenis_barang' => 'barang 1',


    $templateProcessor->setValues([
        'nomor_tdp' => '01',
        'tanggal_tanda_daftar_perusahaan' => '02-01-2020',
        'nama_perusahaan' => 'PT Jaya Maju Sehat Santosa',
        'nama_pengurus' => 'I Made Tampan dan Berani',
        'alamat_perusahaan' => 'Jl. Gunung Sari IV No.9 Banjar Buaba Kubu',
        'npwp' => '8409189075787872',
        'no_telepon' => '082146149373',
        'faks' => '(0361)1908490',
        'kegiatan_usaha_pokok' => 'Perdagangan Sayur dan Buah',
        'kbli' => '5401',
   
]);

$templateProcessor->setValues([
    'nomor_tdp' => '01',
    'tanggal_tanda_daftar_perusahaan' => '02-01-2020',
    'nama_perusahaan' => 'PT Jaya Maju Sehat Santosa',
    'nama_pengurus' => 'I Made Tampan dan Berani',
    'alamat_perusahaan' => 'Jl. Gunung Sari IV No.9 Banjar Buaba Kubu',
    'npwp' => '8409189075787872',
    'no_telepon' => '082146149373',
    'faks' => '(0361)1908490',
    'kegiatan_usaha_pokok' => 'Perdagangan Sayur dan Buah',
    'kbli' => '5401',

]);

// header("Content-Disposition: attachment; filename=Tanda Terima Berkas-signed.docx");

// $templateProcessor->saveAs('php://output');
$templateProcessor->saveAs('./assets/uploads/file_surat/Cetak Izin TDP_update.docx');
