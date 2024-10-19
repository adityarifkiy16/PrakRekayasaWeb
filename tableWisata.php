<?php
function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
// alamat localhost untuk file getWisata.php, ambil hasil export JSON
$send = curl("http://localhost/prakrw/getWisata.php");
// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

if ($data) {
    echo "<table border='1px' style='border-collapse: collapse; width:30%; text-align:left;'>
            <tr>
                <th>Kota</th>
                <th>Landmark</th>
                <th>Tarif</th>
            </tr>";

    foreach ($data as $row) {
        echo "<tr>
                <td>" . htmlspecialchars($row["kota"]) . "</td>
                <td>" . htmlspecialchars($row["landmark"]) . "</td>
                <td>" . htmlspecialchars($row["tarif"]) . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo 'No data';
}
