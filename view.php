<?php
// １．データベースに接続する
$dsn = 'mysql:dbname=okinawakanko;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// ２．SQL文を実行する
$sql = 'SELECT * FROM `utina-`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

while (1) {
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  // fetch(), fetchAll() ⇨ 組み込み関数
  // データベースのデータを配列に格納させる関数
  // fetch ⇨ 1行
  // fetchAll ⇨ データベース全ての行
  if ($rec == false) {
    break;
  }
  echo $rec['id'] . '<br>';
  echo $rec['name'] . '<br>';
  echo $rec['mail'] . '<br>';
  echo $rec['place'] . '<br>';
  echo $rec['subject'] . '<br>';
  echo $rec['content'] . '<br>';
  echo '<hr>';
}


$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rec as $ $record){
  echo $record['id'];
}


// ３．データベースを切断する
$dbh = null;