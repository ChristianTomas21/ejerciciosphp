<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>
            <?php
            $paises = [
                "España" => [
                    "moneda"=> "pesetas",
                    "habitantes"=> "4000000"],
                "Francia" => [
                    "moneda"=> "francos franceses",
                    "habitantes"=> "6700000"],
                "La India" => [
                    "moneda"=> "rupias",
                    "habitantes"=> "14000000"]
            ];
            foreach($paises as $kpais => $vpais){
                echo "<br>Pais: ". $kpais;
                echo "<br> con moneda: ". $vpais["moneda"];
                echo "<br> con habitantes: ". $vpais["habitantes"];

            }
            ?>
        </p>
    </body>
</html>