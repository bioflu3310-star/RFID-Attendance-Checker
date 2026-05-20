<?php
if (isset($_POST["UIDresult"])) {
    $UIDresult = $_POST["UIDresult"];

    // Use full path to ensure PHP writes correctly
    $filePath = __DIR__ . '/UIDContainer.php';
    $Write = "<?php $" . "UIDresult='" . $UIDresult . "'; ?>";

    if (file_put_contents($filePath, $Write) === false) {
        echo "Error: Could not write UIDContainer.php";
    } else {
        echo $UIDresult;
    }
} else {
    echo "Error: UIDresult not received.";
}
?>
