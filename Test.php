<html>
<body background="https://i.ytimg.com/vi/XIMLoLxmTDw/hqdefault.jpg">
<?php

class createCon  {
    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'sample ilr';
    var $myconn;

    function connect() {
        $con = mysqli_connect($host, $user, $pass, $db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $myconn = $con;
            echo 'Connection established!';}
        return $myconn;
    }

    function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }
echo $_POST['$con']
}
?>
</body>
</html>
