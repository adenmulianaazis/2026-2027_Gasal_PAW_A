
<h3>Posted data:</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($_POST as $key => $value) {
        echo htmlspecialchars($key) . " => "
           . htmlspecialchars($value) . "<br>";
    }
} else {
    echo "Belum ada data yang dikirim!";
}
?>
