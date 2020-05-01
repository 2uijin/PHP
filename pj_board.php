<!doctype html>
<meta charset="UTF-8">
<title></title>
<head>
</head>
<body>
    <form method="GET" action="pj_post.php">   
        <input type="text" name="titlet">
        <br>
        <textarea name ="note" rows ="50" cols=""> </textarea>
        <br>
        <input type="hidden" name="hide" value=$_GET["name"]>
        <input type="submit" value="게시하기">
    </form>
</body>
</html>

<?PHP
    echo "아이디 : ".$_GET["hide"]."<br>";
    echo "제목 : ".$_GET["titlet"]."<br>";
    echo "$_GET['note']";
?>