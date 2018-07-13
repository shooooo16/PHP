<?php

//session(サーバー側にデータを保存できる)
//大きなデータを保存
//改ざんされない
//中身が見られない


session_start();
// $_SESSION['username'] = "taguchi";
echo $_SESSION['username'];

unset($_SESSION['username']);//セッションの削除

