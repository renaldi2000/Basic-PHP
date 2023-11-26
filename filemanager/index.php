<?php
$message = 'apa kabar?';
file_put_contents("content.txt", $message, FILE_APPEND);
$isi_file = file_get_contents("content.txt");
echo $isi_file;

$anggota = [
    ["nama"=> "aldi", "goldarah" => "A"],
    ["nama"=> "sintya", "goldarah" => "B"],
    ["nama"=> "henik", "goldarah" => "AB"],
    ["nama"=> "umam", "goldarah" => "O"],
];

$data = serialize($anggota); // Serialize
file_put_contents("data.txt", $data);
$output = file_get_contents("data.txt");
$result = unserialize($output);
print_r($result);

$data = json_encode($anggota); // JSON
file_put_contents("data.txt", $data);
$output = file_get_contents("data.txt");
$result = json_decode($output, true);
print_r($result);
?>