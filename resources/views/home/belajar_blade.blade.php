<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Blade</title>
</head>
<body>
    <h3>Nama: {{ $nama }}</h3>
    <p>Foreach</p>
    <ul>
        @foreach($daftar_hewan as $key=>$value)
        <li>{{$key+1}}. {{$value}}</li>
        @endforeach
    </ul>

    <p>For</p>
    <ul>
        @for($i = 0; $i < 3; $i++)
        <li>{{$i+1}}. {{$daftar_hewan[$i]}}</li>
        @endfor
    </ul>

    <p>For dan IF</p>
    <ul>
        @for($i = 0; $i < 3; $i++)
            @if(($i+1)%2==1)
            <li>{{$i+1}}. {{$daftar_hewan[$i]}}</li>
            @endif
        @endfor
    </ul>
</body>
</html>