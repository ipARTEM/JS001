<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт Артёма Химина</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		var letters=["0", "2", "3", "4", "5", "6", "7", "8", "9", "z", "x", "c", "v", "Z", "X", "C", "V", "1"];


		function readInt()
		{
			return +document.getElementById("userAnswer").value;
		}
		function write(text)
		{
			document.getElementById("passw").innerHTML=text;
		}


		function getRandomNunber(max)
		{
			return Math.round(Math.random()*max);
		}

		function generateText(letters, length)
		{
			var text="";
			for(var i=0; i<length;i++)
			{
				var n=getRandomNunber(letters.length-1);
				text=text+letters[n];
			}
			return text;
		}
		function generate()
		{
			var length=readInt();
			var passw=generateText(letters, length);
			write(passw);
		}




	</script>
</head>
<body >
	<div class="content">
		<?php
		include "menu.php";
		?>
	</div>

		<div class="contentWrap">
			<div class="content">
				<div class="center">
					<h1>Генератор случайных паролей</h1>

					<div class="box">
						<p id="info">Укажите длину пароля</p>
						<input type="text" id="userAnswer">
						<br>
						<h3 id="passw"></h3>
						<a href="#" onclick="generate();" >Генерировать</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>




	


	<div class="footer">
		Copyright &copy; <?php echo date("Y");?> Artem Khimin
	</div>

</body>
</html>