
<html>
	<head>
		<title>Formular fuer Personalien </title>
		<style>
		
		form{
			padding:20px 30px 20px 30px;
			background-color: 	#ADFF2F;
		} 
		input{
			background-color: #00FF00;
		}
		</style>
		<script language="javascript" type="text/javascript">
		var leere_felder = "";
		function validierung (){
			if(Validator("v_name") && Validator("n_name") && Validator("email")){
				document.getElementById("formular").submit();
			}else{
				alert("Felder dürfen nicht leer sein.");
			}
		
		};
		function Validator(id){
			if(document.getElementById(id).value != ""){
				return true;
			}else{
				return false;
			}
			
		};
		
		</script>
	</head>
	<body>
	
		<form id="formular" action="index.php/personel_controller/test" method = 'post' onsubmit="return validierung();" >
			<input id="v_name" name="v_name" type="text" placeholder="Vorname">
			<input id="n_name" name="n_name" type="text" placeholder="Nachname">
			<input id="email" name="email" type="email" placeholder="Email">
			<input type="submit" value="Senden">
		</form>
	</body>
</html>
