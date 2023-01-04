<!--Tạo HTML và link với CSS
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>API google</title>
    <!--https://getbootstrap.com/docs/5.1/getting-started/introduction/ (lấy thông tin css)
    https://newsapi.org/s/google-news-api
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $url='https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=1cc6233395a94e609c3d8c543853e81e';
        $reponse=file_get_contents($url);
        $newdata=json_decode($reponse);
    ?>a
    <div class="container">
        <h1>Lấy tin tức theo API</h1>
    </div>
    <div class="container-left">
        <?php
            foreach ($newdata->articles as $News) {      
        ?>
        <div class="row NewGrid">
            <div class="col-md-3"> 
                <img src="<?php echo $News->urlToImage ?>" alt="News thumbnail">
            </div>
            <div class="col-md-9">
                <h2>Title: <?php echo $News->title  ?></h2>
                <h5>Description: <?php echo $News->description  ?></h5>
                <p>Content: <?php echo $News->content  ?> </p>
                <h6>Aurther: <?php echo $News->author  ?></h6>
                <h6>Published: <?php echo $News->publishedAt  ?></h6>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</body>
</html>
