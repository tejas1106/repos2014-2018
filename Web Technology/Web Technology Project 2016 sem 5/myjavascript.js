function customer_registration()
{
	var reg_name = /^[A-Z][a-z]*$/;
	var reg_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var mob_no = /^[0-9]{10}$/;
	var c_firstname=document.getElementById("c_firstname").value;
	var c_lastname=document.getElementById("c_lastname").value;
	var c_gender;
	if(document.getElementById("c_male").checked==true)
	{
		c_gender="male";
	}
	else if(document.getElementById("c_female").checked==true)
	{
		c_gender="female";
	}
	else
	{
		c_gender="";
	}
	var c_email=document.getElementById("c_email").value;
	var c_mobile=document.getElementById("c_mobile").value;
/* 	var c_dob=document.getElementById("c_dob").value; */
	var c_password=document.getElementById("c_password").value;
	var c_confirmpassword=document.getElementById("c_confirmpassword").value;
	
	if(c_firstname=="")
	{
		document.getElementById("signup_status").innerHTML="*Please enter your firstname in the required field to proceed.";
		$("c_firstname").focus();
	}
	else if(!c_firstname.match(reg_name))
	{
		$("#signup_status").html('Enter valid firstname.');
		$("#c_firstname").focus();
	}
	else if(c_lastname=="")
	{
		document.getElementById("signup_status").innerHTML="*Please enter your lastname in the required field to proceed.";
		$("#c_lastname").focus();
	}
	else if(!c_lastname.match(reg_name))
	{
		$("#signup_status").html('Enter valid lastname.');
		$("#c_lastname").focus();
	}
    else if(c_gender=="")
	{
		document.getElementById("signup_status").innerHTML="Please enter your gender.";
		$("#c_gender").focus();
	}
	else if(c_email=="")
	{
		document.getElementById("signup_status").innerHTML="*Please enter your email in the required field to proceed";
		$("#c_email").focus();
	}
	else if(!c_email.match(reg_mail))
	{
		$("#signup_status").html('Enter valid email id.');
		$("#c_email").focus();
	}
	else if(c_mobile=="")
	{
		document.getElementById("signup_status").innerHTML="*Please enter your mobile in the required field to proceed";
		$("#c_mobile").focus();
	}
	else if(!c_mobile.match(mob_no))
	{
		$("#signup_status").html('Enter valid mobile id.');
		$("#c_mobile").focus();
	}
	/* else if(c_dob=="")
	{
		document.getElementById("signup_status").innerHTML="*Please select date of birth in the required field to proceed";
	} */
	else if(c_password=="")
	{
		document.getElementById("signup_status").innerHTML="*Please enter your password in the required field to proceed";
		$("#c_password").focus();
	}
	else if(c_confirmpassword=="")
	{
		document.getElementById("signup_status").innerHTML="*Please enter confirm password in the required field to proceed";
		$("#c_confirmpassword").focus();
	}
	else if(c_password!=c_confirmpassword)
	{
		document.getElementById("signup_status").innerHTML="*Retype confirm password.";
		$("#c_confirmpassword").focus();
	}
 	else
	{
	 var dataString = 'firstname='+c_firstname+'&lastname='+c_lastname+'&gender='+c_gender+'&email='+c_email+'&mobile='+c_mobile+/* '&dob='+c_dob+ */'&password='+c_password+'&page=customer_registration_page';
		$.ajax({
			type:"POST",
			url:"fillsignupdetails.php",
			data:dataString,
			cache:false,
			success:function(response)
			{
				$("#signup_status").html(response);
			}
		});
	} 
}



