


const convertDate = date => {
    const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const comps = date.split(" ");
    console.log(comps)
    return `${comps[2]}-${months.findIndex((month) => month === comps[1])+1}-${comps[0]}`;
}
const addCalendarEvent = function(date, eventData){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        console.log("response", this.responseText);
    }
    };
    const query = `date=${convertDate(date)}&eventData=${eventData}`;
    xmlhttp.open("POST", "addCalendarEvent.php?" + query, true);
    xmlhttp.send();
}

const getCalendarEvent = function(date, eventData){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        
        const events = this.responseText;
        localStorage.setItem("cal-" + cal.sMth + "-" + cal.sYear, JSON.stringify(cal.data));
       
    }
    };

    xmlhttp.open("POST", "getCalendarEvent.php", true);
    xmlhttp.send();
}

   const addEvent = function(){
        // get selected date
        console.log("addevent");
        const eventData = document.getElementById("evt-details").value;
        console.log(eventData, document.getElementById("evt-details"))
        const date = document.getElementById("evt-date").innerHTML;
        // date = YYYY-MM-DD 
        addCalendarEvent(date, eventData);
    }

var cal = {
    // (A) PROPERTIES
    mName: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], // Month Names
    data: null, // Events for the selected period
    sDay: new Date(), // Current selected day
    sMth: 0, // Current selected month
    sYear: 0, // Current selected year
    sMon: false, // Week start on Monday?



    // (B) DRAW CALENDAR FOR SELECTED MONTH
    list: function() {

        // Note - Jan is 0 & Dec is 11 in JS.

        cal.sMth = parseInt(document.getElementById("cal-mth").value); // selected month
        cal.sYear = parseInt(document.getElementById("cal-yr").value); // selected year
        var daysInMth = new Date(cal.sYear, cal.sMth + 1, 0).getDate(), // number of days in selected month
            startDay = new Date(cal.sYear, cal.sMth, 1).getDay(), // first day of the month
            endDay = new Date(cal.sYear, cal.sMth, daysInMth).getDay(); // last day of the month 

        // (B2) LOAD DATA FROM LOCALSTORAGE
        cal.data = localStorage.getItem("cal-" + cal.sMth + "-" + cal.sYear);
        if (cal.data == null) {
            localStorage.setItem("cal-" + cal.sMth + "-" + cal.sYear, "{}");
            cal.data = {};
        } else {
            cal.data = JSON.parse(cal.data);
        }


        var squares = [];
        if (cal.sMon && startDay != 1) {
            var blanks = startDay == 0 ? 7 : startDay;
            for (var i = 1; i < blanks; i++) { squares.push("b"); }
        }
        if (!cal.sMon && startDay != 0) {
            for (var i = 0; i < startDay; i++) { squares.push("b"); }
        }

        // Populate the days of the month
        for (var i = 1; i <= daysInMth; i++) { squares.push(i); }

        // Determine the number of blank squares after end of month
        if (cal.sMon && endDay != 0) {
            var blanks = endDay == 6 ? 1 : 7 - endDay;
            for (var i = 0; i < blanks; i++) { squares.push("b"); }
        }
        if (!cal.sMon && endDay != 6) {
            var blanks = endDay == 0 ? 6 : 6 - endDay;
            for (var i = 0; i < blanks; i++) { squares.push("b"); }
        }

        // (B4) DRAW HTML CALENDAR
        // Container
        var container = document.getElementById("cal-container"),
            cTable = document.createElement("table");
        cTable.id = "calendar";
        container.innerHTML = "";
        container.appendChild(cTable);

        // First row - Day names
        var cRow = document.createElement("tr"),
            cCell = null,
            days = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
        if (cal.sMon) { days.push(days.shift()); }
        for (var d of days) {
            cCell = document.createElement("td");
            cCell.innerHTML = d;
            cRow.appendChild(cCell);
        }
        cRow.classList.add("head");
        cTable.appendChild(cRow);

        // Days in Month
        var total = squares.length;
        cRow = document.createElement("tr");
        cRow.classList.add("day");
        for (var i = 0; i < total; i++) {
            cCell = document.createElement("td");
            if (squares[i] == "b") { cCell.classList.add("blank"); } else {
                cCell.innerHTML = "<div class='dd'>" + squares[i] + "</div>";
                if (cal.data[squares[i]]) {
                    cCell.innerHTML += "<div class='evt'>" + cal.data[squares[i]] + "</div>";
                }
                cCell.addEventListener("click", function() {
                    console.log("show event");
                    cal.show(this);
                });
            }
            cRow.appendChild(cCell);
            if (i != 0 && (i + 1) % 7 == 0) {
                cTable.appendChild(cRow);
                cRow = document.createElement("tr");
                cRow.classList.add("day");
            }
        }



        cal.close();
    },


    show: function(el) {
        // 
        cal.sDay = el.getElementsByClassName("dd")[0].innerHTML;

        var tForm = "<input type='close' value='X' onclick='cal.close()'/>";
        tForm += "<h1>" + (cal.data[cal.sDay] ? "EDIT" : "ADD") + " EVENT</h1>";
        tForm += "<div id='evt-date'>" + cal.sDay + " " + cal.mName[cal.sMth] + " " + cal.sYear + "</div>";
        tForm += "<textarea id='evt-details' required>" + (cal.data[cal.sDay] ? cal.data[cal.sDay] : "") + "</textarea>";
        tForm += "<input type='button' value='Delete' onclick='cal.del()'/>";
        tForm += "<input type='submit' value='Save' id='addEvent' onClick={addEvent} />";


        var eForm = document.createElement("form");
        eForm.addEventListener("submit", e => e.preventDefault())
            console.log("show");
        eForm.addEventListener("click", addEvent);
        eForm.innerHTML = tForm;
        var container = document.getElementById("cal-event");
        container.innerHTML = "";
        container.appendChild(eForm);
    },

    close: function() {
        document.getElementById("cal-event").innerHTML = "";
    },

    // SAVE EVENT
    save: function(evt) {

        evt.stopPropagation();
        evt.preventDefault();
        cal.data[cal.sDay] = document.getElementById("evt-details").value;
        localStorage.setItem("cal-" + cal.sMth + "-" + cal.sYear, JSON.stringify(cal.data));
        cal.list();
    },



    // DELETE EVENT FOR SELECTED DATE
    del: function() {
        if (confirm("Remove event?")) {
            delete cal.data[cal.sDay];
            localStorage.setItem("cal-" + cal.sMth + "-" + cal.sYear, JSON.stringify(cal.data));
            cal.list();
        }
    },



};




window.addEventListener("load", function() {
    //  DATE NOW
    var now = new Date();
    nowMth = now.getMonth();
    nowYear = parseInt(now.getFullYear());



    var month = document.getElementById("cal-mth");
    for (var i = 0; i < 12; i++) {
        var opt = document.createElement("option");
        opt.value = i;
        opt.innerHTML = cal.mName[i];
        if (i == nowMth) { opt.selected = true; }
        month.appendChild(opt);
    }


    var year = document.getElementById("cal-yr");
    for (var i = nowYear - 10; i <= nowYear + 10; i++) {
        var opt = document.createElement("option");
        opt.value = i;
        opt.innerHTML = i;
        if (i == nowYear) { opt.selected = true; }
        year.appendChild(opt);
    }


    document.getElementById("cal-set").addEventListener("click", cal.list);
    cal.list();
    console.warn('warning');




});