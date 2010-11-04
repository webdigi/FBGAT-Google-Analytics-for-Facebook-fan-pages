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

require_once("Galvanize.php");

class FBGalvanize extends Galvanize{

	
	function __construct($Profile = NULL) {
		parent::__construct($Profile);
		$this->Hostname="facebook.com";
	}

	function retrieveGif($urchinUrl) {
		//header("Location : $urchinUrl");
		//http://www.google-analytics.com/__utm.gif?utmwv=4.6.5&utmn=488134812&utmhn=facebook.com&utmcs=UTF-8&utmsr=1024x576&utmsc=24-bit&utmul=en-gb&utmje=0&utmfl=10.0%20r42&utmdt=Facebook%20Contact%20Us&utmhid=700048481&utmr=-&utmp=%2Fwebdigi%2Fcontact&utmac=UA-3659733-5&utmcc=__utma%3D155417661.474914265.1263033522.1265456497.1265464692.6%3B%2B__utmz%3D155417661.1263033522.1.1.utmcsr%3D(direct)%7Cutmccn%3D(direct)%7Cutmcmd%3D(none)%3B
		header("Location:http://www.google-analytics.com".$urchinUrl);
		//echo "Location : http://www.google-analytics.com".$urchinUrl;
		//echo "Haisasas";
		ob_end_flush();
		exit();
	}
}
