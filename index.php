<?php
/**
  * Copyright (C) 2010 Webdigi UK (contactus@webdigi.co.uk)
  *
  * This program is free software: you can redistribute it and/or modify
  * it under the terms of the GNU General Public License as published by
  * the Free Software Foundation, either version 3 of the License, or
  * (at your option) any later version.
  *
  * This program is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  * GNU General Public License for more details.
  *
  * You should have received a copy of the GNU General Public License
  * along with this program.  If not, see <http://www.gnu.org/licenses/>.
  *
  */
?>


<html>
<head>
<title>Google Analytics on Facebook</title>
<style type="text/css">
form {
	width:500px;
	border:1px solid #ccc;
}
fieldset {
	border:0;
	padding:10px;
	margin:10px;
	position:relative;
}
label {
	display:block;
	font:normal 12px/17px verdana;
}
input {width:160px;}


span.hint {
	font:normal 11px/14px verdana;
	background:#eee url(bg-span-hint-gray.gif) no-repeat top left;
	color:#444;
	border:1px solid #888;
	padding:5px 5px 5px 40px;
	width:250px;
	position:absolute;
	margin: -12px 0 0 14px;
	display:none;
}


fieldset.welldone span.hint {
	background:#9fd680 url(bg-span-hint-welldone.jpg) no-repeat top left;
	border-color:#749e5c;
	color:#000;
}
fieldset.kindagood span.hint {
	background:#ffffcc url(bg-span-hint-kindagood.jpg) no-repeat top left;
	border-color:#cc9933;
}


fieldset.welldone {
	background:transparent url(bg-fieldset-welldone.gif) no-repeat 194px 19px;
}
fieldset.kindagood {
	background:transparent url(bg-fieldset-kindagood.gif) no-repeat 194px 19px;
}

</style>
<script>
function generatecode()
{
	var googleCode=escape(document.getElementById("gacode").value);
	var googleDomain=escape(document.getElementById("gadomain").value);
	var pageLink=escape(document.getElementById("fbpage").value);
	var pageTitle=escape(document.getElementById("fbtitle").value);
	var imgLink ="http://"+window.location.hostname+window.location.pathname+"fbga.php?googlecode="+googleCode+"&googledomain="+googleDomain+"&pagelink="+pageLink+"&pagetitle="+pageTitle;
	document.getElementById("code").innerHTML="<label>Simply paste this code to the bottom of the page you generated this for.</label><br><textarea name='textarea' cols='60' rows='3'><img src=\'"+imgLink+"\'></img></textarea>";
	
}

// This function checks if the gadomain field
// is at least 5 characters long.
// If so, it attaches class="welldone" to the 
// containing fieldset.

function checkGADomainForLength(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length > 4) {
		fieldset.className = "welldone";
	}
	else {
		fieldset.className = "";
	}
}


// This function checks if the fbpage field
// is at least 3 characters long.
// If so, it attaches class="welldone" to the 
// containing fieldset.

function checkFBPageForLength(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length > 2) {
		fieldset.className = "welldone";
	}
	else {
		fieldset.className = "";
	}
}

// This function checks if the fbtitle field
// is at least 3 characters long.
// If so, it attaches class="welldone" to the 
// containing fieldset.

function checkFBTitleForLength(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length > 2) {
		fieldset.className = "welldone";
	}
	else {
		fieldset.className = "";
	}
}


// This function checks the ga code to be sure
// it follows a certain pattern:
// UA-1231231-1
// If so, it assigns class="welldone" to the containing
// fieldset.

function checkGACode(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (/^UA-.*-.+$/.test(txt)) {
		fieldset.className = "welldone";
	} else {
		fieldset.className = "";
	}
}

// This function checks the email address to be sure
// it follows a certain pattern:
// blah@blah.blah
// If so, it assigns class="welldone" to the containing
// fieldset.

function checkEmail(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txt)) {
		fieldset.className = "welldone";
	} else {
		fieldset.className = "";
	}
}




// this part is for the form field hints to display
// only on the condition that the text input has focus.
// otherwise, it stays hidden.

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}


function prepareInputsForHints() {
  var inputs = document.getElementsByTagName("input");
  for (var i=0; i<inputs.length; i++){ 
  	if(inputs[i].type != "button"){
     inputs[i].onfocus = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
     }
     inputs[i].onblur = function () {
       this.parentNode.getElementsByTagName("span")[0].style.display = "none";
     }
	}
  }
}
addLoadEvent(prepareInputsForHints);
</script>
</head>
<body>
<label for="gacode"><a href="http://www.webdigi.co.uk/blog/2010/google-analytics-for-facebook-fan-pages/">Google Analytics for Facebook fan page</a>
<label for="gacode">Form below helps you generate html IMG tag code needed for EACH page you wish to track</label>
<form	action="#" name="basicform"	id="basicform" >
<fieldset>
	<label for="gacode">Analytics Code: </label>
	<input type="text" name="gacode" id="gacode" onkeyup="checkGACode(this);"></input> 
	<span class="hint">You get this code from Google Analytics, the code looks
like UA-1231231-1</span>
</fieldset>
<fieldset>
	<label for="gadomain">Domain on Analytics:</label>
	<input type="text" name="gadomain" id="gadomain" value="facebook.com" onkeyup="checkGADomainForLength(this);"></input>
	<span class="hint">This is domain that you created the website profile and received the 
tracking code on analytics, Mostly facebook.com</span>
</fieldset>
<fieldset>
	<label for="fbpage">Page Link: </label>
	<input type="text" name="fbpage" id="fbpage" onkeyup="checkFBPageForLength(this);"></input> 
	<span class="hint">This is to
identify the fan page when you see it on analytics. Use /contact_form,
/landing_page, etc</span>
</fieldset>
<fieldset>
	<label for="fbtitle">Page Title: </label>
	<input type="text" name="fbtitle" id="fbtitle" onkeyup="checkFBTitleForLength(this);"></input> 
	<span class="hint">This is a short description of the page title for your reference. eg:
Contact Form, Landing Page, etc</span>
</fieldset>
<fieldset>
    <input type="button" onclick="generatecode();" value="Generate Code"></input>
</fieldset>
</form>

<br/>
<div id="code">Click on Generate Code above</div>
<br>
Brought to you by a <a href="http://www.webdigi.co.uk">Web Development Company in London</a>
</body>
</html>

