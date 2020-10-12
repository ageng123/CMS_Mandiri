$(document).ready(function(){
    var form = $("#step-form");
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
        });
})