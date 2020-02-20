function showmessage(){
    alert("Hi, lets learn Javascript!");
for(var i = 5;i>0;i--){
    alert("Variable I is now: " + i);
    }
}

function Login(){
    var Username = document.getElementById("Username").value;
    var Password = document.getElementById("Password").value;
    alert(Username);

    if(Username == "jepoy" && Password == "asd"){
	location.replace("file:///C:/Users/User/jeps/FirstActivity/MyResume.html");
	}else if(Username == "" || Password == ""){
		alert("Please check if Username or Password is Correct!");
	}else alert("Username or Password is Incorrect!");{
}
}
