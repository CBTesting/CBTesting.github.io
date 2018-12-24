<?php
session_start();

$_SESSION['token'] = htmlspecialchars($_POST['token']);
if ($_SESSION['token'] !== $_POST['token']) {
    echo "INVALID TOKEN";
    die();
} else {
    SESHdestroy();
}
$config = "./conf.json";
$data = array(
    'company' => htmlspecialchars($_POST['comp']),
    'shortDescription' => htmlspecialchars($_POST['sdesc']),
);
$JSONData = json_encode($data);
if (file_put_contents($config, $JSONData) === FALSE) {
    $toecho = "Error, contact admin.";
} else {
    $toecho = 'Successful!';
}
?><DOCTYPE html>
<html>
<head>
    <title>CBManager</title>
    <link rel="stylesheet" href="manager.css" />
    <!-- <meta http-equiv="refresh" content="3;URL='http://<?php echo $_SERVER['HTTP_HOST']; ?>'"/> -->
</head>
<body>
    <div class="cb-box-parent">
        <div class="cb-box">
            <div class="cb-center">
                <h1>CBManager</h1>
                <p><?php echo $toecho ?></p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
function SESHdestroy() {
    $_SESSION['token'] = 'invalid...';
    session_destroy();
}
?>
