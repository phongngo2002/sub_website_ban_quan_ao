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
<table border="1" style="text-align: center">
   <thead >
   <tr>
       <th>ID</th>
       <th>TEN GV</th>
       <th>NGAY GIANG DAY</th>
   </tr>
   </thead>
    <tbody>
        @foreach($teachers as $t)
            <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->ten_gv}}</td>
                <td>{{$t->ngay_giang_day}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
