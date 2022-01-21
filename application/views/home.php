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
                <h1>Luxus- és sportautók rövid és hosszútávú bérlése</h1>
                <p>Mclaren, Lamborghini, Ferrari, Porsche, Ford Mustang - a LuxCar szupersportautó flottájának oszlopos tagjai, csakúgy mint a Mansory Rolls-Royce, a Konigsegg, a az Audi R8, a Polski Fiat, a Dodge Challenger vagy a Chevrolet Corvette.
                </p><br><br>
                
                <p>Cégünk 2006 óta van jelen a magyarországi piacon, és autóparkunkat ügyfélkörünk növekedésével párhuzamosan bővítettük.</p><br><br>

                <p>Piacérzékenyen alakítjuk árainkat, figyelünk arra, hogy a legjobb árakat tudjuk garantálni ügyfeleinknek a sport- és luxusautók szegmensében.</p><br><br>
                <p>Megismerni a szupersportautók világát, közúton megtapasztalni egy sportautó vezetésének izgalmát akár egy- vagy több napon keresztül olyan plusz energiákat szabadít fel, ami sok esetben a mindennapi életvezetést is motiválja.</p><br><br>
                <p>A LuxCar-nál ezen túlmenően a hosszabb távú bérlésekre is komoly hangsúlyt fektetünk: ügyfeleink egy teljes hónapra, vagy akár tartósbérleti konstrukcióban is  kibérelhetik csúcskategóriás járműveinket.</p><br><br>
                
                <p>A LuxCar sikerének talán az a titka, hogy nagyon szeretjük az autókat, bolondulunk értük, ez a szenvedélyünk. Autóparkunk kialakításánál arra törekedtünk, hogy flottánk hozzáértő szemmel is izgalmas és egyedi legyen. Az elmúlt években merészebbek lettünk, és az itthon kevésbé ismert márkák irányába is nyitottunk. Egyelőre azt látjuk, érdemes: ha tudod, mi rejlik egy autóban, mire képes és milyen élményt nyújt, arra előbb-utóbb mások is ráéreznek. És éppen ez a cél: felejthetetlen élményt adni, legyen szó élményvezetésről vagy rövidebb-hosszabb távú autóbérlésről. „Ne csak álmodozz, vezesd is" - ezzel a mottóval indítottuk el több mint 15 éve a LuxCar Autókölcsönzőt, és ennek a kitételnek azóta is igyekszünk megfelelni.</p><br><br>
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
