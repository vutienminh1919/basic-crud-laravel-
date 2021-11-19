<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
{{--    <a href="{{route('userList')}}">User list</a>--}}
    <a href="{{route('users.create')}}">them moi user</a>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="3">Action</th>
    </thead>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a  href="{{route("users.showFormEdit",$user->id)}}">Edit</a></td>
            <td><a href="{{route('users.show',$user->id)}}">Detail</a></td>
            <td><a onclick="return confirm(' Are you sure ? ')" href="{{route('users.delete',$user->id)}}">Delete</a></td>

        </tr>
    @endforeach
</table>

</body>
</html>
