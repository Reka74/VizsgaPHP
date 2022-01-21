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
                <h1>Elérhetőségeink</h1>
                <form class="urlap" action="#" autocomplete="on" method="post">
                    <h2>Amennyiben kitölti űrlapunkat, kollegáink keresni fogják Önt.</h2>
                    <label for="name" >Név : </label>
                    <input id="name" type="text" name="name" placeholder="Minta János" required>
                    <label for="email">Email : </label>
                    <input id="email" type="email" name="email" placeholder="minta@minta.hu" required>
                    <label for="phone">Telefonszám : </label>
                    <input id="phone" name="phone" type="tel" placeholder="+36(körzetszám)1234567" pattern="+36[0-9]{1,2}[0-9]{7}">
                    <label for="cars">Melyik autónk érdekli : </label>
                    <select id="cars" name="cars" size="1">
                      <option value="1">McLaren 720S</option>
                      <option value="2">Acura NSX</option>
                      <option value="3">Koenigsegg Agera S</option>
                      <option value="4">Mansory Rolls-Royce</option>
                      <option value="5">Ferrari F8 Spider</option>
                      <option value="6">Polski Fiat 126P</option>
                      <option value="7">Trabant 601 S</option>
                      <option value="8">Dodge Challenger SRT Hellcat</option>
                      <option value="9">Audi R8 V10 Spyder</option>
                      <option value="10">Chevrolet Corvette C7</option>
                      <option value="11">Ford Mustang Shelby GT500</option>
                      <option value="12">Lamborghini Huracan EVO Spyder</option>
                      <option value="13">Maserati Ghibli Trofeo</option>
                      <option value="14">Porsche GT3 RS</option>
                    </select>
                    <label for="uzenet">Egyéb üzenet : </label>
                    <textarea id="uzenet" name="uzenet" rows="5"></textarea>
                    <button>Elküld</button>
                </form>
                <h2>Személyesen: 1234 Budapest, Xyz u. 1234.</h2><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1347.7828131570159!2d19.039549869000826!3d47.49837477696028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dda7b223e48d%3A0x8a61f4607954fb0d!2zQ2xhcmsgw4Fkw6FtIHTDqXI!5e0!3m2!1shu!2shu!4v1632383861471!5m2!1shu!2shu" width="" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br><br><br>
                <div><a href="mailto:info@luxcar.hu"><i class="far fa-envelope"></i> : info@luxcar.hu</a></div><br>
                <div><a href="tel:+36609999999"><i class="fas fa-mobile-alt"></i> : +36 60 999 9999</a></div>
                <br>
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