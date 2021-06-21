<!DOCTYPE html>
 
<html> 
 
<head>
 

 
 
</head>
 
<body>
 
<B>Icing:</B> <select id="icing">
<option>(Make a selection)</option>
<option value num="2.25">Whipped Cream</option>
<option value num="3.50">Butter Cream</option>
<option value num="4.00">Fondant</option>
</select>
<br>
 
<B>Servings:</B> <input id="servings"><br>
 
<button onclick="findTotal();">Calculate Total</button>
 
<!-- <input type="text" id="hasil" size="20"> -->
<h1 id = "hasil" ></h1>













<script type="text/javascript">
 
function findTotal()
{
 
    var icing = parseFloat(document.getElementById('icing').value);
 
    // var servings = Number(document.getElementById('servings').value);
    var servings = parseFloat(document.getElementById('servings').value);
 
    var total = icing * servings;

    document.getElementById('hasil').innerHTML="Hasilnya yaitu" + total;
 
 
}
 
</script> 
 



 
</body> 
 
</html>