<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>


<?php include 'header.php'; ?>

<section class="login">
    <div class="login-container">
        <div class="login-content">
            <img src="assets/img/vitaone.png" alt="">
            <div class="sectionStart login-title textUpper bold">
                bem vindo
            </div>
            <form>
                <div class="form-group margin_2_top">
                    <input type="email" class="form-control login-form" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control login-form" id="exampleInputPassword1" placeholder="Insira uma senha">
                </div>
                <button type="submit" class="btn login-button widthfull textUpper bold">receber token</button>
            </form>
            <div class="sectionStart">
                <img src="assets/img/vita.png" alt="">
            </div>
        </div>
    </div>
</section>


<?php include 'assets/js/JS_includes.php'; ?>
</body>

</html>