<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head>
<title>Manuela Blank: energetisch heilen</title>
<meta id="description" content="" />
<meta id="keywords" content="" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta id="robots" content="index,follow,NOODP" />
<meta http-equiv="cache-control" content="no-cache, must-revalidate" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<link rel="stylesheet" href="programs/screen.css" media="screen" />
<script type="text/javascript" src="programs/javascript.js"></script>
<script src="programs/dw_event.js" type="text/javascript"></script>
<script src="programs/dw_scroll.js" type="text/javascript"></script>
<script src="programs/dw_scrollbar.js" type="text/javascript"></script>
<script src="programs/scroll_controls.js" type="text/javascript"></script>
<script type="text/javascript">
function init_dw_Scroll() {
    var wndo = new dw_scrollObj('wn', 'lyr1');
    wndo.setUpScrollbar("dragbar", "track", "v", 1, 1);
    wndo.setUpScrollControls('scrollbar');
}
// if code supported, link in the style sheet and call the init function onload
if ( dw_scrollObj.isSupported() ) {
    if (screen.height > 900) {dw_writeStyleSheet('programs/style.css')}else {dw_writeStyleSheet('programs/style_small.css')}
    dw_Event.add( window, 'load', init_dw_Scroll);
}
</script>
</head>
<body>
<div class="outer">
<div class="shaddow">
<div class="inner">
<div class="banner"><a href="index.html">
<img border="0" src="images/main/banner_home.png" width="800" height="127" /></a></div>
<!--Navigation-->
<div class="navigation">
<img src="images/main/leer.png" width="40" height="30" />
<a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('but1','','images/main/but_biographie_on.png',1)" href="biographie.html">
<img alt="Biographie" src="images/main/but_biographie_off.png" id="but1" width="110" height="35" /></a>
<a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('but2','','images/main/but_heiltechniken_on.png',1)" href="heiltechniken.html">
<img alt="Biographie" src="images/main/but_heiltechniken_off.png" id="but2" width="158" height="35" /></a>
<a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('but3','','images/main/but_seminare_on.png',1)" href="seminare.html">
<img alt="Biographie" src="images/main/but_seminare_off.png" id="but3" width="127" height="35" /></a>
<a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('but4','','images/main/but_rituale_on.png',1)" href="rituale.html">
<img alt="Biographie" src="images/main/but_rituale_off.png" id="but4" width="109" height="35" /></a>
<a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('but5','','images/main/but_gaestebuch_off.png',1)" href="didgb.php">
<img alt="Biographie" src="images/main/but_gaestebuch_on.png" id="but5" width="134" height="35" /></a>
<a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('but6','','images/main/but_kontakt_on.png',1)" href="kontakt.html">
<img alt="Biographie" src="images/main/but_kontakt_off.png" id="but6" width="87" height="35" /></a>
</div>
<!--Content-->
<div id="wn">
<div id="lyr1">
<!--Kontaktformular-->
<?php
if ($_POST) {
$name = $_POST['name'];
$email = $_POST['email'];
$nachricht = $_POST['nachricht'];
$an ="hauptpostamt@energetischheilen.de";
# Diese Nachricht wird an Ihre E-Mail-Adresse gesendet:
$text = "Gästebucheintrag von: $name\n
Email: $email\n
Eintrag:\n
$nachricht";
@mail($an, Gästebucheintrag, $text, "From: " . $email);
echo "<p><b>Vielen Dank f&#252;r Ihren Eintrag. Ihr Eintrag wird in den nächsten 24 Stunden freigeschaltet.</b></p>";
}
else { ?>
          <form name="Formular" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return eingaben_ueberpruefen();">
            <table>
              <tr>
                <td align="left" valign="top">
                <p class="tab">
                Name:<br><input type="text" name="name" size="57" maxlength="33" tabindex="1"><br>&nbsp;<br>
                Email (wird nicht veröffentlicht):<br><input type="text" name="email" size="57" maxlength="60" tabindex="5"><br>&nbsp;<br>
                Ihr Eintrag:<br><textarea name="nachricht" cols="90" rows="6" tabindex="6"></textarea><br>&nbsp;<br></p>
                <p class="tab"><input type="submit" value="Absenden"><br>&nbsp;</p></td>
              </tr>
            </table></form>
<?php
}
?>
<p class="content"></p>
<!Einträge-->
<hr />
<p class="content">18. Januar 2014</p>
<p class="content">Liebe Manuela!<br>Herzlichen Dank für dein grosses Engagement!<br>Du bist sehr kompetent und dir vertraue ich!<br>Danke,<br>Eliane</p>
<hr />
<p class="content">11. Dezember 2013</p>
<p class="content">Unser lieber schwarzer Kater war fort. Eine Woche lang haben wir ihn vermisst und verzweifelt überall gesucht - vergebens. Wir wussten uns einfach keinen Rat mehr und waren schrecklich traurig. Dann haben wir Dich, liebe Manuela, um Hilfe gebeten. Keine 24 Stunden später war er wieder da! </p>
<p class="content">Danke für Dein wunderbares Wirken!!!</p>
<p class="content">Luisa</p>
<hr />
<p class="content">24. November 2013</p>
<p class="content">Liebe Manuela,</p>
<p class="content">ich litt seit mehr als acht Monaten an einer hartnäckigen chronischen Sehnenscheidenentzündung, die mir das Arbeiten am Computer und damit die Ausübung meines Berufs nur noch unter Schmerzen ermöglichte und damit zur Qual machte. Ich hatte alle möglichen schulmedizinischen und alternativen Therapien versucht wie Akupunktur, Feldenkrais u.v.a. - leider vergebens.</p>
<p class="content">Dann hast Du für mich einen Grid geschrieben. Zunächst erlebte ich wie in de Homöopathie eine signifikante Erstverschlimmerung. Dann ließen die Beschwerden allmählich mehr und mehr nach und sind jetzt tatsächlich vollständig verschwunden! DANKE!</p>
<p class="content">Deine Elisabeth</p>
<hr />
<p class="content">27. Februar 2012</p>
<p class="content">Liebe Manuela,</p>
<p class="content">habe gerade Deine Stimme in der Radiosendung gehört. Nochmals vielen Dank für Deine energetische Arbeit an meinem Haus. Seitdem fühle ich mich wieder in meinen 4 Wänden wohl!</p>
<p class="content">Liebe Grüße aus Norddeutschland!<br /> Bernd</p>
<hr />
<p class="content">30. Januar 2012</p>
<p class="content">Seit nun mehr als 8 Jahren ist Frau Blank meine erste Kontaktperson, wenn ich mich aus dem Gleichgewicht fühle, (obwohl ich einen sehr einfühlsamen Hausarzt habe...). In den verschiedensten Sitzungen durfte ich ihre zahlreichen und vielfältigen Heiltechniken kennenlernen. Sie hat mir bisher mit Lichtheilung, Chakrenreinigung, Zellreinigung, Divine Intervention, Fremdbestimmung und mit Auflösungsritualen sehr helfen können. Es ist \"wunderbar\" wie viel schon alleine eine Konsultation bewirkt und wie viel besser / leichter ich mich bisher nach bereits einer Sitzung fühlte! Geholfen hat sie mir in folgenden Bereichen bzw. zu folgenden Themen: Kopfschmerzen, Gelenkschmerzen, Erschöpfungszustände, Trennungsschmerz, familiäre Verstrickungen, Abgrenzungen, Selbstwert/ Selbstliebe. Ganz schön und rührend war auch die Hilfe und Heilung, die sie meinem verletzten Kater bieten konnte! Außerdem möchte ich allen Lesern noch ihre vielfältigen und bunten Seminare und Vorträge empfehlen. Die Zeit verstreicht wie im Flug und jeder geht mit einer großen Bereicherung nach Hause. Probieren Sie es aus, es wirkt!</p>
<p class="content">Danke, Manuela Blank, dass es Sie gibt!</p>
<p class="content">Liebe Grüße<br />Martina M.</p>
<hr />
<p class="content">27. Januar 2012</p>
<p class="content">Habe erst eine Sitzung werde mit Offenheit an die Sache herangehen, da ich Dauerschmerzpatient bin. Wenn man es nicht ausprobiert kann man nicht sagen, ob es funktioniert.</p>
<p class="content">Liebe Grüße<br>Matthias B.</p>
<p class="content">&#160;</p>

</div>

<div id="scrollbar">
<div id="up"><a class="mouseover_up" href=""><img src="images/main/btn-up.png" alt="" border="0" width="11" height="11"></a></div>
<div id="track"></div>
<div id="dragbar"></div>
<div id="down"><a class="mouseover_down" href=""><img src="images/main/btn-dn.png" alt="" border="0" width="11" height="11"></a></div>
</div>

</div>
</div>
<!--Kruemelnavigation-->
<div class="kruemelnavi"><p class="kruemelnavi"><a class="kruemelnavi" href="index.html">Home</a> | <a class="kruemelnavi" href="impressum.html">Impressum</a></p></div>
</div>
</div>
</body>
</html>
