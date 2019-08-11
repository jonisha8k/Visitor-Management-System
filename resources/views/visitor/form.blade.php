<form action="/visitors/save" method="POST">
	@csrf
	ID: <input type:"number" name:"ID"><br>
	Name: <input type:"text" name:"name"><br>
	Address: <input type:"text" name:"address"><br>
	D.O.B:<input type:"date" name:"D.O.B"><br>
	Phone: <input type:"number" name:"phone"><br>
	Gender: 
	<input type="radio" name="gender" value="male"> Male </br>
	<input type="radio" name="gender" value="female"> Female </br>
	<input type="radio" name="gender" value="other"> Other </br>
	Email:<input type:"text" name:"email"><br>
	Office: <input type:"text" name:"office"><br>
	Position: <input type:"text" name:"posotion"><br>
	Created-at: <input type:"date" name:"Created-at"><br>
	Updated-at: <input type:"date" name:"Updated-at"><br>
	<input type="submit" value="submit">
</form>