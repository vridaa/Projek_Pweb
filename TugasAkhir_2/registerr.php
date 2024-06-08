<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register |Tabunganqu</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body background="bg.png">
<div class="container text-end my-4">
<div class="row align-items-center">
<div class="container2 my-5 py-5 w-50 text-center border">
<div class="container text-center">
        <img class="w-50" src="logo.png" alt="">
    <h4 class="text-white text-center">Create An Account</h4>
    <?php
                            if(isset($_GET['info'])){
                                if($_GET['info'] == "salah"){
                                    echo "Ada Sesuatu Yang Salah Nih";
                                }
                            }
    ?>
    <form action="func_add_akun.php"method="POST" onsubmit="return validate()">
    <div class="container text-start">
    <div class="row align-items-start">
        <div class="col">
    <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" autofocus required>
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap" required>
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required minlength="7" name="password">
    </div>
    <div class="mb-3">
        <label for="cnfrm-password" class="form-label">Confirm password</label>
        <input type="password" onkeyup="checkPassword(this)" class="form-control" id="cnfrm-password">
    </div>
    <error id="alert"></error>
        </div>
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required name="email">
        <div id="emailHelp" class="form-text"></div>
        
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">No Telepon</label>
        <input type="tel" class="form-control" id="exampleInputPassword1" required name="no_telp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="exampleInputPassword1"required name="alamat">
    </div>
        </div>
    </div>
    <center>
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required name="check[]" value="yes">
        <label class="form-check-label" for="exampleCheck1">Creating you account and you accepting <a href="syarat.html" class="link-underline-primary">terms & condition</a> </label>
        <div class="mt-3">
    <button type="submit"  class="btn btn-primary">Create Account</button>
    </div>
    </center>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
<script type="text/javascript">
    var password= document.getElementById("password");
    var flag = 1;
    function checkPassword(elem){
        if(elem.value.length>0){
            if(elem.value!=password.value){
                document.getElementById('alert').innerText="password tidak sama";
                flag=0;
            }else{
                document.getElementById('alert').innerText="";
                flag=1;
            }

        }else{
            document.getElementById('alert').innerText="masukkan confirm password";
            flag=0;
        }
    }
    function validate(){
        if(flag==1){
            return true;
        }else{
            return false;
        }
    }
</script>
</html>