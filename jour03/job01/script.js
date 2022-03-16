$(document).ready(function()
    {
        $("#citation").hide();
        $("#buttonBye").hide();

        $("#button").on("click",function() {
            $("#button").hide();
            $("#citation").show();
            $("#buttonBye").show();
        })

        $("#buttonBye").on("click", function ()
            {
                $("#citation").hide();
                $("#buttonBye").hide();
            }
        )
    }
)