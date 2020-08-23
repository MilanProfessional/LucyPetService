<script language="javascript">
function chckuserfun(val) {	
	$.ajax({
		type:"POST",
		url:"checkuser.php",
		data:'uname='+val,
		success:function(data){
			$("#availability").html(data);
			console.log(data);
			var result = $.trim(data);
			if(result=="Username already exists"){
				$("#signup").attr("disabled",true);
				$("#signup").css("backgroundColor","red");
				$("#signup").val("Please use another username");
				
			}
			else{
				$("#signup").attr("disabled",false);
				$("#signup").css("backgroundColor","Blue");
				$("#signup").val("Create Account");
			}		
	}});	
}
	function checkPasswordMatch() {
		var password = document.getElementById("pass").value;
		var conpassword = document.getElementById("conpass").value;
		
		if (password != conpassword) {
		 	document.getElementById("checkpassword").innerHTML = "Password didn't match"; 
			document.getElementById("checkpassword").style.color ="Red";
		} else {
			document.getElementById("checkpassword").innerHTML = "Password Matched";
			document.getElementById("checkpassword").style.color ="white";
		}
	}
	
	function validateForm(name) {
		var fn = document.getElementById("fname").value;
		var ln = document.getElementById("lname").value;
		var us = document.getElementById("uname").value;
		var con = document.getElementById("contact").value;
		var add = document.getElementById("address").value;
		var dis = document.getElementById("distance").value;
		var pas = document.getElementById("pass").value;
		var conpas = document.getElementById("conpass").value;
		if (!fn) {
			document.getElementById("lfname").innerHTML = "First name is empty";
		} else {
			document.getElementById("lfname").innerHTML = "";
		} 
		if (!ln) {
			document.getElementById("llname").innerHTML = "Last name is empty";
		} else {
			document.getElementById("llname").innerHTML = "";
		}
		if (!us) {
			document.getElementById("luname").innerHTML = "User name is empty";
		} else {
			document.getElementById("luname").innerHTML = "";
		}
		if (!con) {
			document.getElementById("lcon").innerHTML = "Contact is empty";
		} else {
			document.getElementById("lcon").innerHTML = "";
		}
		if (!add) {
			document.getElementById("ladd").innerHTML = "Address is empty";
		} else {
			document.getElementById("ladd").innerHTML = "";
		}
		if (!dis) {
			document.getElementById("ldis").innerHTML = "Distance is empty";
		} else {
			document.getElementById("ldis").innerHTML = "";
		}
	}
</script>
<html>
<head>

<script src="../jQuery/jquery-3.1.1.min.js"></script>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body class="background">
<div class="div">
<fieldset>
	<legend>Register here</legend>
	<table border="0" id="style">
		<form method="POST" action="register_action.php" name="register">	
			<tr>
				<td colspan="2"><h1>Create new account</h1></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" class="textbox" name="fname" id="fname"
						onfocusout="validateForm(firstname)" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td><label id="lfname" class="labelcolor"></label></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" class="textbox" name="lname" id="lname"
			        onfocusout="validateForm(lastname)"	required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td><label id="llname" class="labelcolor"></label></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" class="textbox" name="uname" id="uname" 
						onfocusout="validateForm(username)" onkeyup="chckuserfun(this.value)" required="required"></td>
						
						<div id="availability"></div>
			</tr>
			

			<tr>
				<td></td>
				<td><label id="luname" class="labelcolor"></label></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" class="textbox" name="contact" id="contact" 
						onfocusout="validateForm(contact)" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td><label id="lcon" class="labelcolor"></label></td>
			</tr>
			<tr>
				<td>Distance from company(mile)</td>
				<td><input type="text" class="textbox" name="distance" id="distance" onfocusout="validateForm(distance)"
						required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td><label id="ldis" class="labelcolor"></label></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" class="textbox" name="address" id="address" 
						onfocusout="validateForm(address)" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td><label id="ladd" class="labelcolor"></label></td>
			</tr>
			
			
			<tr>
				<td>Enter password</td>
				<td><input type="password" class="textbox" name="password" id="pass" 
						required="required"></td>
			</tr>
			<tr>
				<td>Re-enter password</td>
				<td><input type="password" class="textbox" name="repassword" id="conpass" 
						onkeyup="checkPasswordMatch()" required="required"><br><br></td>
			</tr>
			<tr>
				<td></td>
				<td><label id="checkpassword" class="labelcolor"></label></td>
				
			</tr>
			<tr>
				<td><input type="submit" id = "signup" class="button" name="create" value="Create account"></td>
				<td><input type="reset" class="button" name="regpet" value="Cancel"></td>
				
			</tr>
			
		</form>
		
	</table>
	<p><center><a href="../index.php" class="button"> Lucy Pet Service </a></center></p>
	<p><h3> <tt>  <a href="login.php" class="have" >  Do you have account ? Click Here to Login. </a> </tt> </h3></p>
	

</fieldset>

</div>


</body>
</html>





