<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--Referencing the bootstrap, css and javascript files -->
    <link rel="stylesheet" href="bootrstrap/bootstrap.css">
    <script src="javascript/javascript.js"></script>
    <link rel="stylesheet" href="css/mystylesheet.css">
</head>

<body>
    <div class="margin">
        <!--The following lines of code (or lines 17 to 39) have been sourced from https://getbootstrap.com/docs/4.1/components/navbar/ -->
        <?php include("shared/menu.php"); ?>
        <!--The below code (or lines 41 to 47) was created by me to give spacing betwween the html elements -->
        <div class="row">
            <div class=" col-xs-12 col-sm-12 ">
                <div id="space">
                    <div class="block-title">
                    </div>
                </div>
            </div>
        </div>
        <!--Code created as a resume`s introduction - Picture and brief description of knowledge (lines 50 to 76) -->
        <div class="row">
            <div class="col-6">
                <img class="pic" src="images/profile.jpg" alt="">
            </div>
            <div class="col-6">
                <div class=" col-xs-12 col-sm-12 ">
                    <div id="space2">
                        <div class="block-title">
                        </div>
                    </div>
                </div>
                <div class="description">
                    <p><i>Jackson Ferreira</i></p>
                    <hr class="linha1" />
                    <h2>
                        <p>Web Developer</p>
                        <hr class="linha1" />
                    </h2>
                    <p id="align">Bilingual (Portuguese and English) IT professional with a Degree in Information Technology Management and over 3 years of experience as System Developer. Successfully promoted the career of ERP Developer and System Analyst, acquired
                        experience and know-how due to managing small teams of development and providing services as deployment, maintenance, and support to the operating systems for workstations and servers. My on-the-job experience has additionally
                        afforded me skills in customer service, critical thinking, and Technical writing and reading.
                    </p>
                    <hr class="linha1" />
                    <a href="files/IT CV - Jackson Ferreira dos Santos.docx" class="btn btn-outline-danger" download="Acme Documentation (ver. 2.0.1).txt" onclick="downloadCv()">Download CV</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("shared/footer.php"); ?>
</body>

</html>