<?php require_once('../header.php') ?>

<center>
	<b><h3>Un message a faire passé ?</h3></b>
	<form id="foncmodo" action="../../fonction/foncmodo.php" method="post">
			<input type="text" name="modo" placeholder="votre pseudo" size="20" value="" maxlength="140">
			<input type="text" name="note" placeholder="Votre Messages !" size="20" value="" maxlength="1456">
			<input type="submit" value="Envoyer" name="envoyer">
	</form>
	</center>
<br />
<?php
	require("../.././fonction/tableaumodo.php");
?>
<script type="text/javascript">
			(function(div, url) {
				function refresher()
				{
					var request = new XMLHttpRequest();
					request.open('GET', url, true);
					request.onload = function() {
					  if (request.status >= 200 && request.status < 400) {
						div.innerHTML = request.responseText;
						setTimeout(refresher, 1000);
					  }
					};
					request.onerror = function()
					{
						setTimeout(refresher, 1000);
					};
					request.send();
				}
				(function ready(fn) {
					if (document.readyState != 'loading'){
						fn();
					} else {
						document.addEventListener('DOMContentLoaded', fn);
					}
				})(refresher);
			})(document.getElementById('tableaumodo'), './fonction/tableaumodo.php')
</script>
