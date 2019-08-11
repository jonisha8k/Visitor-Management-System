a<form action="/pass/save" method="POST">
	@csrf
	ID: <input type:"number" name:"id">
	Description: <input type:"text" name:"description">
	Type: <input type:"text" name:"type">
	<input type="submit" value="submit">
</form>