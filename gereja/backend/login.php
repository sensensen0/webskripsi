<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            .bg-image {
                width: 100%;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <img class = "bg-image"src="../assets/img/bg-login.jpg" alt="Gradient background images" width="100%" height="100%">
        <div class="container-fluid">
            <div class="row text-center position-absolute top-50 start-50 translate-middle">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title mb-3">LOGIN ADMIN</h3>
                            <div class="row">
                                <div class="col">Username</div>
                                <div class="col"><input type="text" name="username" id="username"></div>
                                <script>
                                    document.getElementById("username").focus();
                                </script>
                            </div>
                            <div class="row mt-3">
                                <div class="col">Password</div>
                                <div class="col"><input type="password" name="password" id="password"></div>
                            </div>
                        <input type="button" id="login" class="btn btn-primary mt-3" value="Login" onclick="login()">
                    </div>
                </div>
            </div>
        </div>       
    </body>
    <script type="text/javascript">
        function ajax (url, data){
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function (){
                if (this.readyState == 4 && this.status == 200) {
                    var dataku = this.responseText;

                    if (dataku == "login"){
                        alert("Berhasil Login!");
                        location.href = "index.php  ";
                    } else {
                        alert("Gagal Login\nUsername atau password anda salah!!!");
                        document.getElementById("username").value="";
                        document.getElementById("password").value="";
                        document.getElementById("username").focus();
                    }
                }
            };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }
        
        function login(){
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            var data = new FormData;
            data.append("username", username);
            data.append("password", password);
            
            ajax("proses-login.php", data);
        }
        let user = document.getElementById("username");
            user.addEventListener("keypress", function(event){
                if (event.key === "Enter") {
                    event.preventDefault();
                    alert("Username / Password belum diisi!");
                    user.value="";
                }
            });
        let pwd = document.getElementById("password");
            pwd.addEventListener("keypress", function(event) {
                if (event.key === "Enter" && user.value === "") {
                    event.preventDefault();
                    alert("Username / Password belum diisi!");
                    user.focus();
                    pwd.value="";
                } else if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("login").click();
                }
            });
    
    </script>
</html>
