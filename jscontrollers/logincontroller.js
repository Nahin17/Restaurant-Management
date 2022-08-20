
				function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("userid").value == ""){
						get("err_userid").innerHTML="User name Required";
						get("err_userid").style.color="red";
						hasError=true;
					}
					if(get("password").value == ""){
						get("err_password").innerHTML="Password Required";
						get("err_password").style.color="red";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{
					get("err_userid").innerHTML="";
					get("err_password").innerHTML="";
				}
				
