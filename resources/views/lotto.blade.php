<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lotto</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <h2>Loto</h2>

            </div>
            <div class="row">
                <h2>Winner {{$winner[0]}} - {{$winner[1]}}</h2>
            </div>
            <div class="row ">
                <h3>El Mas que más salen</h3>
                <br>
                <table class="table col-md-2">
                    <thead>

                        <tr>
                            @foreach($plus as $number=>$count)
                                <td>{{$number}}</td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($plus as $number=>$count)
                                <td>{{$count}}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <h3>Los #'s que mas salen</h3>
                <table class="table">
                    <thead>

                        <tr>
                            @foreach($games as $number=>$count)
                                    <td>{{$number}}</td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($games as $number=>$count)
                                    <td>{{$count}}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <h3>Los #'s que mas salen</h3>
                <table class="col-md-4">

                    <tbody>
                    @foreach($numbers as $games)
                        <tr>
                            <td>{{$games[1]}}</td>
                            <td>{{$games[0]}}</td>
                            <td>{{$games[2]}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
