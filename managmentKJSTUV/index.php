<?php
/*            CONFIG             */
$randr = md5(uniqid(rand(), true));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$string = file_get_contents("conf.json");
$json_a = json_decode($string, true);

$company = $json_a['company'];
$Sdescription = $json_a['shortDescription'];

?><!DOCTYPE html>
<html>
<head>
    <title>CBManager</title>
    <link rel="stylesheet" href="manager.css" />
    <meta name="viewport" content="width=device-width" />
<body>
    <div class="cb-box-parent">
        <div class="cb-box">
            <div class="cb-center">
                <h1>CBManager</h1>
                <p>Configuration Menu: </p>
            </div>
            <form class="ican" method="POST" action="set.php" >
                <div id="cfg-1">
                    <label>Company: <br>
                        <input autocomplete="off" name="comp" type="text" value="<?php echo $company ?>">
                    </label><br><br>
                    <label>Short Description: <br>
                        <input autocomplete="off" name="sdesc" type="text" value="<?php echo $Sdescription ?>">
                    </label><br><br>
                    <label>Short Description: <br>
                        <input autocomplete="off" name="sdesc" type="text" value="<?php echo $Sdescription ?>">
                    </label><br><br>
                    <div style="text-align: center">
                        <p>
                            <button type="button" class="disabled">Previous</button>
                            1 / 3
                            <button type="button" onclick="nxt1()">Next</button>
                        </p>
                    </div>
                </div>

                <div id="cfg-2">
                    <div style="text-align: center">
                        <p>
                            <button type="button" onclick="prv2()">Previous</button>
                            2 / 3
                            <button type="button" onclick="nxt2()">Next</button>
                        </p>
                    </div>
                </div>

                <div id="cfg-3">
                <label >Developer requests (300 character limit)? <br>
                        <textarea autocomplete="off" class="cb-text-area" maxlength="300" name="request"></textarea>
                </label><br><br><br>
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($randr) ?>">
                <button style="float: right" type="submit">Submit</button><br><br>
                    <div style="text-align: center">
                        <p>
                            <button type="button" onclick="prv3()">Previous</button>
                            3 / 3
                            <button type="button" class="disabled">Next</button>
                        </p>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="m.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
