<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<script>
	// var sendData = {name:"Ankush",lname:"Lunawath"}
	// var changeData = JSON.stringify(sendData);
	// var jsObj = JSON.parse(changeData);

	// document.write(jsObj.lname);

	// window.location="mySend.php?values="+changeData;

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var data = xhttp.responseText;	
       var response = JSON.parse(data);
       var employees = response.employee; // employee from myjson3.php file
       console.log(employees)

       var showData ="";
       for(var i=0;i<employees.length;i++){
       	showData += employees[i].age +"<br>";
       }
       document.write(showData)
    }
};
xhttp.open("GET", "myjson3.json", true);
xhttp.send();

	</script>
</body>
</html>