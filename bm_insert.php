<?php

//0.外部ファイル読み込み
include("functions.php");

//入力チェック(受信確認処理追加)
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["url"]) || $_POST["url"]=="" ||
  !isset($_POST["comment"]) || $_POST["comment"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$name   = $_POST["name"];
$url  = $_POST["url"];
$comment = $_POST["comment"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//3．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, name, url, comment, date) VALUES(NULL, :name, :url, :comment, sysdate())");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':url', $url);
$stmt->bindValue(':comment', $comment);
$status = $stmt->execute();

//4．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}
?>
