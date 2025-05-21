<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nama = $_POST['Nama'];
    $Gender = $_POST['Gender'];
    $Umur = $_POST['Umur'];
    $Tinggi_Badan = $_POST['Tinggi_badan'];
    $Berat_Badan = $_POST['Berat_badan'];

    try {
      $sql = "INSERT INTO member (Nama,Gender,Umur,Tinggi_badan,Berat_badan) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        if ($stmt->execute([$Nama, $Gender, $Umur, $Tinggi_Badan, $Berat_Badan])) {
            echo "<p style='color: green; text-align: center;'>Data successfully submitted!</p>";
        } else {
            echo "<p style='color: red; text-align: center;'>Error submitting data.</p>";
        }
    } catch (PDOException $e) {
        echo "<p style='color: red; text-align: center;'>Error: " . $e->getMessage() . "</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard-kader.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: -20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }
         form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form select {
            width: 105%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: greenyellow;
        }
        
.atas {
    background-color: green;
}

h1 {
    text-align: center;
    color: black;
}

.aa {
    display: flex;   
}
        
    </style>
</head>
<body>
    <div class="atas">
    <h1>Dashboard</h1>
    <div class="aa">
      <form action="" method="POST">
        <h1 style="text-align: center;">Posyandu</h1>
        <label for="nama">Nama</label> <br>
        <input type="text" name="nama" id="nama" required> <br>

        <label for="gender">Gender</label> <br>
        <select name="gender" id="gender" required>
            <option value="cowok">cowok</option>
            <option value="cewek">cewek</option>
        </select> <br>

        <label for="umur">Umur(bulan)</label> <br>
        <input type="number" name="umur" id="umur" required> <br>

        <label for="Tinggi_badan">Tinggi Badan(cm)</label> <br>
        <input type="number" name="Tinggi_badan" id="Tinggi_badan" required> <br>

        <label for="surat_aju">Berat Badan(kg)</label> <br>
        <input type="number" name="Berat_badan" id="Berat_badan" required> <br>

        <button type="submit" style="margin-top: 5px;">Kirim</button>
    </form> 
        </div>
        <nav>
            <p style="text-align: center;">&copy;2025 posyandu kader dan admin</p>
        </nav>  
    </div>
   
</body>
</html>