<?php 

    $data = [
        ['nama' => 'Faisal', 'ipa' => 87, 'ips' => 93],
        ['nama' => 'Maulana', 'ipa' => 71, 'ips' => 74],
        ['nama' => 'Akbar', 'ipa' => 90, 'ips' => 66],
        ['nama' => 'Achmad', 'ipa' => 53, 'ips' => 68],
        ['nama' => 'Zacky', 'ipa' => 87, 'ips' => 79],
        ['nama' => 'Wildan', 'ipa' => 100, 'ips' => 89],
        ['nama' => 'Kevin', 'ipa' => 94, 'ips' => 54],
        ['nama' => 'Andrian', 'ipa' => 97, 'ips' => 95],
        ['nama' => 'Farel', 'ipa' => 83, 'ips' => 79],
        ['nama' => 'Faleri', 'ipa' => 92, 'ips' => 89]
    ];

    echo $data['nama'];
    foreach ($data as $d) {
        echo $d['nama'];
        echo '<br>';
        if ($d['ipa']>=80 && $d['ipa']<=100) {
            echo "Nilai IPA A";
        } else if($d['ipa']>=60 && $d['ipa']<=79){
            echo "Nilai IPA B";
        } else if($d['ipa']>0 && $d['ipa']<=59){
            echo "Nilai IPA C";
        } else{
            echo "Nilai IPA belum masuk";
        }
        echo '<br>';
        if ($d['ips']>=80 && $d['ips']<=100) {
            echo "Nilai IPS A";
        } else if($d['ips']>=60 && $d['ips']<=79){
            echo "Nilai IPS B";
        } else if($d['ips']>0 && $d['ips']<=59){
            echo "Nilai IPS C";
        } else{
            echo "Nilai ips belum masuk";
        }
        echo '<br>';
        echo '<br>';
    }

?>