$("document").ready(function() {
    $("#pplListTable").hide();
    $('#rmvSelectedBtn').hide();

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
            //data must be sent as a key value pair - {dataName: javascriptData}
            data: {fnInput: fnInputVar, lnInput: lnInputVar},
            success: function() {
                loadPeopleTable(() => alert("COMPLETE"));
            }
        });
        
    });

    $("#viewPplBtn").click(function() {
        console.log("View People Button clicked...");

        loadPeopleTable();

    });

    function loadPeopleTable() {
        
        $("#pplListTable").empty();

        $.ajax({
            url: 'viewppl.php',
            type: 'get',
            success: function(response) {
                $("#pplListTable").show();
                $("#pplListTable").append("<tr><td>FIRST NAME</td><td>LAST NAME</td><td>EDIT</td></tr>")
                $("#pplListTable").append(response);
                $("#rmvSelectedBtn").show();
            }
        });
    }

    $("button").on("click", ".deleteBtn", function() {

        alert(this.id);

    });

});