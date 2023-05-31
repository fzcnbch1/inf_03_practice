<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientow</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Hurtownia spozywcza</h1>
        
    </header>
    <main>  
        <h2>opinie naszych klientow</h2>
        <?php
        $host = 'localhost'; 
        $dbUsername = 'root'; 
        $dbPassword = ''; 
        $dbName = 'hurtownia'; 
        
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        $sql = "SELECT imie, zdjecie, opinia FROM klienci
        INNER join opinie on
        klienci.id = opinie.Klienci_id
        INNER JOIN typy ON
        typy.id = klienci.Typy_id
        where typy.id =2 or typy.id =3";
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
            echo "<div class='opinia'>";
            echo '<img src="' . $row["zdjecie"] . '" alt="Image">';
            echo "<blockquote>". $row["opinia"] ."</blockquote>";
            echo "<h4>". $row["imie"] ."</h4>";

            echo "</div>";
        }



        
        ?>
    </main>
    <footer>
        <div id="f1">
            <h3>wspolpracuj z nami </h3>
            <a href="http//skelp.pl/">Sklep 1</a>
        </div>
        <div id="f2">
            <h3>Nasi top klienci</h3>
            <ol>

            </ol>
        </div>
        <div id="f3">
            <h3>skontaktuj sie z nami</h3>
            <p>telefon: 111222333</p>
        </div>
        <div id="f4">
            <h3>Autor: 0000000000</h3>
        </div>
    </footer>
</body>
</html>