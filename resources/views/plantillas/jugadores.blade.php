<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de @yield('title') </title>
</head>
<body>
    
    <center>
    <table border=1>
        <tr>
            <td colspan=3><center><b> @yield('table') </b</center></td>
        </tr>
        <tr>
            <td><center><b> @yield('No') </b</center></td>
            <td><center><b> @yield('Nombre') </b</center></td>
            <td><center><b> @yield('posicion') </b</center></td>
        </tr>

        @for($i=0;$i<count($jugador);$i++)
        <tr>
            <td><b>{{$i+1}} </b></td>
            <td>{{$jugador[$i]}}</td>
            <td>{{$Posicion[$i]}} </td>
        </tr>
        @endfor

        <tr>
            <td colspan=3><center><b> @yield('footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>