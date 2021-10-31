<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>

        @foreach ($developers as $developer)
        <h2>{{$developer->name}}</h2>
        <h2>{{$developer->staff_Role->role_name}}</h2>
        <h2>{{$developer->projects->count()}}</h2>
        @foreach ($developer->projects as $project_details )
        <li>{{$project_details->project_tittle}}</li>
        @endforeach
        @endforeach
    </ul>

</body>
</html>
