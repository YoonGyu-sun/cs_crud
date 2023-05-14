<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>Ajax Request</title>
	<script>
		function sendRequest() {
			var httpRequest = new XMLHttpRequest();
			httpRequest.onreadystatechange = function() {
				if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200 ) {
					document.getElementById("text").innerHTML = httpRequest.responseText;
				}
			};
			httpRequest.open("GET", "/cs/ajax/ajax.php");
			httpRequest.send();
		}
		window.setInterval("sendRequest()", 580);	// 매 0.5초마다 Ajax 요청을 보냄.

    </script>
</head>

<body>

	<h1>주기적으로 Ajax 요청하기</h1>
	<p id="text"></p>
	
</body>

</html>