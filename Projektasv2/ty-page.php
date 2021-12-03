<!DOCTYPE html>
<html lang="en">
<title>Fotografija</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>

<body>
    <div style="position: absolute; margin-top: 25%; margin-left: 28%">
        <p>Ačiū, Jūsų žinutę gavome. Artimiausiu metu ją peržiūrėsime. Paspauskite <a href="index.php"
                style="color:Green; !important;">čia</a> jeigu neperkelia</p>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("index.php");
        }, 5000); // perkels uz 5sec
    </script>
</body>

</html>