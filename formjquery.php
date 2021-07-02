<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<form method="post">
<input type="text" name="name1" id="name1">
<input type="text" name="name2" id="name2">

<input type="submit" value="submit" name="submit" id="submit">
<input type="text" name="replacetxt" id="replacetxt">
</form>
<script>
$(document).ready(function(){
    // Get value on button click and show alert
    $("#submit").click(function(){
        var number1 = $("#name1").val();
         var number2 = $("#number2").val();
        // content = number1.add( number2 ); 
        // console.log(content);
         var data =  number1.concat(number2);
   $("#replacetxt").val($("#replacetxt").val() + data);
    });
});
</script>
</body>
</html>