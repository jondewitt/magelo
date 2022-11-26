<!DOCTYPE html>
<html lang="en">
<head>
<title>{TITLE} {SUBTITLE}</title>
<link rel='stylesheet' href='templates/style.css' type='text/css'/>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
<meta http-equiv='Content-Style-Type' content='text/css'>
<script type="text/javascript"> 
function display(type, id, prefix) { 
  if (target = document.getElementById(prefix + id)) 
    if (type) target.style.display = (target.style.display == 'none') ? 'block' : 'none'; 
  else {      
    for(var i=0; i <= 2270; i++)    if (hideme = document.getElementById(prefix + i)) hideme.style.display = 'none';    
    for(var i=9999; i < 10000; i++) if (hideme = document.getElementById(prefix + i)) hideme.style.display = 'none';           
    target.style.display = 'block'; 
  } 
} 
function color(id) {
  if (target = document.getElementById("link" + id)) {
    for(var i=0; i < 100; i++) if (white = document.getElementById("link" + i)) white.style.color = '#FFFFFF';	    
    target.style.color = '#7b714a';
  }
}
</script> 
</head>
<body>
<div class='searchbar'>
  <div class='logo'>
    <div style='float:right;' align='center'>  
      <form method='GET' action='search.php'>
        {L_NAME}: <input class='search' type='text' name='name' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {L_GUILD}: <input class='search' type='text' name='guild' >&nbsp;&nbsp;&nbsp;&nbsp;
        <input style='vertical-align:middle' type='image' src='images/go.gif'>
      </form>

      <br>

      <a href='signaturebuilder.php'>{L_SIGBUILD}</a> &nbsp;|&nbsp; 
      <a href='charmove.php'>{L_CHARMOVE}</a> &nbsp;|&nbsp; 
      <a href='bazaar.php'>{L_BAZAAR}</a> &nbsp;|&nbsp; 
      <a href='index.php'>{L_HOME}</a> &nbsp;|&nbsp; 
      <a href='settings.php'>{L_SETTINGS}</a> &nbsp;|&nbsp; &nbsp;|&nbsp; 
      <a href='help.php'>{L_HELP}</a>
    </div>
  </div>
</div>
<div class='wrapper'>
  