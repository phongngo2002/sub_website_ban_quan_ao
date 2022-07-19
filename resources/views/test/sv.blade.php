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
<table class="text-center">
    <thead>
    <tr class="border-2 border-amber-500">
        <th style="width: 100px">ID</th>
        <th style="width: 200px">NAME</th>
    </tr>
    </thead>
    <tbody>
    @foreach($players as $p)
    <tr class="border-2 border-b-cyan-500">
        <td>
            {{$p->id}}
        </td>

        <td>
            {{$p->name}}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>

