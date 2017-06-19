<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="deco.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="googlemap.js"></script>
    <script src="slide.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWtF2rkocgTSevitibd6exLUM8-8ylIAA&callback=myMap"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
</head>

<body>

    <div class="form-group">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>CONTENT MANAGE</h1>
            <form method="post" action="adminstrator">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input class="form-control" type="text" name="user"><br>
                <input type="password" class="form-control" name="password"><br>
                <center>
                    <input type="submit" class="btn" style="background-color: lightgreen;color: white;">
                </center>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>

</html>