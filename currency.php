<?php 
include('../view/header.php');
?>
<title>Currency conversion</title>
<script type="text/javascript" src="../script/validation.min.js"></script>
<script type="text/javascript" src="../script/ajax.js"></script>
<?php include('../view/container.php');?>
<div class="container">
	<h2>Currency conversion </h2>	
	<br />
	<br />
	<br />
	<form action="../controller/convert.php" method="post" id="currency-form"> 		
		<div class="form-group">
		<label>From</label>
			<select name="from_currency">
			
				<option value="USD" selected="1">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
			</select>	
			&nbsp;<label>Amount</label>	
			<input type="text" placeholder="Currency" name="amount" id="amount" />			
			&nbsp;<label>To</label>
			&nbsp;<label name="to_currency">Egyptian Pound</label>	
				
						
			&nbsp;&nbsp;<button type="submit" name="convert" class="btn btn-default">Convert</button>	
				
		</div>			
	</form>	
	<div class="form-group" id="converted_rate"></div>	
	<div id="converted_amount"></div>
				
	 <div style="margin:50px 120px 20px 140px;">
        <a href="invoice.php"><button> Proceed </button></a>        

    </div>  		
</div>
<?php include('../view/footer.php');?>


