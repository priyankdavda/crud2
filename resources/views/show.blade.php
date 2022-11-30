<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
                <td>Update</td>
            </tr>
            @foreach ($members as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td>{{$member->member_name}}</td>
                <td>{{$member->member_email}}</td>
                <td><a href="/delete/{{$member->id}}" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/{{$member->id}}" class="btn btn-success">Edit</a></td>
            </tr>
            @endforeach


        </table>
    </div>
</body>
</html>
