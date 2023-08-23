<?php require_once 'data/photos.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="text-center p-3 my-2">All photos!</h1>
    <div class="container">
        <div class="row">
        <?php foreach($photos as $photo): ?>
            <div class="col-3 my-3">

                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $photo['thumbnailUrl']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title"><?php echo substr($photo['title'],0,20) . "..."; ?></h5>
                        <?php if($photo['albumId']==1): ?>
                        <p class="card-text border p-2 border-primary">album one</p>
                        <?php else: ?>
                        <p class="card-text border p-2 border-danger">album two</p>
                        <?php endif; ?>
                        <a href="<?php echo $photo['url']; ?>" target="blanc" class="btn btn-primary">Go somewhere
                        <?php if(strpos($photo['url'], "600")): ?> 600 x 600
                        <?php else: ?> 400 x 400
                        <?php endif; ?>

                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>