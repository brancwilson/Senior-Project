$("document").ready(function() {

    $("#goToFormPageBtn").click(function() {
        window.location.href = "formpage.html";
    });

    $("#newPersonSubmitBtn").on("submit", function(event) {
        console.log("New Person Button clicked...")

        event.preventDefault();

        var fnInputVar = $("#fnInput").val();
        var lnInputVar = $("#lnInput").val();

        var posting = $.post('formpage.php', { s: fnInputVar, lnInputVar} );

        posting.done(function() {
            alert("DONE");
        });
        
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