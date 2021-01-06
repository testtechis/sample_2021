<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん</title>
</head>
<body>
    <div id="Wrapper">
        <header>
            <div class="logo">プログラミング練習</div>
        </header>
        <h1>じゃんけんプログラム</h1>
        <p>出す手を選んでね！</p>
        <div　class="battle">
            <form action="result.php" method="POST">
                <p><label><input type="radio" name="playhand" value="グー">グー</label>
                <label><input type="radio" name="playhand" value="チョキ">チョキ</label>
                <label ><input type="radio" name="playhand" value="パー">パー</label></p>
                <p><input type="submit" class="battle-bottom" value="勝負する！"></p>
            </form>
        </div>
    </div>
    <footer>
        
    </footer>
</body>
</html>