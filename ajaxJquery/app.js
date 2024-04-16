let btn = document.getElementById("btn");
    btn.addEventListener("click", () =>{

        let name = document.getElementById("name").value;
        $.post("serverFiles/server.php", {myName: name}, function(response,status,obj){
            console.log(response, status,obj);
        });
        //alert("Clicked" + $name);
    });