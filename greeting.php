<?php

$name = $_POST['username'];

header("Location: result.php?name=" . urlencode($name));

exit();

?>