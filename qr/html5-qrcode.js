//---------------------------------------------------------------------
// JavaScript-HTML5 QRCode Generator
//
// Copyright (c) 2011 Amanuel Tewolde
//
// Licensed under the MIT license:
//   http://www.opensource.org/licenses/mit-license.php
//
//---------------------------------------------------------------------

// Generates a QRCode of text provided.
// First QRCode is rendered to a canvas.
// The canvas is then turned to an image PNG
// before being returned as an <img> tag.
window.onload = function() {
  document.getElementById('quickAdd').focus();
};




//This is my stuff
function showQRCode(text, s) {
	
  	function addhttp(url) {
   		if (!/^(f|ht)tps?:\/\//i.test(url)) {
      	url = "http://" + url;
   		}
   		return url;
	}
	
	text = addhttp(text);
	var t = text.length;

function topLevelDomain(url) {
    var n = url.indexOf("/", 7);
    var res = str.substring(0, n);
    return res;
}





//This is Ammanuel's stuff
  
  var dotsize = 12;  // size of box drawn on canvas
  var padding = 10; // (white area around your QRCode)
  var black = "rgb(0,0,0)";
  var white = "rgb(255,255,255)";
  var QRCodeVersion = 4; // 1-40 see http://www.denso-wave.com/qrcode/qrgene2-e.html

// RUSSELL - Added bits to adjust the size of thew QR code as necessary. 
	if (s == "s") {
		dotsize = 8;
	}

  if (t < 18) {
  	QRCodeVersion = 1; 
  } else if (t > 17 && t < 33) {
  	QRCodeVersion = 2; 
  } else if (t > 32 && t < 54) {
  	QRCodeVersion = 3; 
  } else if (t > 53 && t < 79) {
  	QRCodeVersion = 4; 
  } else if (t > 78 && t < 107) {
  	QRCodeVersion = 5; 
  } else if (t > 106 && t < 134) {
  	QRCodeVersion = 6; 
  } else {
  	QRCodeVersion = 10; 
  } 
  
	var canvas=document.createElement('canvas');
	var qrCanvasContext = canvas.getContext('2d');
  try {
    // QR Code Error Correction Capability 
    // Higher levels improves error correction capability while decreasing the amount of data QR Code size.
    // QRErrorCorrectLevel.L (5%) QRErrorCorrectLevel.M (15%) QRErrorCorrectLevel.Q (25%) QRErrorCorrectLevel.H (30%)
    // eg. L can survive approx 5% damage...etc.
    var qr = new QRCode(QRCodeVersion, QRErrorCorrectLevel.L); 
   	qr.addData(text);
   	qr.make();
   }
  catch(err) {
		var errorChild = document.createElement("p");
    var errorMSG = document.createTextNode("QR Code FAIL! " + err);
    errorChild.appendChild(errorMSG);
    return errorChild;
  }
    
  var qrsize = qr.getModuleCount();
 	canvas.setAttribute('height',(qrsize * dotsize) + padding);
 	canvas.setAttribute('width',(qrsize * dotsize) + padding);
 	var shiftForPadding = padding/2;
 	if (canvas.getContext){
 		for (var r = 0; r < qrsize; r++) {
 			for (var c = 0; c < qrsize; c++) {
 				if (qr.isDark(r, c))
 					qrCanvasContext.fillStyle = black;  
 				else
 					qrCanvasContext.fillStyle = white;  
 				qrCanvasContext.fillRect ((c*dotsize) +shiftForPadding,(r*dotsize) + shiftForPadding,dotsize,dotsize);   // x, y, w, h
 			}	
 		}
 	}

 	var imgElement = document.createElement("img");
 	imgElement.src = canvas.toDataURL("image/png");

 	return imgElement;
    
}

