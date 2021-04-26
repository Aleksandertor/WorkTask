<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="/database3/form.js"></script>
	<form method="post">
      <p>Имя:</p>
      <p><input type="text" id="userName"></p>
      <p>E-mail:</p>
      <p><input type="text" id="userMail"></p>
      <p>Телефон:</p>
      <p><input type="phone" id="userPhone"></p>
      <p>Сообщение:</p>
      <p><textarea id="userMessage"></textarea></p>
      <p><input type="button" value="отправить" onclick="myTest()"></p>
</form>
</body>
</html>
