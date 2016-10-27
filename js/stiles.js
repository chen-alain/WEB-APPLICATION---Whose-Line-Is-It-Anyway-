$(function() 
{
    $( "#inc" )
    .button()
    .click(incPoints);
    $( "#dec" )
    .button()
    .click(decPoints);
    
    changePoints(0);
});


function incPoints()
{
    changePoints(1000);
}

function decPoints()
{
    changePoints(-1000);
}

function changePoints(amountToChange)
{
    console.log( amountToChange );
    
    $.post( "./people/stilesPointsProcess.php", { inc: amountToChange },
         function(data) {
        $("#points").html(data + " points!");
    });
}