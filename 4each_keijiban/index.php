<!DOCTYPE html>
 <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
        $stmt=$pdo->query("select*from 4each_keijiban");
        ?>

        <header>
            <div class="logo">
                <img src="./4eachblog_logo.jpg">
            </div>
            <div class="menu">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
        <main>
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>

                <div class="書き込みフォーム">
                    <h3>入力フォーム</h3>
                    <form method="post" action="insert.php">
                        <div class="ハンドルネーム">
                            <label>ハンドルネーム</label><br>
                            <input type="text" size="35" name="handlename"><br><br>
                        </div>

                        <div class="タイトル">
                            <label>タイトル</label><br>
                            <input type="text" size="35" name="title"><br><br>
                        </div>

                        <div class="コメント">
                            <label>コメント</label><br>
                            <textarea rows="6" cols="80" name="comments"></textarea><br><br>
                        </div>

                        <div class="投稿する">
                            <input type="submit" value="投稿する">
                        </div>  
                    </form>
                </div><br>
                
                <?php
                while($row=$stmt->fetch()){
                    echo"<div class='投稿表示'>";
                        echo"<h3>".$row['title']."</h3>";
                        echo"<div class='内容'>";
                            echo $row['comments'];
                            echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                        echo"</div>";
                    echo"</div>";
                }
                ?> 
            </div>

            <div class="right">
                <div class="popular_topics">
                    <h2>人気の記事</h2>
                        <ul>
                            <li>PHPオススメ本</li>
                            <li>PHP MyAdminの使い方</li>
                            <li>今人気のエディタ</li>
                            <li>HTMLの基礎</li>
                        </ul>
                </div>

                <div class="recommend_link">
                    <h2>オススメリンク</h2>
                        <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Bracketsのダウンロード</li>
                        </ul>
                </div>

                <div class="category">
                    <h2>カテゴリ</h2>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                        </ul>
                </div>
            </div>

        </main>

        <footer>
            copyright ©︎ inrernous | 4each blog the which provides A to Z about programming.
        </footer>
    </body>
</html>

