<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Update Members</h1>
        {{--  <form method="POST" action="{{ url('/store') }}">  --}}
        <form method="POST" action="/update/{{ $members->id }}">

            {{--  <form method="POST" action="{{ url('/store') }}">  --}}
            @csrf
            <div class="mb-3">
                <label><b>Namw</b></label>
                <input type="text" name="name" class="form-control" value="{{ $members->member_name }}">
            </div>
            <div class="mb-3">
                <label><b>Email</b></label>
                <input type="text" name="email" class="form-control" value="{{ $members->member_email }}">
            </div>
            <input type="submit" name="update" class="btn btn-success" value="Update">
        </form>
    </div>
</body>
</html>
