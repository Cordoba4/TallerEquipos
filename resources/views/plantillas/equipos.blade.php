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
            <th colspan=3><center> @yield('table') </center></th>
        </tr>
      
        

        @foreach($Equipo as $E)
        
             @php ($con++)
        
            @if($con==2)
                 <tr></tr>
                 @php ($con=0)
            @endif
        
            <td><center>{{$E}}</center></td>

        @endforeach
       
        <tr>
            <th colspan=3><center>@yield('footer')</center></th>
        </tr>
    </table>
    </center>
    
</body>
</html>