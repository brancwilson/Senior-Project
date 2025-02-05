$("document").ready(function() {

    $("#goToFormPageBtn").click(function() {
        window.location.href = "formpage.html";
    });

    $("#newPersonSubmitBtn").click(function(event) {
        console.log("New Person Button clicked...")

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
        })
        
    });

});

/*
$.ajax({
            method: 'POST',
            url: 'formpage.php',
            data: {fnInput: fnInputVar, lnInput: lnInputVar},
            success: function (response) {
                alert('success');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("AJAX error occured...");
            }
        });
*/