<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Login</title>
 </head>
 <body>
   <h1>ログイン</h1>
   <form  action="mission_6_login.php" method="post">
     <input type="email" name="mail" placeholder = "メールアドレス">
     <input type="password" name="password" placeholder = "パスワード">
     <button type="submit" name="submit">ログイン</button>
   </form>
   <h1>新規登録</h1>
   <form action="mission_6_signup.php" method="post">
     <input type="email" name="mail" placeholder = "メールアドレス">
     <input type="password" name="password" placeholder = "パスワード">
     <button type="submit" name="submit">新規登録</button>
   </form>
 </body>
</html>

