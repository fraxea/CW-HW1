<html>

    <body>
        <?php

        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $email = $_POST["email"];
        $messsage = $_POST["message"];
        echo "salam" . $first_name . "!";
        $a = 1;
        while (file_exists($a . ".txt")) {
            $a++;
        }
        $m = fopen($a . ".txt", "w");
        fwrite($m, $first_name . "\n");
        fwrite($m, $last_name . "\n");
        fwrite($m, $email . "\n");
        fwrite($m, $messsage . "\n");
        fclose($m);

        
        ?>
    </body>
</html>