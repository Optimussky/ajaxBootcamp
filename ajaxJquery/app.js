let btn = document.getElementById("btn");
// con Jquery sería algo así: let btn = document.getElementById("brn");
    btn.addEventListener("click", () =>{

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;
        $.post("serverFiles/serve.php", {myName: name, myEmail: email, myPassword: password}, function(response,status,obj){

            let res = JSON.parse(response)
            console.log(res, status,obj);
        }).fail((obj, status, error)=>{
            console.log(obj, status,error);
        });
        //alert("Clicked" + $name);
    });