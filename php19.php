<?php

//Cookie(アクセスしたユーザのブラウザにデータを保存できる)

//setcookie("username","taguchi", time()+60*60); ←第3引数は有効期限
//setcookie("username","taguchi", time()-60*60); ←消去する場合は時間を現在時刻よりも引く

var_dump($_COOKIE);

