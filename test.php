



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>Ajax Beispiel 002</title>
  <script type="text/javascript">
  <!--
	var request = false;

	// Request senden
	function setRequest(value) {
		// Request erzeugen
		if (window.XMLHttpRequest) {
			request = new XMLHttpRequest(); // Mozilla, Safari, Opera
		} else if (window.ActiveXObject) {
			try {
				request = new ActiveXObject('Msxml2.XMLHTTP'); // IE 5
			} catch (e) {
				try {
					request = new ActiveXObject('Microsoft.XMLHTTP'); // IE 6
				} catch (e) {}
			}
		}

		// überprüfen, ob Request erzeugt wurde
		if (!request) {
			alert("Kann keine XMLHTTP-Instanz erzeugen");
			return false;
		} else {
			var url = "ajax.php";
			// Request öffnen
			request.open('post', url, true);
			// Requestheader senden
			request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			// Request senden
			request.send('name='+value);
			// Request auswerten
			request.onreadystatechange = interpretRequest;
		}
	}

	// Request auswerten
	function interpretRequest() {
		switch (request.readyState) {
			// wenn der readyState 4 und der request.status 200 ist, dann ist alles korrekt gelaufen
			case 4:
				if (request.status != 200) {
					alert("Der Request wurde abgeschlossen, ist aber nicht OK\nFehler:"+request.status);
				} else {
					 content = request.responseText;

                              mydaten(content);


				}
				break;
			default:
				break;
		}
	}


  //-->
  </script>


  <script type="text/javascript">





  setInterval(function(){ setRequest();



  var ts = Math.round((new Date()).getTime() / 1000); //timestamp
                     document.getElementById('ts').innerHTML = ts;


  }, 1000);


function mydaten(content) {
   

  // den Inhalt des Requests in das <div> schreiben
                    document.getElementById('content').innerHTML = content;  
   
    return;              
}



   </script>

 </head>
 <body>

  <div id="content"></div><br>


  <div id="ts"></div><br>


 </body>
</html>