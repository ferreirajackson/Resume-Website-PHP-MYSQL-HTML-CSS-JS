<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work experience</title>
    <!--Referencing the bootstrap, css and javascript files -->
    <link rel="stylesheet" href="bootrstrap/bootstrap.css">
    <script src="javascript/javascript.js"></script>
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
                    <p class="title">Experience</p>
                    <hr class="home-line" />
                    <div id="space2">
                    </div>
                </div>
            </div>
        </div>
        <!--Code created to display the experience  - nome, duration and task description (lines 53 to 179) -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="p-3 mb-5 bg-white">
                        <a class="btn btn-outline-danger" onmouseover="experienceFirst()" onmouseout="cleanField()" href="https://www.4property.com/">4Property</a>
                        <i id="id1">July 2018 - August 2018</i><i id="id2"></i>
                        <div id="align">
                            <p>
                                <h3>IT Assistant</h3>
                                <hr class="linha1" />
                                <p>Company focused on Front-end systems and general customization of the real estate business.
                                    <ul>
                                        <li>Effectively developed technical and functional documents;</li>
                                        <li>Assisted the guidelines and objectives of project in progress; Company focused on Front-end systems and general customization of the real estate business.
                                        </li>
                                        <li>Assisted in keeping IT support process documents up-to-date;</li>
                                        <li>Worked with hardware and software sales;</li>
                                    </ul>
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 mb-5 bg-white">
                        <!--The functions below were created to calculate the period of time worked - they are attached in the js file -->
                        <a class="btn btn-outline-danger" onmouseover="experienceSecond()" onmouseout="cleanField()" href="https://actionsys.com.br/">ActionSystem</a>
                        <i id="id3">January 2017 - June 2018</i><i id="id4"></i>
                        <div id="align">
                            <p>
                                <h3>Software Consultant</h3>
                                <hr class="linha1" />
                                <p>Company focused on systems deployment and customization for JD Edwards ERP which develops solutions for large companies (eg: Cargill - cargill.com.br | Vopak - vopak.com.br).
                                    <ul>
                                        <li>Effectively developed and documented detailed functional and technician specifications across the broader group that bridge business requirements and system functionally;</li>
                                        <li>Point of contact for the IT support services being delivered to the business team ensuring all services levels were being maintained;
                                        </li>
                                        <li>Trained users and support team by teaching all features and the common error messages and how to solve it;</li>
                                    </ul>
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="p-3 mb-5 bg-white">
                        <a class="btn btn-outline-danger" onmouseover="experienceThird()" onmouseout="cleanField()" href="https://www.reymaquinas.com.br/">ReyMaquinas</a>
                        <i id="id5">November 2015 - May 2016</i><i id="id6"></i>
                        <div id="align">
                            <p>
                                <h3>Technical Assistant</h3>
                                <hr class="linha1" />
                                <p>Rey Máquinas is a technical assistance and store of computer articles and Brazilian automotive.
                                    <ul>
                                        <li>Helped maintain a physical inventory of IT hardware (computers, peripherals, and accessories); </li>
                                        <li>Assisted in keeping IT support process documents up-to-date;</li>
                                        <li>Solved basic troubleshooting of network and voice infrastructure;</li>
                                    </ul>
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 mb-5 bg-white">
                        <a class="btn btn-outline-danger" onmouseover="experienceFourth()" onmouseout="cleanField()" href="http://www.bravox.com.br/">Bravox</a>
                        <i id="id7">March 2015 - April 2016</i><i id="id8"></i>
                        <div id="align">
                            <p>
                                <h3>Trainee</h3>
                                <hr class="linha1" />
                                <p>Bravox is a Brazilian automotive high-support company, residential and professional services.
                                    <ul>
                                        <li>General office duties as required;</li>
                                        <li>Contacted customers for purchase order numbers or other information </li>
                                        <li>Assisted with the preparation of financial records </li>
                                        <li> Assisted the line manager with general administration</li>
                                    </ul>
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                        <hr class="home-line" />
                        <p class="title">Projects</p>
                        <hr class="home-line" />
                        <div id="space2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="media">
                        <a href="https://github.com/ferreirajackson/Project/issues/1">
                            <img src="images/file.jpg" class="align-self-start mr-3" alt="file1">
                        </a>
                        <div class="media-body">
                            <h5 class="mt-0">Boletos Action </h5>
                            <p id="align">Created a payment product in ERP JD Edwards for the client Cargill The company had a system who made the issue of charges through 'boletos' in a separate system. The purpose of the project was to create a system similar to
                                the one in force but inside JD Edwards. So that in this way the transition between systems is eliminated. Programs and reports were created regarding the registration for the issuance of the collection document.</p>
                            <p class="bottom">November 2015 - April 2016;</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="media">
                        <a href="https://github.com/ferreirajackson/Project/issues/2">
                            <img src="images/file.jpg" file.jpgclass="align-self-start mr-3" alt="file2">
                        </a>
                        <div class="media-body">
                            <h5 class="mt-0">Sensation Sports </h5>
                            <p id="align">A new company in the sports sector was created and structured with the business and marketing plan taught in the administration course. From the creation of principles such as mission, vision and values of the company to the
                                creation of commercial brands for prospecting new clients.
                                <p class="bottom">January 2013 - June 2013;</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("shared/footer.php"); ?>
</body>

</html>