<?php
session_start();
 
// sprawdzenie czy jestesmy zalogowani, jesli nie to przeniesie nas na stronę logowania
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <title>Footbal w Anglii</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,700|Saira:300,400&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="css1/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body onload="odliczanie();">
<div class="page-header">
        <h1>Cześć, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Witaj na mojej stronie.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Zresetuj hasło</a>
        <a href="logout.php" class="btn btn-danger">Wyloguj się z konta</a>
		
    </p>
  <header>
      <div id="zegar" style=></div> 
    <div class="welcome">
      <p>witaj w piłkarskim świecie!</p>
      <h1>Ligi Angielskiej
	 </div>
    <img src="images/premier.jpg"  alt="Logo">
  </header>
  <section class="features clearfix">
    <h1><ul>
        <li><a href="historia.php">Historia </a></li>
            <li><a href="#newsy">Newsy</a></li>
            <li><a href="https://www.premierleague.com/clubs">Zespoły</a></li>
            <li><a href="https://www.google.com/search?q=tabela+premier+league&rlz=1C1GCEA_enPL873PL873&oq=tabela+premier+league&aqs=chrome..69i57j0l7.4079j0j7&sourceid=chrome&ie=UTF-8#sie=lg;/g/11fj6snmjm;2;/m/02_tc;st;fp;1;;">Tabela</a></li>
            <li><a href="#ciekawostki">Ciekawostki</a></li>
			<li><a href="sklep.php">Sklep</a></li>
			<li><a href="#kontakt">Kontakt</a></li>
        </ul>
        </h1>
		<a name ="ciekawostki">
    <div class="feature">
      <img src="images/sheffield.jpg" width="150" height="190"alt="najstarszy klub">
      <h2>Najstarszy klub w Anglii</h2>
      <p class="description"> Czy wiedziałeś, że... Sheffield Football Club to najstarszy klub piłkarski w Anglii, a także na świecie? <br>
        Klub ten z siedzibą w mieście Sheffield, założony został 24 października 1857 roku. <br>
        Obecnie, The Blades po długiej przerwie występują w Premier League</p>
    </div>
    <div class="feature">
      <img src="images/liverpool.jpg" width="150" height="190"  alt="mistrzowie">
      <h2>Najbardziej utytułowany klub w Anglii</h2>
      <p class="description">Obecnie najbardziej utytułowanym klubem w Anglii jest Liverpool FC z 48 trofeami na koncie. <br>
        W skład tego niezwykle bogatego dorobku Liverpoolu wchodzi 18 mistrzostw Anglii, 6 Pucharów Europy, 7 Pucharów Anglii, 3 Puchary UEFA (dziś Liga Europy) i 8 Pucharów Ligi.</p>
    </div>
    <div class="feature">
      <img src="images/alan.jpg" width="150" height="190" alt="Alan Shearer">
      <h2>Najlepszy snajper w historii</h2>
      <p class="description">Napastnikiem z największą ilością strzelonych bramek w historii Premier League jest żywa legenda Newcastle United - Alan Shearer z 260 bramkami na koncie </p>
    </div>
