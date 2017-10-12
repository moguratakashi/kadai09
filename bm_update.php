<?php

//0.外部ファイル読み込み
include("functions.php");

//1.POSTで取得
$id     = $_POST["id"];
$name   = $_POST["name"];
$url  = $_POST["url"];
$comment = $_POST["comment"];

//2.DB接続
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
$sql = "UPDATE gs_bm_table SET name=:name,url=:url,comment=:comment WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //4．index.phpへリダイレクト
  header("Location: bm_list_kanri.php");
  exit;
}

?>

