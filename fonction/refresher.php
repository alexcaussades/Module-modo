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
			})(document.getElementById('fonction/table'), 'fonction/table.php')
</script>
