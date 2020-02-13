window.onload = function(){
    			document.querySelector(".menu_mobile").addEventListener("click", function(){
        			if(document.querySelector(".box_menu_mobile nav ul").style.display == 'flex'){
            			document.querySelector(".box_menu_mobile nav ul").style.display = 'none';
        			}
        			else{
            			document.querySelector(".box_menu_mobile nav ul").style.display = 'flex';
        			}
    			});

    			document.querySelector(".option").addEventListener("click", function(){
        			if(document.querySelector(".box_menu_mobile nav ul").style.display == 'flex'){
            			document.querySelector(".box_menu_mobile nav ul").style.display = 'none';
        			}
        			else{
            			document.querySelector(".box_menu_mobile nav ul").style.display = 'flex';
        			}
    			});

};
