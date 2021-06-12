<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="（se1a、2200228、トゥムル　ウイルス）">
    <title>課題35revieve</title>
    <link rel="stylesheet" href="../css/hp35.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <h1 id="title_logo"><a href="../hp35.html"><img src="../images/35/logo.png" alt="animebox"></a></h1>
        <div id="menu">
            <a href="../hp35.html" class="menu">HOME</a>
            <!-- <a href="#" class="menu">GENRE</a> -->

            <div class="dropdown">
                <div class="dropbtn menu">GENRE</div>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn menu">YEAR</div>
                <div class="dropdown-content">
                    <a href="../35poster/pageNotFound.html">2020</a>
                    <a href="../35poster/pageNotFound.html">2019</a>
                    <a href="../35poster/pageNotFound.html">2018</a>
                </div>
            </div>

        </div>
    </header>
    
    <main>
    <div class="recieve-style">
    <table border="">
    <caption>送信完了</caption>
    
    <tr>
        <td>
            お名前：
        </td>
        <td>
            <?php
                    $name = htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8');
                    echo $name;
                ?>
        </td>
    </tr>
    <td>
        メール：
    </td>
    <td>
        <?php
                    $mail = htmlspecialchars($_POST['mail'], ENT_QUOTES,'UTF-8');
                    echo $mail;
                ?>
    </td>
    </tr>
    <td>
        内容：
    </td>
    <td>
        <?php
                    $content = htmlspecialchars($_POST['content'], ENT_QUOTES,'UTF-8');
                    echo $content;
                ?>
    </td>
    </tr>
</table>
</div>
    </main>

    <script src="../slide.js"></script>
</body>

</html>
