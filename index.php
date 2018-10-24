
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="Er det øltid?">
    <meta name="description" content="Er det øltid?">
    <title>erdetøltid.dk</title>
    <style type="text/css">
        html, body {
          height: 100%;
          overflow: hidden;
          font-family: Trebuchet MS, Franklin Gothic Medium, sans-serif;
        }
        #titel {
          text-align: center;
          top: 10%;
          font-size:40px;
          position: relative;
          overflow: hidden;
        }
        #svar {
          text-align: center;
          top: 27%;
          position: relative;
          overflow: hidden;
        }
        #facebook {
          position: absolute;
          right: 5px;
          bottom: 2px;
        }
        #facebookframe {
          border:none;
          overflow:hidden;
          width:300px;
          height:35px;
        }
    </style>
    <script type="text/javascript">
        var fontSize = 6;
        function forstoer() {
            var svar = document.getElementById('svar');
            var oldFontSize = fontSize;
            fontSize += 1.4 * Math.sqrt(fontSize);
            var newWidth = svar.firstChild.offsetWidth / oldFontSize * fontSize;
            if (newWidth < document.body.offsetWidth * .8 && fontSize < 344) {
                svar.style.fontSize = Math.round(fontSize) + 'px';
                svar.style.marginTop = (-fontSize / 3) + 'px';
                setTimeout(forstoer, 30);
            }
        }
        onload = forstoer;
    </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-93115-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>
  <body>
    <h1 id="titel">Er det øltid?</h1>
    <h2 id="svar"><span>Ja</span></h2>
    <div id="facebook">
      <iframe id="facebookframe"  src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ferdetøltid.dk%2F&amp;layout=standard&amp;show_faces=false&amp;width=300&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
  </body>
</html>
