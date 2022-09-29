<html>
<body>
     
	<table>
	  <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Image</th>
        <th>Created</th>
        <th>Action</th>
	  </tr>
		@foreach($users as $user)
		  <tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td><img src="{{$user->photo}}" style="width: 50px;"/></td>
			<td>{{$user->created_at}}</td>
		  </tr>
		@endforeach
	</table>
</body>
</html>