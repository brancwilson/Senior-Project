$("document").ready(function() {

    $("#goToFormPageBtn").click(function() {
        window.location.href = "formpage.html";
    });

    $("#newPersonSubmitBtn").click(function(event) {
        console.log("New Person Button clicked...");

        event.preventDefault();

        var fnInputVar = $("#fnInput").val();
        var lnInputVar = $("#lnInput").val();

        $.ajax({
            url: 'formpage.php',
            type: 'post',
            data: {fnInput: fnInputVar, lnInput: lnInputVar},
            success: function() {
                alert("COMPLETE");
            }
        });
        
    });

    $("#viewPplBtn").click(function() {
        console.log("View People Button clicked...");

        $.ajax({
            url: 'viewppl.php',
            type: 'get',
            dataType: 'json',
            success: function(response) {
                alert(response);
            }
        });
    });

});