$("document").ready(function() {

    $("#goToFormPageBtn").click(function() {
        window.location.href = "formpage.html";
    });

    $("#newPersonSubmitBtn").click(function () {
        console.log("New Person Button clicked...")

        var fnInputVar = $("#fnInput").val();
        var lnInputVar = $("#lnInput").val();

        $.ajax({
            method: 'get',
            url: 'formpage.php',
            data: {fnInput: fnInputVar, lnInput: lnInputVar},
            success: function (response) {
                alert('success');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("AJAX error occured..isdacioasncn.");
            }
        });
    });

});