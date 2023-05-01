<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<script>
		
		var jsonObj = {
			"firstname":"ankush",
			"lastname":"lunawath",
			"age":27,
			"profession":"Khali",
			"array":["ramesh","suresh","naresh"]
		}
		// document.write(jsonObj);

		// modifying the jsonObj data
		jsonObj.firstname = "Ankush Jain";
		jsonObj.profession = "Web Developer";

		// Adding new key value pair
		jsonObj.degree = "B.Tech In Mechanical Engineering"

		// Deletig key value pair
		delete jsonObj.profession

		for(show in jsonObj){
			document.write(jsonObj[show]+ "<br>");
		}

		// Working with Arrays
		var jsonObject = {
			"FIFA":[
			{
				"country":"Brazil",
				"bestplayer":"Neymar"
			},
			{
				"country":"Portugal",
				"bestplayer":"Ronaldo"
			},
			{
				"country":"Argentina",
				"bestplayer":"Messi"
			}
			]
		}

		// document.write(jsonObject.FIFA[2].country);
		for(players in jsonObject.FIFA){
			document.write(players+"-")
			for(innerplayers in jsonObject.FIFA[players]){
				document.write(jsonObject.FIFA[players][innerplayers]+"<br>")
			}
		}
	</script>
</body>
</html>