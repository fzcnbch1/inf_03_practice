<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <div id="lewy">
            <img src="logo.png" alt="meteo">
        </div>
        <div id="srodek">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div id="prawy">
            <p>maj, 2019 r.</p>
        </div>
    </header>
    <main>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>    
                <?php


$host = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'prognoza'; 

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
$sql = "SELECT * from pogoda
where miasta_id like '1' 
GROUP by data_prognozy asc";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['data_prognozy'] . "</td>";
    echo "<td>" . $row['temperatura_noc'] . "</td>";
    echo "<td>" . $row['temperatura_dzien'] . "</td>";
    echo "<td>" . $row['opady'] . "</td>";
    echo "<td>" . $row['cisnienie'] . "</td>";
    echo "</tr>";
}

?>   
            </tr> 
        </table>
    </main>
    <section>
        
        <div id="slewy">
            <img src="obraz.jpg" alt="polska,wrolaw">
        </div>
        <div id="sprawy">
            <a href="kwerendy.txt ">Pobierz kwerendy</a>
        </div>
        
    </section>
    <footer>
        strone wykonal:0000000
    </footer>





  
</body>
</html>