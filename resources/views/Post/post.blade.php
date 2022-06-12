<table border>
	<tr>
		<th>NO</th>
		<th>Title</th>
		<th>Description</th>
	</tr>
	@foreach ($posts as $key => $post)
	<tr>
		<td>{{ $key }}</td>
		<td><a href="{{ url('posts/'.$post->id) }}">{{ $post->title }}</a></td>
		<td>{{ $post->description }}</td>
	</tr>
	@endforeach
</table>
