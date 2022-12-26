<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>4eachblog掲示板</title>
        <link rel="stylesheet"type="text/css"href="style.css">
    </head>
 <body>
    <?php
    mb_internal_encoding("utf8");
    $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo->query("select*from 4each_keijiban");
?>
    <header>
        <img src="4eachblog_logo.jpg">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post"action="insert.php">
                <h3>入力フォーム</h3>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text"class="text"size="35"name="handlename">
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text"class="text"size="35"name="title">
                </div>
                <div>
                    <label>コメント<label>
                    <br>
                    <textarea cols="50"rows="5"name="comments"></textarea>
                </div>
                <div>
                    <input type="submit"class="submit"value="投稿する"> 
                </div>
            </form>
            <?php
            while ($row=$stmt->fetch()){
            echo "<div class='title'>";
            echo "<h2>".$row['title']."</h2>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            }
            ?>
             <?php
            while ($row=$stmt->fetch()){
            echo "<div class='title'>";
            echo "<h2>".$row['title']."</h2>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            }
            ?>
        </div>
        <div class="right">
            <h4>人気の記事</h4>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h4>オススメリンク</h4>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li> Bracketsのダウンロード</li>
            </ul>
            <h4>カテゴリ</h4>
            <ul>
                <li>HTML</li>
                <Li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </main>
    <footer>
        <p>copyright © internous | 4each blog the which provides A to Z about programming</p>
    </footer>
</body>
</html>