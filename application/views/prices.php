<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="hu">
<head>
    <base href="<?php print(base_url()); ?>">   
<?php $this->load->view('head'); ?>
</head>
<body>
    <?php $this->load->view('header'); ?>
    <main>
        <article class="cont">
            <div class="content">
                <h1>Bérlési feltételek és részletes árak</h1>
                <p class="head">Bérlési feltételek és szabályok :</p>
                <p>Legalább betöltött 28. életév és 8 éves B-kategóriás jogosítvány.<br>
                   Érvényes személyi igazolvány vagy útlevél és lakcímkártya.<br>
                   Minden autónk esetében minden alkalommal szükséges kaució letétele.<br>
                   A kauciót legkésőbb az autó átadásakor kell letétbe helyezni és a gépkocsi épségben, szerződésnek megfelelő állapotban történő visszaadásakor fizetjük vissza.<br>
                   Bankkártyás fizetés lehetséges.<br><br>
                   Minden autónk teljes Magyarországon érvényes éves matricával rendelkezik.<br>
                   Minden autónk teljeskörű CASCO biztosítással rendelkezik.<br>
                    Csak Magyarország határain belül használhatóak járműveink.
                </p>
                <p class="head">Bérleti díjak :</p>
                <div class="moredays"> 14 napnál hosszabb bérlési igény esetén kérem vegye fel velünk a <a href="index.php/Reach/index">kapcsolatot!</a></div>
                <div class="tableflow">
                <table id="carprices" class="car-table">
                    <thead>
                        <tr>
                            <th>Autó típusa</th>
                            <th>1 napi bérleti díj</th>
                            <th>Napi bérleti díj 3-6. napig</th>
                            <th>Napi bérleti díj 7-14. napig</th>
                            <th>Kaució összege</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cardetails as $key => $value){$num=$value['cprice'];if($num < 1){$price = 'Hívjon!';}?>
                        <tr>
                            <td><img src="<?php print($value['cimage']); ?>" alt="<?php print($value['ctype']); ?>"><div class="carname"><?php print($value['ctype']); ?></div></td>
                            <td><?php if($num > 0){print($num.' Ft');} else {print($price);} ?></td>
                            <td><?php if($num > 0){print(($num*0.8).' Ft');} else {print($price);} ?></td>
                            <td><?php if($num > 0){print((($num*2)/3).' Ft');} else {print($price);} ?></td>
                            <td><?php if($num > 0){print(($num*2).' Ft');} else {print($price);} ?></td>
                        </tr>
                        <?php }?>
                        
                    </tbody>
                </table>
                </div>
            </div>            
            <?php $this->load->view('client_reviews'); ?>
        </article>
    </main>
    <footer>
        <div class="tajekoztatas">
            <p>Oldalaink látogatásával jóváhagyod a cookie-k használatát.
            </p>
            <button class="eltunik" type="button">RENDBEN</button>
        </div> 
    </footer>
</body>
</html>
