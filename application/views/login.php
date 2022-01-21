<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="hu">
<head>
    <base href="<?php print(base_url()); ?>">   
<?php $this->load->view('head'); ?>
    
</head>
<body>
    <main>
                <h1>Admin belépés</h1>
                <form class="adminlogin" action="index.php/Home/login" autocomplete="on" method="post">
                    <h2>Csak adminisztrátor jogosultsággal történő belépéshez!</h2>
                    <h2>Az ügyféloldalakhoz kérem kattintson a lenti vissza feliratra!</h2>
                    <label for="email">Email : </label>
                    <input id="email" type="email" name="email" value="<?php echo set_value('email');?>" placeholder="minta@minta.hu" required>
                    <label for="password">Jelszó : </label>
                    <input id="password" name="password" type="password" >
                    <h2><?php echo validation_errors(); ?></h2>
                    <br>
                    <button style="width: 20%; margin-left: 5px">Belépés</button>
                    <button style="width: 20%;"><a href="index.php/home/index">Vissza</a></button>
                </form>
    </main>
    <footer>
        
    </footer>
</body>
</html>

