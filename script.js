$("document").ready(function() {

    $("#goToFormPageBtn").click(function() {
        window.location.href = "formpage.html";
    });

    $("#newPersonSubmitBtn").click(function () {
        $.ajax({
            url: 'formpage.php',
            type: 'POST',
            data: {fnInput: $("#fnInput").val(), lnInput:$("#lnInput").val()},
            success: function (result) {
                alert('success');
            }
        });
    });

});