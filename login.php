<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
<style>
  table {
    width: 300;
    margin: 50px 600px;
  }
  td {
    padding: 10px;
  }
</style>
</head>
<body>
    <form method="GET" action="getlogin.php">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btnLogin" value="Login">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
    </form>
    
</body>
</html>