<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>www.malasngoding.com</h3>
	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
	<p>Ini adalah view blog. ada di route blog.</p>

    <br>
    <?php
        $nama = "Jokowi";
        date_default_timezone_set("Asia/Jakarta");
        echo date('D-M-Y H:m:s');
    ?>

    <br>
    {{
        "hallo apa kabar " . $nama;
    }}

</body>
</html>
