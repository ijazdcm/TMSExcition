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

        @foreach ($projects as $project)
             <h2>{{$project->project_tittle}}</h2>
            @foreach ($project->project_members as $pro )
                <li>{{$pro->name}}</li>
            @endforeach
        @endforeach
    </ul>

</body>
</html>
