<html>
<meta charset="utf-8">
<title>page forms</title> 
<style>
fieldset{
 width:450px;
 }
 .menu{
padding:3px;
text-decoration:none;
background-color:black;
color:white;
font-size:20px;
}
.menu:hover{ 
 background-color:red;
}
 a
 { position:relative;
 left:250px; }
#h{border-radius:30px;}
#a{border-color:red;}
#ii{padding-bottom:70px;
padding-left:70px; 
padding-right:70px;
padding-top:70px;}
#j{background-color:pink;}
#t{background-color:#afd;}
#xx{background-color:#afd;
border-radius:30px;}
#dd{background-color:pink;
border-radius:30px;}
#v{color:green}
body{background-image:url("mes images/8.png");
background-repeat:no-repeat;
background-size:cover;
}
#logo{
 float:right;
}
</style>
<head>
<body>
<img id="logo" src=" mes images/8.png" height="200" width="200"/>
<a class="menu" href="acceuil.html">acceuil</a>
 <a class="menu" href="presentation.html">presentation</a>
   <a class="menu" href="analyse.html">ANALYSE</a>
    <a class="menu" href="forms.html">FORMS</a>
	 <a class="menu" href="cv.html">CV</a>
	 <a class="menu" href="contacts.html">CONTACTS</a>
	 <a class="menu" href="publicite.html">publicite</a><br/>
<a href="#bas">bas</a>
<a id="haut">haut</a><br/>
<h1><strong>information personnelles</strong></h1>
<fieldset><legend>Etat civile</legend>

<table>
<tr>
<td>civilite</td>
</tr>

<tr>
<td>
<select>
<option value="marie">M.</option>
<option value="celibataire">c.</option>
<option value="veuf">v.</option>
</select>
</td>
</tr>

<tr>
<td>nom</td>
</tr>

<tr>
<td>
<input size="60" value="ingabire"/>
 </td>
 </tr>
 
<tr>
<td>prenom</td>
</tr>

<tr>
<td>
<input type="size="60" value="anny"/>
 </td>
 </tr>

<tr>
<td>date naissance</td>
</tr>

<tr>
<td>
<input type="date" size="60"/>
 </td>
 </tr>
 
<tr>
<td>commune de naissance</td>
</tr>

<tr>
<td>
<input type="text"size="60" value="bwiza"/>
 </td>
 </tr>
 
<tr>
<td>
<select>
<option value="ntahangwa">ntahangwa</option>
<option value="mukaza">mukaza</option>
<option value="mutumba">mutumba</option>
</select>
</td>
</tr>
</table>

</fieldset>


<fieldset><legend>coordonnees</legend>

<table>

<tr>
<td>telephone</td>
</tr>


<tr>
<td>
<input text="number"size="60" value="69785452"/>
 </td>
 </tr>



<tr>
<td>couriel</td>
</tr>

<tr>
<td>
<input type="mail"size="50" placeholder="annhjk@gmail.com"/>
 </td>
 </tr> 

<tr>
<td>site web</td>
</tr>

<tr>
<td>
<input text="site"size="50"/>
 </td>
 </tr>
 </table>

 </fieldset>
 
<fieldset><legend>competences</legend>

<table>


<tr>
<td>niveau anglais</td>
<td>
<input type="radio" value="c1"/>c1
<input type="radio" value="b1"/>b1
<input type="radio" value="a1"/>a1
 </td>
 </tr>

<tr>
<td>langage informatique:</td>
<td>

<input type="checkbox" value="html"/>html
<input type="checkbox" value="css"/>css
<input type="checkbox" value="javascript"/>javascript
<input type="checkbox" value="php"/>php
 </td>
 </tr>
 </table>
 
 </fieldset>
 

 <table>

<tr>
<td>
<input id="h" type="submit" value="envoyer"/>
</td>
<td>
<input id="h" type="submit" value="effacer"/>
 </td>
 </tr>
 </table>
 
 
 <h1><strong>Enregistrement de votre produit</strong></h1>
 <fieldset><legend>informations</legend>
 <table>
 
 <tr>
<td>nom</td>
</tr>
<tr>
<td>
<input id="j" size="60" value="ingabire"/>
 </td>
 </tr>

 <tr>
