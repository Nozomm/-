<script>
//更新
function koshin(){
  location.reload();
}

</script>

<?php

// URLディレクトリ設定
define('HOME_URL', '/chirotaro/');

?>

<!DOCTYPE html>
<!--日本語で表示-->
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="/chirotaro/chirotaro.css" rel="stylesheet">

  <!--タイトルを表示-->
  <title>ちろたろだよ</title>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" onclick="koshin()">ちろたろの日常</a>
      </div>
      <!--見出し-->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"　><a href="#" onclick="koshin()">ホーム</a></li>
          <li><a href="#profile">プロフィール</a></li>
          <li><a href="#link">SNS</a></li>
          <li><a href="#form">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="starter-template">
  
  <header>
    <div class="wrapper">
      <!--SNS-->
      <?php include_once('../Views/sns.php'); ?>
    </div>
  </header>

  <h3 id="form">お問い合わせ</h3>
    <form class="form-horizontal" action="#" method="POST">
      <div class="form-group">
        <label class="col-sm-2 control-label" for="title">ちろたん</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" id="title">
          </div>

        <label class="col-sm-2 control-label" for="message">メッセージ</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="select" id="select" cols="30" rows="10"></textarea>
          </div>

        <label class="col-sm-2 control-label" for="select">おもちゃ</label>
          <div class="col-sm-2">
            <select class="form-control" name="select" id="select">
              <!--選択肢-->
              <option>ピヨ</option> <option>ぽむ</option> <option>ホネ</option>
            </select>
          </div>
      </div>

    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit">送信</button>
    </div>

  <!--プロフィール-->
  <h4 id="profile">プロフィール</h3>
    <table class="table">
    <!--プロフィールの要素-->
      <thead>
        <tr>
          <th>名前</th>
          <th>ニックネーム</th>
          <th>誕生日</th>
          <th>性別</th>
          <th>趣味</th>
          <th>特技</th>
          <th>メッセージ</th>
        </tr>
      </thead>
      <thead>
        <tr>
          <td>ちろる</td>
          <td>ちろたん・ちろたろ・ちろさん</td>
          <td>2020年１月１日</td>
          <td>オス</td>
          <td>ソレソレ</td>
          <td>お昼寝</td>
          <td>全てのジャーキーは俺のもの</td>
        </tr>
      </thead>
    </table>

  <a class="btn btn-primary" href="#">OK</a>

    <footer>
      <p>ちろたん.jp</p>
    </footer>
  </div>

</body>
</html>
