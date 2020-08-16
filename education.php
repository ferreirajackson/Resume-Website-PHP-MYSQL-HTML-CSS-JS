<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <!--Referencing the bootstrap, css and javascript files -->
    <link rel="stylesheet" href="bootrstrap/bootstrap.css">
    <script src="javascript/javascript.js"></script>
    <link rel="stylesheet" href="css/mystylesheet.css">
</head>
<body>
    <div class="margin">
        <!--The following lines of code (or lines 17 to 39) has been sourced from https://getbootstrap.com/docs/4.1/components/navbar/ -->
        <?php include("shared/menu.php"); ?>
        <!--The below code (or lines 41 to 49) was created by me to give spacing betwween the html elements -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <hr class="home-line" />
                    <p class="title">Education</p>
                    <hr class="home-line" />
                    <div id="space2"></div>
                </div>
            </div>
        </div>
        <!--Code created to display the the courses, level of graduation and cetirfications taken - (lines 52 to 167) -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 ">
                <div id="space2">
                    <div class="block-title">
                        <h3 class="subtitle">Graduations</h3>
                        <hr class="linha-subtitle" />
                    </div>
                </div>
            </div>
            <div class="col">
                <!--All the courses (line 63 to 165) from the "card" property sourced from https://getbootstrap.com/docs/4.0/components/card/ -->
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 8)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Science in Computing</h4>
                        <p class="card-text">CCT College Dublin</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 6)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">IT management</h4>
                        <p class="card-text">Faculdade Sumaré</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 5)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Administration Diploma</h4>
                        <p class="card-text">Senai Ítalo Bologna</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="space2"></div>
        <div class="row">
            <div class=" col-xs-12 col-sm-12 ">
                <div id="space2">
                    <div class="block-title">
                        <h3 class="subtitle">Courses</h3>
                        <hr class="linha-subtitle" />
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 5)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">ITIL v3</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 5)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">COBIT 5</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 5)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Cloud Computing</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 4)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Business Analysis</h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="space2"></div>
        <div class="row">
            <div class=" col-xs-12 col-sm-12 ">
                <div id="space2">
                    <div class="block-title">
                        <h3 class="subtitle">Certifications</h3>
                        <hr class="linha-subtitle" />
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        (NFQ Level 5)
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">ITIL v3</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    <?php include("shared/footer.php"); ?>
</body>

</html>