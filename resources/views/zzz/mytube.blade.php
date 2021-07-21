@extends('layouts.app')

@section('content')

<script>
$('body a').click(function(event){
    event.preventDefault();
});

function disableHyperLink(obj, disable) {
    var href, onclick, color;
 
    if (disable) {
        // Protect against multiple deactivations
        var href_bak = element.getAttribute("href_bak");
        if (href_bak && href_bak != null) {
            return;
        }
 
        // Deactivate the hyperlink and onclick event and
        // save them for future reactivation
        onclick = obj.getAttribute("onclick");
        href    = (obj.nodeName.toLowerCase() == 'a') ? obj.getAttribute("href") : null;
 
        if (onclick && onclick != null) {
            obj.setAttribute("onclick_bak", onclick);
            obj.setAttribute("onclick", function() { return false; });
        }
 
        if (href && href != null) {
            obj.setAttribute("href_bak", href);
            obj.removeAttribute("href");   //(1)
 
            // Gray the link text
            if (navigator.appName == "Microsoft Internet Explorer") {
                obj.disabled = true;  // Non standard
            } else {
                color = obj.style.color;
                if (color == "") {
                    color = "(null)";
                }
                obj.setAttribute("color_bak", color);
                obj.style.color = "gray";
            }
        }
    } else {
        // Reactivate the hyperlink and onclick event using
        // saved link address and onclick event
        onclick = obj.getAttribute("onclick_bak");
        href    = obj.getAttribute("href_bak");
 
        if (onclick && onclick != null) {
            obj.setAttribute("onclick", onclick);
        }
        obj.removeAttribute("onclick_bak");
 
        if (href && href != null) {
            obj.setAttribute("href", href);
 
            // Ungray the link text
            if (navigator.appName == "Microsoft Internet Explorer") {
                obj.disabled = false;  // Non standard
            } else {
                color = obj.getAttribute("color_bak");
                if (color && color != null) {
                    obj.style.color = ((color == "(null)") ? "" : color);
                }
                obj.removeAttribute("color_bak");
            }
        }
        obj.removeAttribute("href_bak");
    }
}
</script>

<div class="container mx-auto">

    <iframe src="https://lepauledorion.com/" class="container h-screen"></iframe>

</div

@endsection