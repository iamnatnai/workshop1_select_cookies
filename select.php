<!DOCTYPE html>
<html >
<head>
</head>
<body>
<?php 
if ($_GET['language']=='en') {
    setcookie("lang", 'en', time() + 3600 * 24);
} 
if ($_GET['language']=='th') {
    setcookie("lang", 'th', time() + 3600 * 24);
}
else {
    # code...
}
?>
</body>
</html>