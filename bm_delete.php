<?php
session_start();
include("functions.php");

$id = $_GET["id"];

//1.DB接続など
$pdo = db_con();

$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();


//2．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
//3．index.phpへリダイレクト
  header("Location: bm_list_kanri.php");
  exit;
}


?>