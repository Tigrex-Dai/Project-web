
$(document).ready(function(){
    $("p").click(function(){
        alert($(this).text());
    });
    $("button").click(function(){
        var v=$("#newplan").val();
        var child=$("<div></div>").append($("<span></span>").text(v));
        $(".todolist").append(child);
        var block=$(".todolist").find("span");
        block.click(function(){
            $(this).css({
                "text-decoration" : "line-through",
                "background-color" : "rgba(255,255,255,.6)"
            });
        });
    });
    var block1=$(".todolist").find("span");
    block1.click(function(){
        $(this).css({
            "text-decoration" : "line-through",
            "background-color" : "rgba(255,255,255,.6)"
        });
    });
});