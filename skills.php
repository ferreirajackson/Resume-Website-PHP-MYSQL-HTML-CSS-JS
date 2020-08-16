<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <!--Referencing the bootstrap, css and javascript files -->
    <link rel="stylesheet" href="bootrstrap/bootstrap.css">
    <script src="javascript/javascript.js"></script>
    <link rel="stylesheet" href="css/mystylesheet.css">

    <body>
        <div class="margin">
            <!--The following lines of code (or lines 16 to 37) have been sourced from https://getbootstrap.com/docs/4.1/components/navbar/ -->
            <?php include("shared/menu.php"); ?>
            <!--The below code (or lines 41 to 47) was created by me to give spacing betwween the html elements -->
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                        <hr class="home-line" />
                        <p class="title">Skills</p>
                        <hr class="home-line" />
                        <div id="space2">
                        </div>
                    </div>
                </div>
            </div>
            <!--The following lines of code (or lines 52 to 99) have been sourced from https://hackerthemes.com/bootstrap-cheatsheet/ -->
            <div class="p-3 mb-5">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <p><b>SQL</b></p>
                        <div class="progress">
                            <p></p>
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </p>
                        </div>
                        <p><b>JAVA</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                        <p><b>HTML</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <p><b>CSS</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <p><b>JavaScript</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                        <p><b>Bootstrap</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <p><b>JD Edwards</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>
                        <p><b>C</b>C</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                        <p><b>GitHub</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("shared/footer.php"); ?>
    </body>

</html>