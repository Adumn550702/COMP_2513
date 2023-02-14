
function getDataFromAPI() {

    var facility_town = $("#facility_town").val();
    var facility = $("#facility").val();

    if (facility_town == "" || facility == "") {
        alert("You need to enter a town name.");
    } else {
        $("#loading").show();

        var url = "https://data.novascotia.ca/resource/2shh-dv8p.json?";
            url += "facility_town=" + facility_town.toUpperCase() + "&facility=" + facility.toUpperCase();
    
        $.get(url, function(data, status){
            console.log(data, status);
    
            $("#results_container").html("");
    
            var resultHTML = "<h1>" + facility + " in " + facility_town + "</h1><p>" + data.length + " results returned.</p><ul>";
            if(data.length == 0) {
                alert("no matches found, try again...");
            } else {
                for (var i = 0; i < data.length; i++) {
                    var restuarant_name = data[i].facility;
                    var street_address = data[i].facility_address;
                    resultHTML += "<li>" + restuarant_name + " " + street_address + "</li>"
                }
            }
            resultHTML += "</ul>";
    
            $("#facility_town").val("");
            $("#facility").val("");
            $("#facility_town").focus();
            $("#loading").hide();
            $("#results_container").html(resultHTML);
        });
    }
}

window.addEventListener("load", (event) => {

    $("#loading").hide();

    const el = document.getElementById("getdata_btn");
    el.addEventListener("click", getDataFromAPI, false);
});









