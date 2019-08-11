<form action="/appointments/save" method="POST">
	@csrf
	ID: <input type:"number" name:"ID">
	Name: <input type:"text" name:"name">
	Address: <input type:"text" name:"address">
	D.O.B: <input type:"date" name:"D.O.B">
	Phone: <input type:"number" name:"phone">
	Gender: 
	<input type="radio" name="gender" value="male"> Male </br>
	<input type="radio" name="gender" value="female"> Female </br>
	<input type="radio" name="gender" value="other"> Other </br>
	Email:<input type:"text" name:"email">
	Office: <input type:"text" name:"office">
	Position: <input type:"text" name:"posotion">
	Created-at: <input type:"date" name:"Created-at">
	Updated-at: <input type:"date" name:"Updated-at">
	<input type="submit" value="submit">
</form>