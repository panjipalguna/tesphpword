<?php

require 'vendor/autoload.php';

// $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Tanda Terima Berkas.docx');
// $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Cetak Izin TDP.docx');
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Surat Tugas Cek Lapangan.docx');


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


//     $templateProcessor->setValues([
//         'nomor_tdp' => '01',
//         'tanggal_tanda_daftar_perusahaan' => '02-01-2020',
//         'nama_perusahaan' => 'PT Jaya Maju Sehat Santosa',
//         'nama_pengurus' => 'I Made Tampan dan Berani',
//         'alamat_perusahaan' => 'Jl. Gunung Sari IV No.9 Banjar Buaba Kubu',
//         'npwp' => '8409189075787872',
//         'no_telepon' => '082146149373',
//         'faks' => '(0361)1908490',
//         'kegiatan_usaha_pokok' => 'Perdagangan Sayur dan Buah',
//         'kbli' => '5401',
   
// ]);

    $templateProcessor->setValues([
        'no_perintahtugas'=>'019/VIII/2020/209092',
        'nama_perintahtugas_1' => 'Ni Wayan Wiantari',
        'nip_perintahtugas_1' => '1608561016',
        'pangkat_perintahtugas_1' => 'IV(A)',
        'jabatan_perintahtugas_1' => 'Kepala Bidang Penyelenggaraan E-Government',
        'nama_perintahtugas_2' => 'I Gusti Agung Ngurah Panji Palguna',
        'nip_perintahtugas_2' => '1608561051',
        'pangkat_perintahtugas_2' => 'III{A)',
        'jabatan_perintahtugas_2' => 'Kepala Bidang Penyelenggaraan Urusan Persandian',
        'nama_perintahtugas_3' => 'Ni Putu Gita Saraswati ',
        'nip_perintahtugas_3'=>'3928748972894787891',
        'pangkat_perintahtugas_3' => 'V',
        'jabatan_peringkattugas_3'=>'Sekretariat Daerah',
        
        'cek_lapangan_mulai'=>'09.00',
        'cek_lapangan_selesai'=>'14.00',

        'tanggal_surat_tugas_cek_lapangan'=>'21 Desember 2021'


]);

// header("Content-Disposition: attachment; filename=Tanda Terima Berkas-signed.docx");

// $templateProcessor->saveAs('php://output');
$templateProcessor->saveAs('./assets/uploads/file_surat/Surat Tugas Cek Lapangan_update.docx');
