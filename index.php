<html>

<head>

</head>

<body>

<img src="https://www.reddit.com/media?url=https%3A%2F%2Fpreview.redd.it%2Fmeu-gato-%25C3%25A9-praticamente-o-gato-do-meme-v0-n9dleoj8dgfc1.jpg%3Fwidth%3D640%26crop%3Dsmart%26auto%3Dwebp%26s%3D52de2578fe227e639db822d551bba33c6d28a2f1"

<?php
$file_with_ips = 'ip.json';
$ips = file_get_contents($file_with_ips);
$contenido = json_decode($ips,true);

if(isset($_GET("mostrar"])){
  echo "<p>IP: <b>".$contenido[$_GET["k"]] ."</b></p>";
}
else{
  $contenido[$_GET["k"]] = $_SERVER[REMOTE_ADDR];
  file_put_contents($file_with_ips, json_encode($contenido));
}

  ?>

</body>

</html>