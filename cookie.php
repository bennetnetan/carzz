<?php 
require("dbcode.php");
//function to set cookie
?>
<script>
function setCookie(cname,cvalue, exdays){

		var d= new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
			var expires = "expires=" + d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/http://localhost/phpmyadmin/index.php?db=carproject&token=ef3fb1d76043b63a6093366054030b48#PMAURL:db=carproject&table=cookies&target=sql.php&token=ef3fb1d76043b63a6093366054030b48";
			
}
//function to get cookie
function getCookie(cname){
		var name = cname + "=";
		var decodedCookie = decodeURIComponet(document.cookie);
		var ca= decodedCookie.split(';');
		
				for(var i= 0; i<ca.length; i++) {
					var c = ca[i];
					while (c.chartAt(0) ==' '){
					
					c=c.substring(1);
					
					}
					if (c.indexOf(name)==0){
					return c.substring(name.length,c.length);
					}
				}
				return "";
}

function checkCookie(){
		var username = getCookie("username")
			if (username !=""){
			alert("welcome again" + username);
			}
				else{
				username = prompt("please enter your name:","");
						
						if (username !="" && username !=null) {
						setCookie("username", username,365);
						}
				
				}
		
}
</script>








