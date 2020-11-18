<!doctype html>
<html lang="en">

<head>
    <title>Pre-Final 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<?php
$url = "./ezquiz.json";
$response = file_get_contents($url);
$result = json_decode($response, true);
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($result['tracks']['items'] as $song) {
            ?>
            <div class="col-md-4 my-3">
                <div class="card">
                    <img src="<?= $song['album']['images']['0']['url'] ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><?=$song['album']['name']?></h3>
                        <div class="card-text">
                            <p>Artist : <?=$song['album']['artists'][0]['name']?></p>
                            <p>Release Date : <?=$song['album']['release_date']?></p>
                            <p>Available : <?=count($song['album']['available_markets'])?> countries</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>