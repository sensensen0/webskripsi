<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <img src="../assets/img/bg-login.jpg" alt="Gradient background images">
        <div class="container-fluid">
            <div class="row text-center position-absolute top-50 start-50 translate-middle">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title mb-3">LOGIN ADMIN</h3>
                            <div class="row">
                                <div class="col">Username</div>
                                <div class="col"><input type="text" name="username" id="username"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">Password</div>
                                <div class="col"><input type="password" name="password" id="password"></div>
                            </div>
                        <input type="button" id="login" class="btn btn-primary mt-3" value="Login">
                    </div>
                </div>
            </div>
        </div>       
    </body>
    <script text="text/javascript">
        function ajax (url, data){
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function (){
                var dataku = this.responseText;
                var login = dataku;

                if (login == "login"){
                    alert("Berhasil login!");
                } else {
                    alert("Gagal Login\nUsername atau password anda salah!!!")
                    reset();
                }
            };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }


        function login(){
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;
            let login = document.getElementById("login").value;      
        }
        
        function reset(){
            document.getElementById("username").value = "";
            document.getElementById("password").value = "";
            document.getElementById("username").focus;


        }
    </script>
</html>
