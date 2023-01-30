<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css") ?>">
    <title>Netflix</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Popularidade: <?= $data['popularity']?>
                        </h5>
                       
                        <h5 class="card-title">
                           Titulo original: <?= $data['original_title']?>
                        </h5>
                       
                        <h5 class="card-title">
                            Filme para adultos: <?php if ($data['adult'] = true){
                                    echo "Sim";
                                }else{
                                    echo "Não";
                                }?>
                        </h5>

                        <h5 class="card-title">
                            Video: 
                        </h5>
                        <iframe src="https://www.youtube.com/embed/<?= $video['results']['0']['key']?>" autoplay="true" class="w-100" style="height: 450px"></iframe>
                        <br>
                        <a href="<?= base_url("")?>" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        <?php
        ?>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>