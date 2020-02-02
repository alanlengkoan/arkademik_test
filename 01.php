<?php
function myBiodata(string $name, int $age)
{
    $data = [
        'name'               => $name,
        'age'                => $age,
        'address'            => 'Perumahan Taman Guna Asri Jl. Kelapa Hibrida IV NO.2, Desa Tamannyeleng Kec. Barombong Kab. Gowa, Prov. Sulawesi Selatan.',
        'hobbies'            => ['Basket Ball', 'Mountain Climbing', 'Fishing', 'Playing Game', 'Watching Anime'],
        'list_school'        => [['name' => 'SD Inpres 18 Kariango', 'year_in' => 2004, 'year_out' => 2009, 'major' => null], ['name' => 'SMP Negeri 2 Anggrek', 'year_in' => 2009, 'year_out' => 2012, 'major' => null], ['name' => 'SMA Negeri 5 Gorontalo Utara', 'year_in' => 2012, 'year_out' => 2015, 'major' => 'IPA'], ['name' => 'STMIK Handayani Makassar', 'year_in' => 2015, 'year_out' => 2019, 'major' => 'Teknik Informatika']],
        'is_married'         => false,
        'skills'             => [['skill_name' => 'PHP', 'level' => 'advanced'], ['skill_name' => 'Python', 'level' => 'beginner'], ['skill_name' => 'MySQL', 'level' => 'advanced'], ['skill_name' => 'SQL Server', 'level' => 'beginner'], ['skill_name' => 'HTML', 'level' => 'advanced'], ['skill_name' => 'CSS', 'level' => 'advanced'], ['skill_name' => 'JavaScript', 'level' => 'advanced'], ['skill_name' => 'JQuery', 'level' => 'advanced'], ['skill_name' => 'Ajax', 'level' => 'advanced']],
        'interest_in_coding' => true
    ];

    echo json_encode($data);
}

myBiodata('Alan Saputra Lengkoan', '12');