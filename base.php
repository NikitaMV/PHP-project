<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Бел-инфо</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<script>
		
		function funcBefore()
		{
			$("#square_of_city").val("Поиск...");
		}
		
		function funcSuccess (data1)
		{			
			$("#square_of_city").val(data1);			
		}
		
		$(document).ready
		(
			function() 
			{
				$("#load").bind("click", function()
				{
					if(ValidateForm())
					{					
						var city_name = document.forms["myForm"]["city"].value;	
					
						$.ajax({
						url: "controller.php",
						type: "POST",
						data: ({city: city_name}),
						dataType: "html",
						beforeSend: funcBefore,
						success: funcSuccess
						});
					
					}
				}
				);
			
			}
		);
		
		
		function ValidateForm()
		{
			var city = document.forms["myForm"]["city"].value;				
			
			if(city.length<=2)
			{
				alert("Имя города должно быть больше двух букв.");
				return false;
			}			
			else
				return true;			
		}	
		
		</script>
		
		<style>
			
		body 
		{
			background: url(main_img.jpg);	
			background-size: 100%;					
			resize: false;
			font-size:20px;					
		}
				 
		h1   
		{
			text-align: center;
			font-family: serif;
			color: MidnightBlue;					
			text-transform: uppercase;					
			position:relative;
			margin-top: 110px;
			font-size: 28pt;					
		}

		h2   
		{
			color: #d1633c;
			font-size: lem;
		}
				 
		p.t1 
		{
			font-size: 18pt;
			text-align: center;	 
		}
				 
		p.t2 
		{
			font-size: 18pt;
			text-align: center;					 
		}
				 
		table 
		{	
			table-layout: fixed;				 
			width: 80%; 
			background: #4682B4; 
			color: #191970; 
			border-spacing: 2px; 					
			font-size: 20pt;
		}
				 
		td, th 
		{					
			background: #87CEEB; 
			padding: 10px; 					
		}
				
		a
		{
			text-decoration: none;
		}
				
		input.b1
		{
			text-decoration:none; 
			text-align:center; 
			padding:15px 41px; 
			border:solid 1px #37b3e8; 
			-webkit-border-radius:50px;
			-moz-border-radius:50px; 
			border-radius: 50px; 
			font:20px Arial, Helvetica, sans-serif; 
			font-weight:bold; 
			color:#96f6ff; 
			background-color:#d1e7ff; 
			background-image: -moz-linear-gradient(top, #d1e7ff 0%, #1982A5 100%); 
			background-image: -webkit-linear-gradient(top, #d1e7ff 0%, #1982A5 100%); 
			background-image: -o-linear-gradient(top, #d1e7ff 0%, #1982A5 100%); 
			background-image: -ms-linear-gradient(top, #d1e7ff 0% ,#1982A5 100%); 
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1982A5', endColorstr='#1982A5',GradientType=0 ); 
			background-image: linear-gradient(top, #d1e7ff 0% ,#1982A5 100%);   
			-webkit-box-shadow:0px 0px -7px #bababa, inset 0px 0px -3px #ffffff; 
			-moz-box-shadow: 0px 0px -7px #bababa,  inset 0px 0px -3px #ffffff;  
			box-shadow:0px 0px -7px #bababa, inset 0px 0px -3px #ffffff;  
			outline: none;
		}
				
		div.field
		{
			line-height:25px;
		}
				
		label 
		{
			padding-right:10px; 
		}					

		</style>
	</head>	
	
	<body>
	
		<table border="1" align="center">
			<tr>
			<th><a href="index.php">Главная</a></th>
			<th><a href="base.php">База статистики</a></th>
			<th><a href="q&a.php">Вопросы и ответы</a></th>
			</tr>
		</table>
	
		<h1>Информационная база данных</h1>
	
		<p class="t1">
			Введите название города, чтобы узнать его площадь.
		</p>	
	
		<form name="myForm" align="center" action=""  method="post">
		
			<div class="field">
			<label>Название города:</label><input type="text" name="city" required /><br/>
			</div>
	
			<div class="field">
			<label>Площадь города:</label><input readonly type="text" id="square_of_city" name="square"/><br/><br/>
			</div>
	
			<div class="field">
			<input  id="load" class="b1" type="button"  name="done" value="Узнать"/><br/>
			</div>
			
		</form>  
		
	</body>

</html>