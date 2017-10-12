<?php

//0.外部ファイル読み込み
include("functions.php");

//1.  DB接続します
$id = $_POST["id"];
$pdo = db_con();

//2．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table where id=$id");
$status = $stmt->execute();

//3．データ表示
$nameview="";
$urlview="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    $nameresult = $stmt->fetch();
      $nameview .= $nameresult["name"];
      $urlview .= $nameresult["url"];
}

?>

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ブックマーク一覧</title>
        <link rel="stylesheet" href="css/range.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            div {
                padding: 10px;
                font-size: 16px;
            }

        </style>
    </head>

    <body id="main">
        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">データを登録する</a>

                    </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <div>
            <div class="container jumbotron">
                <table border="1" style="border-collapse: collapse; table-layout: fixed; width: 90%; margin:0 auto 20px auto;">
                    <tr style="background: #DC4815;">
                        <th style="padding:5px; width: 100%; color: #fff;">
                            <?=$nameview?>
                        </th>
                    </tr>
                </table>
                <div style="width:800px; margin:0 auto;">
                    <iframe src="<?=$urlview?>" frameborder="0" width="800" height="400"></iframe>
                </div>
            </div>
        </div>
        </div>
        <!-- Main[End] -->

    </body>

    </html>