function employee_registration()
{
	var reg_name = /^[A-Z][a-z]*$/;
	var reg_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var mob_no = /^[0-9]{10}$/;
	var e_firstname=document.getElementById("e_firstname").value;
	var e_lastname=document.getElementById("e_lastname").value;
	var e_gender;
	if(document.getElementById("e_male").checked==true)
	{
		e_gender="male";
	}
	else if(document.getElementById("e_female").checked==true)
	{
		e_gender="female";
	}
	else
	{
		e_gender="";
	}
	var e_email=document.getElementById("e_email").value;
	var e_mobile=document.getElementById("e_mobile").value;
/* 	var c_dob=document.getElementById("e_dob").value; */
	var e_password=document.getElementById("e_password").value;
	var e_confirmpassword=document.getElementById("e_confirmpassword").value;
	
	if(e_firstname=="")
	{
		document.getElementById("#emp_signup_status").innerHTML="*Please enter your firstname in the required field to proceed.";
		$("#c_firstname").focus();
	}
	else if(!e_firstname.match(reg_name))
	{
		$("#emp_signup_status").html('Enter valid firstname.');
		$("#e_lastname").focus();
	}
	else if(e_lastname=="")
	{
		document.getElementById("emp_signup_status").innerHTML="*Please enter your lastname in the required field to proceed.";
	}
	else if(!e_lastname.match(reg_name))
	{
		$("#emp_signup_status").html('Enter valid lastname.');
		$("#e_lastname").focus();
	}
    else if(e_gender=="")
	{
		document.getElementById("emp_signup_status").innerHTML="*Please enter your gender.";
		$("#e_gender").focus();
	}
	else if(e_email=="")
	{
		document.getElementById("emp_signup_status").innerHTML="*Please enter your email in the required field to proceed.";
		$("#e_email").focus();
	}
	else if(!e_email.match(reg_mail))
	{
		$("#emp_signup_status").html('Enter valid email id.');
		$("#e_email").focus();
	}
	else if(e_mobile=="")
	{
		document.getElementById("emp_signup_status").innerHTML="*Please enter your mobile in the required field to proceed";
		$("#e_mobile").focus();
	}
	else if(!e_mobile.match(mob_no))
	{
		$("#emp_signup_status").html('Enter valid mobile id.');
		$("#e_mobile").focus();
	}
	/* else if(e_dob=="")
	{
		document.getElementById("emp_signup_status").innerHTML="*Please select date of birth in the required field to proceed";
	} */
	else if(e_password=="")
	{
		document.getElementById("emp_signup_status").innerHTML="*Please enter your password in the required field to proceed";
		$("#e_password").focus();
	}
	else if(e_confirmpassword=="")
	{
		document.getElementById("emp_signup_status").innerHTML="*Please enter confirm password in the required field to proceed";
		$("#e_confirmpassword").focus();
	}
	else if(e_password!=e_confirmpassword)
	{
		document.getElementById("emp_signup_status").innerHTML="*Retype confirm password.";
		$("#e_confirmpassword").focus();
	}
	else
	{
	 var dataString = 'firstname='+e_firstname+'&lastname='+e_lastname+'&gender='+e_gender+'&email='+e_email+'&mobile='+e_mobile+/* '&dob='+c_dob+ */'&password='+e_password+'&page=employee_registration_page';
		$.ajax({
			type:"POST",
			url:"fillsignupdetails.php",
			data:dataString,
			cache:false,
			success:function(response)
			{
				$("#emp_signup_status").html(response);
			}
		});
	} 
}


function customer_login()
{
	var reg_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var c_email_customer=document.getElementById("c_email_customer").value;
	var c_password_customer=document.getElementById("c_password_customer").value;

	if(c_email_customer=="")
	{
		$("#login_status").html('Enter username.');
		$("#c_email_customer").focus();
	}
	else if(c_password_customer=="")
	{
		$("#login_status").html('Enter password.');
		$("#c_password_customer").focus();
	}
 	else
	{
	 var dataString = 'username='+c_email_customer+'&password='+c_password_customer+'&page=customer_login_page';
		$.ajax({
			type:"POST",
			url:"fillsignupdetails.php",
			data:dataString,
			cache:false,
			beforeSend:function()
			{
				$("#login_status").html("<p><i class='fa fa-spinner' aria-hidden='true'></i>Loading...Please Wait</p>")
			},
			success:function(response)
			{
				if(response=="successful")
				{
					$("#login_status").html(response);
					location.reload();
				}
				else
				{
					$("#login_status").html("You are not our customer yet.");
				}
			}
		});
	} 
}



function employee_login()
{
	var reg_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var e_email_employee=document.getElementById("e_email_employee").value;
	var e_password_employee=document.getElementById("e_password_employee").value;

	if(e_email_employee=="")
	{
		$("#emp_login_status").html('Enter username.');
		$("#e_email_employee").focus();
	}
	else if(e_password_employee=="")
	{
		$("#emp_login_status").html('Enter password.');
		$("#e_password_employee").focus();
	}
 	else
	{
	 var dataString = 'username='+e_email_employee+'&password='+e_password_employee+'&page=employee_login_page';
		$.ajax({
			type:"POST",
			url:"fillsignupdetails.php",
			data:dataString,
			cache:false,
			beforeSend:function()
			{
				$("#emp_login_status").html("<p><i class='fa fa-spinner' aria-hidden='true'></i>Loading...Please Wait</p>")
			},
			success:function(response)
			{
				if(response=="successful")
				{
				alert(response);
				$("#emp_login_status").html(response);
				location.reload();
				}
				else if(response=="unsuccessful")
				{
					$("#emp_login_status").html("Employee not exists or employee request not accepted yet.");
				}
			}
		});
	} 
}


function admin_login()
{
	var admin_username=document.getElementById("admin_username").value;
	var admin_password=document.getElementById("admin_password").value;
	if(admin_username=="")
	{
		$("#admin_login_status").html("Enter admin username.");
		$("#admin_username").focus();
	}
	else if(admin_password=="")
	{
		$("#admin_login_status").html("Enter admin password.");
		$("#admin_password").focus();
	}
	else
	{
	 var dataString = 'username='+admin_username+'&password='+admin_password+'&page=admin_login_page';
		$.ajax({
			type:"POST",
			url:"fillsignupdetails.php",
			data:dataString,
			cache:false,
			beforeSend:function()
			{
				$("#admin_login_status").html("<p><i class='fa fa-spinner' aria-hidden='true'></i>Loading...Please Wait</p>")
			},
			success:function(response)
			{
				$("#admin_login_status").html(response);
				location.reload();
			}
		});
	} 
}

/* function remove_employee()
{
	$("#remove_button").click(function()
	{
		var x=this.value;
		alert(x);
	});
} */