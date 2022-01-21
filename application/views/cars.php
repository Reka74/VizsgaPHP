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
                <h1>Bérelhető autóink</h1>
                <div>A feltüntetett árak 7 napos bérlés esetén érvényesek.<br>
                Rövidebb vagy hosszabb távú bérlés esetén érvényes áraink, illetve a bérlési feltételeink az árakra kattintva érhetőek el.</div>
                <div class="cars">
                    <?php foreach ($cardetails as $key => $value){$num=$value['cprice'];if($num < 1){$price = 'Érdeklődésre';}?>
                    <div>
                        <a href="<?php print('assets/img/'.$value['cimage']); ?>" target="_blank" title="Kattintson a galériához!" 
                           data-fancybox="gallery" data-caption="<?php print($value['ctype']); ?>">
                            <img src="<?php print('assets/img/'.$value['cimage']); ?>" alt="<?php print($value['ctype']); ?>"></a>
                        <h3 class="cartype"><?php print($value['ctype']); ?></h3>
                        <a href="index.php/Prices/index" title="Árak és feltételek">Árak : <?php if($num > 0){print($num.' Ft/naptól');} else {print($price);} ?></a>
                    </div>
                    <?php }?>
                    
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
    <!--<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            click: "next"
       
        });
    </script>-->
</body>
</html>
