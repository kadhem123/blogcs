<?php
include("config.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Article</title>
</head>

<body>
    <h3 class="text-primary">Affichage Article</h3>
    <div class="container">
        <div class="row">
            <?php
            $sql = "Select * from article join catégorie on article.id_catégorie=catégorie.id_catégorie";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <?php echo $row["nom_catégorie"] ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["nom_article"] ?></h5>
                            <p class="card-text"><?php echo $row["description_article"] ?></p>
                        </div>
                    </div>  </div>
        
<?php } ?>      
        </div>
    </div>
</body>

</html>