</a>
  </section>
  <a name ="newsy">
  <section class="newsy">
    <h1>Przegląd prasy</h1>
    <div class="project clearfix">
      <div class="web">
        <img src="images/leeds.jpg" alt="Leeds United">
      </div>
      <div class="about">
        <h2>Leeds o krok od awansu do Premier League</h2>
        <p>Zespół Leeds United jest już o krok od bezpośredniego awansu do Premier League. W meczu 43. kolejki The Championship drużyna, której zawodnikiem jest reprezentant Polski Mateusz Klich, pokonała Swansea City 1:0.<br>Leeds United na trzy kolejki przed końcem fazy zasadniczej The Championship ma na swoim koncie 84 punkty i o 3 punkty wyprzedza wicelidera West Bromwich Albion oraz o 6 "oczek" trzecią w tabeli drużynę Brentford FC.
          </p>
      </div>
    </div>
    <div class="project clearfix">
      <div class="web">
        <img src="images/norwich.jpg" alt="Norwich City">
      </div>
      <div class="about">
        <h2>Spadek Norwich, cztery gole Antonio</h2>
        <p>Gracze Norwich City przegrali z West Ham United 0:4 i spadli z ligi. Dla gospodarzy to siódma kolejna przegrana w Premier League. W barwach WHU całe spotkanie rozegrał Fabiański. <br>
            Kanarki obecnie zajmują ostatnie miejsce i do bezpiecznej strefy (na trzy kolejki do końca) mają 13 punktów straty. Rywale są na 16. lokacie (34 oczka).
      </div>
    </div>
    <div class="project clearfix">
      <div class="web">
        <img src="images/city.jpg" alt="Manchester City">
      </div>
      <div class="about">
        <h2>Sąd wyda werdykt ws. Manchesteru City</h2>
        <p>W poniedziałek o 10:30 Manchester City dowie się czy będzie mógł zagrać w dwóch kolejnych edycjach europejskich pucharów. Klub złożył kilka miesięcy temu apelację do Sportowego Sądu Arbitrażowego w Lozannie. Teraz poznamy werdykt w tej sprawie.

Manchester City został ukarany przez UEFA za złamanie zasad Finansowego Fair Play na przestrzeni ostatnich sezonów. Anglicy byli początkowo tylko ostrzegani, ale ostatecznie postanowiono wykluczyć ich z europejskich pucharów i nałożyć grzywnę.

Klub z Manchesteru nie zamierza jednak poddać się bez walki i toczy walkę sądową o przywrócenie do rozgrywek pucharowych w sezonach 2020-21 i 2021-22. The Citizens przedstawili swoje odwołanie w Sądzie Arbitrażowym ds. Sportu (CAS). W poniedziałek przed południem poznamy ostateczny werdykt w tej sprawie.</p>
      </div>
    </div>
	</a>
    <div class="project clearfix">
      <div class="web">
        <img src="images/newcastle.png" alt="Newcastle United">
      </div>
      <div class="about">
        <h2>Daily Mail: Wkrótce pozytywna decyzja Premier League</h2>
        <p>Dziennikarze "Daily Mail" informują dzisiaj, że Premier League jeszcze w tym tygodniu powinno wyrazić zgodę na przejęcie Newcastle United przez PCP Capital Partners, wspierane przez rząd Arabii Saudyjskiej.

Źródło informacji, na które powołuje się Sportsmail, twierdzi, że formalne ogłoszenie decyzji przez PL jest bardzo bliskie i będzie pozytywne. Wcześniej informator nie określał, kiedy zostanie ogłoszona decyzja, a teraz twierdzi, że prawdopodobnie będzie to w tym tygodniu.

Dodaje również, że rządowi Wielkiej Brytanii zależy na sfinalizowaniu transakcji opiewającej na 300 milionów funtów, ponieważ chce zacieśniać relacje z Arabią Saudyjską.</p>
      </div>
    </div>
  </section>
  <section>
  <a name ="kontakt">
<section class="contact">
    <h1>Skontaktuj się ze mną</h1>
    <div class="wrap clearfix">

      <form class="contact-form" action ="contactform.php" method="post">
        <input type="text" name ="name" placeholder="Twoje imię">
        <input type="text" name="mail" placeholder="Email">
        <textarea name ="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">Wyślij wiadomość</button>
      </form>
      <div class="socials">
        <div class="social clearfix"><img src="images/contact1.png" alt="kontakt"><span>przybyszkarol97@gmail.com</span></div>
        <div class="social clearfix"><img src="images/contact2.png" alt="kontakt"><span>********</span></div>
        <div class="social clearfix"><a href="https://www.facebook.com/AngielskieEspresso"><img src="images/contact3.png" alt="kontakt"><span>Angielskie Espresso</span></div>
        <div class="social clearfix"><a href="https://twitter.com/liga_angielska"><img src="images/contact4.png" alt="kontakt"><span>@Liga Angielska</span></div>

      </div>

    </div>


  </section>
  </a>

  <footer>&copy; Karol Przybysz</footer>



  </section>

  <footer></footer>