<td>prenom</td>
</tr>
<tr>
<td>
<input id="j"size="60" value="anny"/>
 </td>
 </tr>

 <tr>
<td>courriel</td>
</tr>
<tr>
<td>
<input id="j" type="mail"size="50"placeholder="ingabannbel@gmail.com"/>
 </td>
 </tr>
 
 <tr>
<td>telephone</td>
</tr>

<tr>
<td>
<input id="j" type="number"size="60" value="69785452"/>
 </td>
 </tr>
 <tr>
<td>numero de serie</td>
</tr>

<tr>
<td>
<input id="j" type="texte"pattern[A-Z] placeholder="ABC-MNL-DEF-"/>
 </td>
 </tr>
  </table>

 </fieldset>
 
 <table>
 

<tr>
<td>
<input id="h" type="submit" value="enregistre"/>

 </td>
 </tr>
</table>
 

<h1><strong>Enregistrement de votre produit</strong></h1>
 <fieldset><legend>informations</legend>
 <table>
 
 <tr>
<td>nom</td>
</tr>
<tr>
<td>
<input id="t" type="size="60" value="nocent"/>
 </td>
 </tr>

 <tr>
<td>prenom</td>
</tr>
<tr>
<td>
<input id="t" type="size="60" value="olivier"/>
 </td>
 </tr>

 <tr>
<td>courriel</td>
</tr>
<tr>
<td>
<input id="t" type="mail"size="40"placeholder="exempleNOCENTl@gmail.com"/>
 </td>
 </tr>
 
 <tr>
<td>telephone</td>
</tr>

<tr>
<td>
<input type="number"size="60" value="69785452"/>
 </td>
 </tr>
 <tr>
<td>numero de serie</td>
</tr>

<tr>
<td>
<input id="t" type="texte"pattern[A-Z] placeholder="ADF-CSS-RTF-"/>
 </td>
 </tr>
  </table>

 </fieldset>
 
 <table>
 

<tr>
<td>
<input id="h" type="submit" value="enregistre"/>

 </td>
 </tr>
</table>
 

 

<h1><strong>Enregistrement de votre produit</strong></h1>
 <fieldset><legend>informations</legend>
 <table>
 
 
<tr>
<td>
<input id="xx"size="50"value="nocent"/>
 </td>
 </tr>

<tr>
<td>
<input id="xx"size="50" value="olivier"/>
 </td>
 </tr>
<tr>
<td>
<input id="dd" type="mail"size="50"placeholder="exempleNOCENTl@gmail.com"/>
 </td>
 </tr>
 <tr>
<td>
<input id="h"size="50" placeholder="+00 000 0000">
</td>
 </tr>
 <tr>
<td>
<input id="dd" type="mail"size="50"placeholder=
"ABC-XYZ-DEF-987"/>
 </td>
 </tr>

  </table>

 </fieldset>
 <table>
<tr>
<td>
<input id="h" type="submit" value="enregistre"/>
 </td>
 </tr>
</table>
<br/>
<br/>
<table>
<tr>
<td>nom</td>
</tr>
<tr>
<td>
<input id="a" size="50"/>
 </td>
 </tr>

 <tr>
<td>prenom</td>
</tr>
<tr>
<td>
<input id="a" size="50" />
 </td>
 </tr>

 <tr>
<td>courriel</td>
</tr>
<tr>
<td>
<input id="a"size="50"/>
 </td>
 </tr>
 
 <tr>
<td>telephone</td>
</tr>
<tr>
<td>
<input size="50"/>
 </td>
 </tr>

<tr>
<td>objet</td>
</tr>
<tr>
<td>
<input id="a"size="50"/>
 </td>
 </tr>
<tr>
<tr>
<td>commentaire(450 caracteres maximum)</td>
</tr>
<tr>
<td>
<input id="ii"/>
 </td>
 </tr>
<tr>
</table>

<table>

<tr>
<td>
<input id="h" type="submit" value="effacer"/></td>
<td>
<input id="h" type="submit" value="envoyer"/>
 </td>
 </tr>
 </table>
 
 
 











<a id="bas">bas</a>
<a href="#haut">haut</a>






<center><footer><h2 id="v">veuillez consulte:<u>http/www ingabanbel@gmail.com</u></h2></footer></center>

 </body>
 

</html>