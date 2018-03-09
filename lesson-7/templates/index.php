<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homeworks of PHP-1 Lesson-7</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<main class="page-main">
    <section class="container-center">
        <h1>Задание 1</h1>
        <!-- Задание 1.  -->
        <article>
            <?php
            foreach ($book->getRecords() as $record) {
                echo $record->render();
            }
            ?>
        </article>
        <article>
            <form action="/add.php" method="post">
                <fieldset>
                    <legend>Добавить комментарий</legend>
                    <textarea class="fullsize" name="comment" id="" cols="30" rows="4"
                              placeholder="Ваш комментарий"></textarea>
                    <button type="submit" class="btn btn-success">Добавить комментарий</button>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 1.  -->
    </section>


    <div class="test">
        <br>
        <br>

        <?php
        $i = 0;
        $arr = [1, 2];
        $arr[$i] = $i = 6;
        var_dump($arr);

        $i = 3 ;
        $arr = [1, 2];
        $arr[$i] = $i++;
        var_dump($arr);

        $i = 3 ;
        $arr = [1, 2];
        $arr[$i] = ++$i;
        var_dump($arr);
        ?>
    </div>

</main>

<?php
var_dump(__DIR__);
?>

</body>
</html>