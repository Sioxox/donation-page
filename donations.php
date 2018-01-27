<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Page de donation - Sioxox TV</title>
		<link rel="stylesheet" type="text/css" href="ressources/css/donations.css">
		<script type="text/javascript">
			function reste(texte)
			{
				var restants=140-texte.length;
				document.getElementById('caracteres').innerHTML=restants;
			}
		</script>
	</head>
	<body>
		<div class="panel-heading">
			<img class="avatar text-center" src="./ressources/images/logo.png">
			
			<br>
			
			<span id="streamer-name">Sioxox</span>
		</div>
		
		<form class="panel-body" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="tip@sioxox.tv">
			<input type="hidden" name="item_name" value="Paypal Payment">
			<input type="hidden" name="return" value="http://your-web-domain.com/thanks-pp.htm">
			<input type="hidden" name="no_note" value="1">
			
			<br>
			
			<input type="text" name="pseudo" style="width:430px; height:45px" placeholder="Pseudo"><br>
			
			<br>
			
			<input type="number" name="amount" value="" style="margin: 0; width: 357px;" placeholder="Montant">
			<input type="hidden" name="on0" value="Payment Details">
			<select name="currency_code">
				<option value="EUR" select>EUR</option>
				<option value="USD">USD</option>
				<option value="USD">CAD</option>
			</select>
			
			<br><br>
			
			<div id="message">
				<textarea id="message-textarea" onkeyup="reste(this.value);" name="os0" rows="4" cols="16" maxlength="140" placeholder="Votre message à Sioxox"></textarea><br>
				<div id="textarea-bottom"><span id="caracteres" style="text-align: left;">140</span> caractères restants</div>
			</div>
			
			<br>
			
			<fieldset class="pay-with"><legend>Payer avec</legend></fieldset>
			<input type="submit" name="PaypalPayment" value="Paypal"><br>
			
			<?php
				$conn = new mysqli("sioxox.tv.mysql", "sioxox_tv", "S7r6Eemn", "sioxox_tv");
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO tips (pseudo, amount, devise, message, date) VALUES ($_POST['pseudo'], $_POST['amount'], $_POST['currence_code'], $_POST['os0'], '2017-12-13')";

				if ($conn->query($sql) === TRUE) {
					echo "Tips réussi";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			?>
		</form>
	</body>
</html>