/*function that shows the alert when the download button is clicked*/
function downloadCv() {
    alert("Click on ok to download the CV!");
}

/*The fourth functions below take the value from the html and send to the main function that calculates the period*/
function experienceFirst() {
    var abstraction = document.getElementById("id1");
    var content = abstraction.textContent;
    var monthAmount = calculatesPeriod(content);
    document.getElementById("id2").innerHTML = "  |  " + monthAmount + " months";
}

function experienceSecond() {
    var abstraction = document.getElementById("id3");
    var content = abstraction.textContent;
    var monthAmount = calculatesPeriod(content);
    document.getElementById("id4").innerHTML = "  |  " + monthAmount + " months";
}

function experienceThird() {
    var abstraction = document.getElementById("id5");
    var content = abstraction.textContent;
    var monthAmount = calculatesPeriod(content);
    document.getElementById("id6").innerHTML = "  |  " + monthAmount + " months";
}

function experienceFourth() {
    var abstraction = document.getElementById("id7");
    var content = abstraction.textContent;
    var monthAmount = calculatesPeriod(content);
    document.getElementById("id8").innerHTML = "  |  " + monthAmount + " months";
}

/*this function reads the month and year information and return the amount of months worked during this period*/
function calculatesPeriod(content) {
    /*arrays used to take the month information from*/
    var monthsAbr = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var monthNum = ["13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24"];
    var yearSame, monthIni, monthFin, monthAmount, monthName1, monthName2, dashPos, monthTemp;
    dashPos = content.indexOf("-");
    var posIni = content.indexOf("20");
    var posFin = content.lastIndexOf("20");
    var yearIni = content.substr(posIni + 2, 2);
    var yearFin = content.substr(posFin + 2, 2);

    /*validates if year is the same*/
    if (yearIni == yearFin) {
        yearSame = true;
        monthAmount = monthFin - monthIni;
    } else {
        yearSame = false;
    }
    //takes the first three letters
    monthName1 = content.substr(0, 3);
    monthName2 = content.substr(dashPos + 2, 3);

    var counter = 0;
    //do the comparison
    while (counter < monthsAbr.length) {
        monthTemp = monthsAbr[counter];
        if (monthName1 == monthTemp) {
            monthIni = counter + 1;
        } else if (monthName2 == monthTemp && yearSame == true) {
            monthFin = counter + 1;
        } else if (monthName2 == monthTemp && yearSame == false) {
            monthFin = monthNum[counter];
        }
        counter++;
    }

    //calculates the amount of months worked
    monthAmount = monthFin - monthIni;
    return monthAmount;
}

//clean the fiels on the onmouseout event
function cleanField() {
    var content = null;
    document.getElementById("id2").innerHTML = content;
    document.getElementById("id4").innerHTML = content;
    document.getElementById("id6").innerHTML = content;
    document.getElementById("id8").innerHTML = content;
}