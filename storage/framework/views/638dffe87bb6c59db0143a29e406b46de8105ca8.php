<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Redone | home</title>

    <link rel="stylesheet" href="css/app.css">

</head>

<body>

    <?php

    use Illuminate\Support\Facades\DB;

    $hello = "++++++ this is a variable ++++++++"
    ?>


    <!-- stat hhh
    <div id="app">
        <examplee></examplee>



        <h1>*************** redone ***************</h1>
        {{ count }} ***** <?php echo e($hello); ?>



        <h1>*************************************</h1>

    </div>

    end hhh -->

    <button class="trigger">Trigger</button>
    <div class="result">result</div>
    <div class="log">log</div>
    <!-- Attach the event handler to the document: -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <?php
    echo "-------checking------";
    if (DB::connection("mysql_2")->getPdo()) {
        echo "succefully" . DB::connection("mysql_2")->getDatabaseName();
    }

    echo "<br/>";

    // use Illuminate\Support\Facades\DB;

    $users = DB::connection("mysql_2")->select('select * from profile');

    foreach ($users as $user) {
        echo $user->name;
    }

    echo "-------checking------";
    echo "-------------";
    echo "-------------";
    echo "kkaakaak";
    echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo $_SERVER['HTTP_HOST'];
    //    echo $_SERVER['HTTP_REFERER'];

    echo "<pre>";
    // print_r($_SERVER);
    echo "</pre>";
    echo "-------------";

    ?>

    <?php
    {
    }
    ?>
    <div id="app">

        <App></App>
    </div>






    <script src="js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        $(document).ajaxError(function() {
            $(".log").text("Triggered ajaxError handler.");
        });
        // Now, make an Ajax request using any jQuery method:


        $("button.trigger").on("click", function() {
            $("div.result").text("ajax/missing.html");
            setTimeout(function() {
                $("div.result").text("jajajaja");
            }, 1000)
        });
    </script>

</body>

</html>
<?php /**PATH D:\users\redone (D)\Desktop\redone_sarhane\my_projects\laravel and vue projects\my_portfolio\resources\views/welcome.blade.php ENDPATH**/ ?>