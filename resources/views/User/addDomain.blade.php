<html>
<body>
<form action="/user/add/domain" method="POST">
    {{csrf_field()}}
   <label>Domain :</label> <input type="text" name="domains">
    <input type="submit" value="add domain">
</form>
</body>
</html>