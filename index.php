<?php

require 'vendor/autoload.php';

// $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Tanda Terima Berkas.docx');
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Cetak Izin SIUP.docx');

$templateProcessor->setValues([
    'no_1' => '01',
    'no_2' => 'VII',
    'no_3' => '2020',
    'no_4' => '98988989',
    'no_5' => '9090',
    'nama_perusahaan' => 'perusahbhvhuv uhbhuvbhvbh',
    'alamat_perusahaan' => 'jk jn n nj j jjbbjbnjbnjbjbnjk jnjkj jnjjbj jbjbjbjjio',
    'nomor_telp' => '8676768768767578 6796866',
    'nama_pimpinan' => 'i gusti agung ry jentyu',
    'alamat_pimpinan' => 'br buana kubu',
    'npwp' => '998990898908975656757',
    'nilai_modal' => 'uwuq8u2089u39u198u',
    'kegiatan_usaha' => 'jeijinaifninisnv',
    'kelembagaan' => 'kokkokokoko',
    'bidang_usaha' => 'vgvgvghvhvhvv hvhjvbhjv hvhjv',
    'kode_kbli' => '09898989887898',
    'jenis_barang' => 'barang 1',





]);

// header("Content-Disposition: attachment; filename=Tanda Terima Berkas-signed.docx");

// $templateProcessor->saveAs('php://output');
$templateProcessor->saveAs('./assets/uploads/file_surat/cetak izin siup updates.docx');
