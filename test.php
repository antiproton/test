



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>Ajax Beispiel 002</title>
<script type="text/javascript" src="js/ajax.js"></script>


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