$(document).ready(function()
{
    //make button on information page submit the form
    $("#submitInfo").on("click", function()
    {
        $("#infoForm").submit();
    });

    $("#submitProfile").on("click", function()
    {
        $("#profileForm").submit();
    });
});

