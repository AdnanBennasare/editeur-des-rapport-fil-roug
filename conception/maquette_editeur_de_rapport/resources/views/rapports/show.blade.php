<!DOCTYPE HTML>
<html lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="{{asset('css/rapport.css')}}">

        <title> Rapport </title>

    </head>
    <body>
        <div id="page-wrapper" class="page-wrapper">
            <div class="book">
                <article size="A4" class="thumbnail">
                    {!! $parsed_content !!} 
                </article>
            </div>
        </div>


<script>
    // Get the thumbnail containers
    var thumbnails = document.getElementsByClassName("thumbnail");

    // Iterate through each thumbnail container
    for (var j = 0; j < thumbnails.length; j++) {
        // Find all image tags within the current thumbnail container
        var images = thumbnails[j].getElementsByTagName("img");

        // Iterate through each image tag
        for (var i = 0; i < images.length; i++) {
            // Get the src attribute of the image
            var src = images[i].getAttribute("src");

            // Decode the URL to handle encoded characters
            src = decodeURIComponent(src);
            console.log(src)

            // Prepend /imgs/ to the src attribute
            images[i].setAttribute("src", "/imgs/" + src);
        }
    }
</script>
    
    </body>
</html>









