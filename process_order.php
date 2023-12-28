<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂票資訊</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <marquee bgcolor="red" scrollamount="20"><h1>Yee式電影院</h1></marquee>
    </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }
    </style>
<div class="container">
    <h2>訂票資訊</h2>

    <?php
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $movie = $_POST['movie'];
        $quantity = $_POST['quantity'];

        $priceMapping = [
            '水行俠 - 數位版' => 280,
            '水行俠 - 3D版' => 360,
            '旺卡 - 數位版' => 280,
            '旺卡 - 3D版' => 360,
            '水鬼 - 數位版' => 280,
            '水鬼 - 3D版' => 360,
            '飢餓遊戲：鳴鳥與游蛇之歌 - 數位版' => 280,
            '飢餓遊戲：鳴鳥與游蛇之歌 - 3D版' => 360,
            '屍禁 - 數位版' => 280,
            '屍禁 - 3D版' => 360,
            '少年Pi的奇幻漂流 (英國國家劇院現場) - 數位版' => 280,
            '少年Pi的奇幻漂流 (英國國家劇院現場) - 3D版' => 360,
        ];

        echo "<p>姓名: " . $name . "</p>";
        echo "<p>電話: " . $phone . "</p>";
        echo "<p>運送地址: " . $address . "</p>";
        echo "<p>選擇的電影: " . $movie . "</p>";
        echo "<p>價格: " . $priceMapping[$movie] . "元</p>";
        echo "<p>數量: " . $quantity . "</p>";
        echo "<p>謝謝您的訂購!</p>";
    ?>
</div>
<a href="index.html">返回頁首</a>
    <footer>
        <p><marquee bgcolor="yellow" scrollamount="10">&copy; 2023 Yee式電影院. 版權Yee式電影所有. All Rights Reserved</marquee></p>
    </footer>
<footer>
    <p>&copy; 2023 Yee式電影院. 版權Yee式電影所有. All Rights Reserved</p>
</footer>

</body>
</html>
