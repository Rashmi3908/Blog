<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
</head>
<body onload="sendRequest()">
<script>
function sendRequest(){
    $.ajax({
        url: "index.php",
        success: 
          function(result){
           $('#links').text(result); //insert text of test.php into your div
           setTimeout(function(){
          sendRequest(); //this will send request again and again;
           }, 5000);
        }});
});
</script>
<div id="links"></div>
</body>
</html>