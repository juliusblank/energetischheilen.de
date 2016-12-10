<!--
function MM_preloadImages() { //v3.0
var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.0
var p,i,x;  if(!d) d=document; if((p=n.indexOf("&#063;"))>0&&parent.frames.length) {
d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
if(!x && document.getElementById) x=document.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_onLoad(){
MM_preloadImages('images/main/home_on.gif','images/main/but_leistungen_on.gif','images/main/but_leistungen_off.gif','images/main/button_over_lage_off.gif','images/main/gebaeude_on.gif','images/main/gebaeude_off.gif','images/main/zu_vermieten_on.gif','images/main/zu_vermieten_off.gif','images/main/news_on.gif','images/main/news_off.gif','images/main/impressum_on.gif','images/main/impressum_off.gif')
}
// -->


<!--
function HMW_open_popup(popA,popB,popC){
 window.open(popA,popB,popC);
}
// -->


<!--
var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// -->


<!--
function map24_removeDefaultValues(){ if (document.link2map24.sstreet.value == 'Straße') 	document.link2map24.sstreet.value 	= ''; if (document.link2map24.szip.value 	  == 'PLZ') 		document.link2map24.szip.value 		= '';
if (document.link2map24.scity.value   == 'Ort') 		document.link2map24.scity.value 	= '';
}
// -->


<!--
function bestellung_ueberpruefen(){
  var email = document.kontakt.email.value;
  if (document.kontakt.name.value.length < 3) {
  alert("Bitte geben Sie Ihren Namen ein!")
  document.kontakt.name.focus();
  return false;
 }

  else if (document.kontakt.strasse.value.length < 2) {
  alert("Bitte geben Sie eine Strasse ein!")
  document.kontakt.strasse.focus();
  return false;
 }
  
  else if (document.kontakt.ort.value.length < 3) {
  alert("Bitte geben Sie Ihre Postleitzahl und Ort ein!")
  document.kontakt.ort.focus();
  return false;
 }
  
  else if (document.kontakt.telefon.value.length < 1) {
  alert("Bitte egben Sie eine Telefonnummer ein!")
  document.kontakt.telefon.focus();
  return false;
 }
  
  else if (email.length < 10 || email.indexOf ('@',0) == -1 || email.indexOf ('.',0) == -1) {
  alert("Bitte geben Sie eine gültige Email-Adresse ein.")
  document.kontakt.email.select();
  return false;
 }
  
  else if ((document.bestellung.anzahlxxx.value == false) && (document.bestellung.anzahloffice.value == false))  {
  alert("Bitte sagen Sie uns noch, was Sie bestellen wollen.");
  return false; 
  } 

  else if ((document.bestellung.zahlungsbedingung[0].checked == false) && (document.bestellung.zahlungsbedingung[1].checked == false) && (document.bestellung.zahlungsbedingung[2].checked == false)) { 
  alert("Bitte sagen Sie uns noch, wie Sie bezahlen wollen.");
  return false; 
  } 
  
  else if (document.bestellung.agb.checked != true)
  {
  alert("Bitte die AGBs lesen und bestätigen.")
  return false;
  }
 
  else
  return true;
 }
// -->


<!--
function toggleLayer(whichLayer) {
if (document.getElementById) { 
var style2 = document.getElementById(whichLayer).style; 
style2.display = style2.display? "":"block"; } 

else if (document.all) { 
var style2 = document.all[whichLayer].style; 
style2.display = style2.display? "":"block"; } 

else if (document.layers) { 
var style2 = document.layers[whichLayer].style; 
style2.display = style2.display? "":"block"; } }
// -->