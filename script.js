$("document").ready(function() {

    $("#goToFormPageBtn").click(function() {
        window.location.href = "formpage.html";
    });

    $("#newPersonSubmitBtn").click(function () {
        console.log("New Person Button clicked...")
        $.ajax({
            console.log("attempting to add person...");
            url: 'formpage.php',
            type: 'POST',
            data: {fnInput: $("#fnInput").val(), lnInput:$("#lnInput").val()},
            success: function (result) {
                alert('success');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("AJAX error occured...");
            }
        });
    });

});