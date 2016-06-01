<html>
<head>
    <title>Test Lambda Functions Version 4</title>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<?php
if(count($_POST)) {
    $enpoint = 'https://jcsl6lajz7.execute-api.us-west-2.amazonaws.com/dev/v4/';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $enpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-api-key: J0xBy3SxNp8Sis2enTBDn7PRK5rMjQC4eqMLYele'));
//    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $result = curl_exec($ch);

    if ($error = curl_error($ch)) {
        echo $error;
    } else {
        echo '<img src="'.$result.'" />';
    }

    curl_close($ch);
} else {
    echo '<img src="https://s3-us-west-2.amazonaws.com/thinhnv/IMG_5715.JPG" />';
}
?>
    <div class="container-fluid">
        <form method="post">
            <div class="no-display">
                <input type="hidden" name="operation" value="crop_circle">
                <input type="hidden" name="inputExtension" value="jpg">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Image" value="https://s3-us-west-2.amazonaws.com/thinhnv/IMG_5715.JPG" readonly>
            </div>
            <div class="form-group">
                <label for="resizeWidth">Resize Width</label>
                <input type="text" class="form-control" id="resizeWidth" name="resizeWidth" placeholder="Resize Width" value="250">
            </div>
            <div class="form-group">
                <label for="resizeHeight">Resize Width</label>
                <input type="text" class="form-control" id="resizeHeight" name="resizeHeight" placeholder="Resize Height" value="179">
            </div>
            <div class="form-group">
                <label for="top">Top</label>
                <input type="text" class="form-control" id="top" name="top" placeholder="Top" value="14">
            </div>
            <div class="form-group">
                <label for="left">Left</label>
                <input type="text" class="form-control" id="left" name="left" placeholder="Left" value="52">
            </div>
            <div class="form-group">
                <label for="diameter">Diameter</label>
                <input type="text" class="form-control" id="diameter" name="diameter" placeholder="Diameter" value="100">
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>