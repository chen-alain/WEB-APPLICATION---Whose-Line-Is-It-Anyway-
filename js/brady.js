var current, next, previous, bradyData;

$(function() {    
    $.getJSON( "resources/Brady/bradyPhotos.json", function(data){
        bradyData = data;
        
        // Populate the menu
        for (var photo of bradyData.photos) {
            var li = $("<li><img class=\"thumbnail\" src=\"" + bradyData.photosBasePath + photo.uri + "\"></li>");
            li.click(photo, function(e) {
                    addSlide(e.data);
                })
                .appendTo("#menuItems");
        }

        // Stage the current photo
        $("#photoTitle").html(bradyData.photos[0].description);
        current = $("<img>");
        current
            .attr("src", bradyData.photosBasePath + bradyData.photos[0].uri)
            .addClass("slide center")
            .appendTo("#slides");

        // Prepare the next slide
        next = $("<img>");
        next
            .addClass("slide")
            .appendTo("#slides");
        
        // Make the menu and display draggable
        $("#photoMenu, #photoDisplay").draggable();
    }).fail(function() { console.log("error" ) } );
    
});

function addSlide(photo) {
    // If you click on the same photo, don't transition.
    if (bradyData.photosBasePath + photo.uri == current.attr("src")) return;
    
    // Remove the previous photo.
    if (previous) previous.remove();

    // Set and center the next slide
    next
        .attr("src", bradyData.photosBasePath + photo.uri)
        .addClass("center");
    
    // Set it's title
    $("#photoTitle").html(photo.description);

    // The current slide is now the previous slide
    previous = current;

    // Move it to the right
    previous
        .removeClass("center")
        .addClass("right");

    // The next slide becomes the current slide
    current = next;

    // And we need a new next
    next = $("<img>");
    next
        .addClass("slide")
        .appendTo("#slides");
}