<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
    <!--Referencing the bootstrap, css and javascript files -->
    <link rel="stylesheet" href="bootrstrap/bootstrap.css">
    <script src="javascript/javascript.js"></script>

    <?php
            $challenge = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
            "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
            "Finland"=>"Helsinki", "France" => "Paris",
            "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
            "Germany" => "Berlin", "Greece" => "Athens",
            "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
            "Portugal"=>"Lisbon", "Spain"=>"Madrid",
            "Sweden"=>"Stockholm", "United Kingdom"=>"London",
            "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
            "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
            "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
            "Austria" => "Vienna", "Poland"=>"Warsaw");
            ?>
        <link rel="stylesheet" href="css/mystylesheet.css">
</head>

<body>
    <div class="margin">
        <!--The following lines of code (or lines 17 to 39) has been sourced from https://getbootstrap.com/docs/4.1/components/navbar/ -->
        <?php include("shared/menu.php"); ?>
        <!--The below code (or lines 41 to 50) was created by me to give spacing betwween the html elements -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <hr class="home-line" />
                    <p class="title">PHP Challenge</p>
                    <hr class="home-line" />
                    <div id="space2">
                    </div>
                </div>
            </div>
        </div>
        <!--Code created to display the experience  - nome, duration and task description (lines 53 to 179) -->
        <div class="container">
            <table>
                <tr>
                    <th>Country</th>
                    <th>City</th>
                </tr>
                <?php foreach($challenge as $country=>$city){
                echo "<tr>";
                echo "<td>" . $country . "</td>";
                echo "<td>" . $city . "</td>";
                echo "</tr>";
            }
            ?>
                </table>
        </div>
    </div>
    <?php include("shared/footer.php"); ?>
</body>

</html>