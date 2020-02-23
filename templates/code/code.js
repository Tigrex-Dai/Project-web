/*
				var tabb = [10,15,6,14,14,13,19,15,17,9];
				var bol = true;
				function all(tab, bol) {
					if (bol != true && bol != false) {
						alert("nmd,wsm");
					}
					else {
						if (bol == true) {
							for (i = 0;i<tab.length;i++) {
								document.write(tab[i]+" ");
								console.log(tab[i]);
							}
						}
						else {
							for (i = 0;i<tab.length;i++) {
								if (tab[i] >=15) {
									document.write(tab[i]+" ");
								}
								else {
									continue;
								}
							}
						}
					}
				}
				all(tabb,bol); */
var y = document.querySelector(".itempic");
function flow1(){
    document.querySelector(".description").style.display = "inline";
}
function flow0(){
    document.querySelector(".description").style.display = "none";
}
y.addEventListener("mouseover", flow1);
y.addEventListener("mouseout", flow0);

$(document).ready(function(){
    $(".itempic").click(function(){
        $(this).fadeOut(2000);
    });
    $("p").click(function(){
        alert($(this).text());
    });
    $(".recall").click(function(){
        $(".itempic").fadeIn(2000);
    });
    $("#hidebg").click(function(){
        $("#floor").fadeOut(1000);
        $("video").fadeOut(1000);
    });
    $("#showbg").click(function(){
        $("video").fadeIn(800);
        $("#floor").fadeIn(1600);
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