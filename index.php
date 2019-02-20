<?include('functions.php')?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atom.Tracker</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">

        <header class="row">

            <div class="col-xs-6">
                <a href="#">Enter Restore Mode</a>
            </div>
            <div class="col-6 text-right"> <!-- Bootstrap 4 syntax -->
                Total Time:
            </div>

        </header>

        <div class="row">
            <form id="form-new">
                <!-- Can not get same width as in the tutorial -->
                <div class="col-xs-10">
                    <input id="task" name="task" class="form-control" placeholder="Enter new task name...">
                </div>
                <div class="col-xs-2">
                    <button type="submit" class="btn btn-block btn-success"><i class="fa fa-play"></i></button><!-- Can't get the i function to work on the buttons -->
                </div>

            </form>
        </div>
        <hr>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Time</th>
                    <th colspan="2">Controls</th>
                </tr>
            </thead>
            <tbody>

            <?
                $data = file_get_contents('data.json');

                $array = json_decode($data, 1);

                foreach($array as $task){?>


                <tr>
                    <td><?=$task['name']?></td><!-- I get nothing printed as in Video 10 (6:49)-->
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td><button class="btn btn-primary">Stop</button></td>
                    <td><button class="btn btn-danger">X</button></td>
                </tr>
            <?}?>
            </tbody>
        </table>

    </div>



<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<!-- APP SCRIPTS -->
<script src="atom.tracker.js"></script>

<!-- BOOTSTRAP JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
