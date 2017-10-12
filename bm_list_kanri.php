<?php
session_start();
include("functions.php");
ssidchk();

//1.  DB接続します
$pdo = db_con();

//2．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//3．データ表示
$karni_flg = $_SESSION["kanri_flg"];
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else if($karni_flg==1){
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $view .= '<tr style="background:#fff;">';
      $view .= '<td style="padding:5px;">';
      $view .= $result["name"];
      $view .= '</td>';
      $view .= '<td style="padding:5px;">';
      $view .= $result["url"];
      $view .= '</td>';
      $view .= '<td style="padding:5px;">';
      $view .= $result["comment"];
      $view .= '</td>';
      $view .= '<td style="padding:5px;">';
      $view .= '<a href="bm_update_view.php?id='. $result["id"].'">';
      $view .= '【更新】';
      $view .= '</a>';
      $view .= '<a href="bm_delete.php?id='. $result["id"].'">';
      $view .= '【削除】';
      $view .= '</a>';
      $view .= '</td>';
      $view .= '</tr>';
  }
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $view .= '<tr style="background:#fff;">';
      $view .= '<td style="padding:5px;">';
      $view .= $result["name"];
      $view .= '</td>';
      $view .= '<td style="padding:5px;">';
      $view .= $result["url"];
      $view .= '</td>';
      $view .= '<td style="padding:5px;">';
      $view .= $result["comment"];
      $view .= '</td>';
      $view .= '<td style="padding:5px;">';
      $view .= '<a href="bm_update_view.php?id='. $result["id"].'">';
      $view .= '【更新】';
      $view .= '</a>';
      $view .= '</td>';
      $view .= '</tr>';
  }
}
?>

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>管理者画面</title>
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
        <div>管理者名：
            <?=$_SESSION["name"]?>（<?=$_SESSION["kanri_flg"]?>）</div>
        <div>
            <div class="container jumbotron">
                <table border="1" style="word-break: break-all; word-wrap: break-word; border-collapse: collapse; table-layout: fixed; width: 90%; margin:0 auto;">
                    <tr style="background: #DC4815;">
                        <th style="padding:5px; width: 20%; color: #fff;">TITLE</th>
                        <th style="padding:5px; width: 20%; color: #fff;">URL</th>
                        <th style="padding:5px; width: 40%; color: #fff;">COMMENT</th>
                        <th style="padding:5px; width: 20%; color: #fff;">EDIT</th>
                    </tr>
                    <?=$view?>
                </table>
            </div>
        </div>
        </div>
        <!-- Main[End] -->

    </body>

    </html>
