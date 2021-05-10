<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт Артёма Химина</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		var answer=parseInt(Math.random()*100);
		var tryCount=0;
		var maxTryCount=3;

		function readInt()
		{
			var number=document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(text)
		{
			document.getElementById("info").innerHTML=text;
		}

		function hide(id)
		{
			document.getElementById(id).style.display="none";
		}

		function guess()
		{
			tryCount++;

			var userAnswer=readInt();
			if(userAnswer==answer)
			{
				write("<b>Поздравляем, Вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			}
			else if(tryCount>=maxTryCount)
			{
				write("Вы проиграли<br>Правельный ответ: "+answer);
				hide("button");
				hide("userAnswer");
			}

			else if(userAnswer>answer)
			{
				write("Вы ввели большее число<br> Попробуйте ещё раз. Введите число от 1 до 100");

			}
			else if(userAnswer<answer)
			{
				write("Вы ввели меленькое число<br> Попробуйте ещё раз. Введите число от 1 до 100");
			}
		}


		/*function guess2()
		{	
			write("Всем привет");
			var a=readInt();
			alert(a);
		}

		*/
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
					<h1>Игра Угадайка</h1>

					<div class="box">
						<p id="info">Угадай число от 0 до 100</p>
						<input type="text" id="userAnswer">
						<br>
						<a href="#" onclick="guess();" id="button">Начать</a>
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