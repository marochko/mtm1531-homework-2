<head>
<meta charset="utf-8">
<title>Forms</title>
</head>

<body>
<title>Calculator</title>
<h1>PHP Calculator</h1>
	<form name="calc" action="?page=calc" method="post">
    	<label for="value1"> Number 1 </label>
	 <input id="value1" name="value1"><br>
     <label for="value2"> Number 2 </label>
     <input id="value2" name="value2"><br>
     <label for="operation"> Operation </label>
	 <select id="operation" name="operation"> 
        		<option value="add">Addition</option> 
                <option value="subtract">Subtraction</option> 
                <option value="divide">Division</option>
               	<option value="multiply">Multiplication</input>
                </select>
                <br>

<button type="submit">Calculate</button>
</form>



<?php if (!empty($_POST['value1']) && isset($_POST['value2'])) : ?>
	<p><strong>Your total (plus taxes) is </strong></p>

<?php if ($_POST['operation'] == 'multiply') : ?>
<p>$<?php echo  $_POST['value1'] * $_POST['value2'] *1.13 ; ?></p>

   <?php elseif($_POST['operation'] == 'divide'): ?>
      <p>$ <?php echo  $_POST['value1'] / $_POST['value2'] * 1.13; ?></p>
       
       
<?php elseif ($_POST['operation'] == 'add'): ?>
<p>$<?php echo  $_POST['value1'] + $_POST['value2'] * 1.13 ; ?></p>

   <?php elseif($_POST['operation'] == 'subtract'): ?>
     <p>$ <?php echo  $_POST['value1'] - $_POST['value2'] * 1.13 ; ?> </p>


<?php endif; ?>
<?php endif; ?>

</body>
</html>