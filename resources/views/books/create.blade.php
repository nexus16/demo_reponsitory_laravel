<form action="{{route('books.store')}}" method="POST">
	{{csrf_field()}}
	<input type="text" name="author" placeholder="author">
	<input type="text" name="title" placeholder="title"> 

	<button type="submit">submit</button>
</form>
