<form action="{{route('books.update',$book->id)}}" method="POST">
	{{csrf_field()}}
	{{ method_field('PUT') }}
	<input type="text" name="author" placeholder="author" value="{{$book->author}}">
	<input type="text" name="title" placeholder="title" value="{{$book->title}}"> 

	<button type="submit">submit</button>
</form>
