<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Donation page</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
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
			<img class="avatar text-center" src="./assets/img/logo.png">
			
			<br>
			
			<span id="streamer-name">Pseudo</span>
		</div>
		
		<form class="panel-body" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="email">
			<input type="hidden" name="item_name" value="Paypal Payment">
			<input type="hidden" name="return" value="thanks.html">
			<input type="hidden" name="no_note" value="1">
			
			<br>
			
			<input type="text" name="pseudo" style="width:430px; height:45px" placeholder="Pseudo"><br>
			
			<br>
			
			<input type="number" name="amount" value="" style="margin: 0; width: 357px;" placeholder="Amount">
			<input type="hidden" name="on0" value="Payment Details">
			<select name="currency_code">
				<option value="EUR" select>EUR</option>
				<option value="USD">USD</option>
				<option value="USD">CAD</option>
			</select>
			
			<br><br>
			
			<div id="message">
				<textarea id="message-textarea" onkeyup="reste(this.value);" name="os0" rows="4" cols="16" maxlength="140" placeholder="Your message to pseudo"></textarea><br>
				<div id="textarea-bottom"><span id="caracteres" style="text-align: left;">140</span> remaining characters</div>
			</div>
			
			<br>
			
			<fieldset class="pay-with"><legend>Pay with</legend></fieldset>
			<input type="submit" name="PaypalPayment" value="Paypal"><br>
		</form>
	</body>
</html>