let user_footprint = [];
let load_time = 0;
function toTitleCase(str) {
    return str.replace(/(?:^|\s)\w/g, function(match) {
        return match.toUpperCase();
    });
}
function loader(page,value){
    $("#msg_error").hide();
    $("#msg_success").hide();
    
	if (page == 'main_menu') {
		$.ajax({
            type: "GET",
            url: "layouts/main_menu.php",
            success: function(data) {                
                document.getElementById("main_body").innerHTML =data;
                var height = window.innerHeight || document.body.clientHeight;
                document.getElementById("row").setAttribute("style", "height:"+height+"px;");
                var p = page.replace('_',' ');
                //var str = toTitleCase(p);
				var str = "User VIVR Registration";
                document.getElementById("header_menu").innerHTML ="<p>"+str+"</p>";
                setAudio(page);
                if (load_time === 1) {                    
                    playAudio();
                }

            }
        });
	}else{
		var action_page = "pages/"+page+".php";

        if(user_footprint.indexOf(page) !== -1){
        } else{
            user_footprint.push(page);
        }
        
        $.ajax({
            type: "GET",
            url: action_page,
            data:{
                value :value
            },
            success: function(data) {
                document.getElementById("main_body").innerHTML =data;
                var height = window.innerHeight || document.body.clientHeight;
                document.getElementById("row").setAttribute("style", "height:"+height+"px;");
                var p = page.replace('_',' ');
                var str = toTitleCase(p);
                document.getElementById("header_menu").innerHTML ="<p>"+str+"</p>";
                setAudio(page);
                if (load_time === 1) {
                    playAudio();
                }
                
            }
        });
    }
}