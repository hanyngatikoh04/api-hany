<?php
$data = array(
    'nama' => 'Hany Ngatikoh',
    'hobi' => 'Mahasiswa, Penulis, Fotografi',
    'tentang' => 'Saya adalah seorang mahasiswa kelas karyawan jurusan Informatika. Saat ini saya bekerja di Institut Teknologi Nasional Yogyakarta. Saya mempunyai hobby menulis cerpen, puisi dan juga artikel. Saya seorang yang ceria, suka travelling
    dan fotografi.',    
    'tgl_lahir' => '14 Oktober 1999',
    'telephone' => '+6208888277483',
    'kota' => 'Manokwari',
    'umur' => '22',
    'pendidikan' => 'diploma',
    'freelance' => 'available'
);

echo json_encode([
    'results' => $data
]);
?>
