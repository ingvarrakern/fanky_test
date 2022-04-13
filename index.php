<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Login system</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="bd-content ps-lg-4 col-lg-4">
            <form id="formRegister" method="POST" onSubmit="sendBE();return false;">
                <div class="mb-3">
                  <label for="exampleInputEmail" class="form-label">Email</label>
                  <input required type="email" class="form-control" id="exampleInputEmail" name="fe_email" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Имя</label>
                  <input required type="text" class="form-control" id="exampleInputName" name="fe_name" aria-describedby="nameHelp">
                 
                </div>                
                <div class="mb-3">
                  <label for="exampleInputPhone" class="form-label">телефон</label>
                  <input required type="number" maxlength="11" minlength="9" class="form-control" id="exampleInputPhone" name="fe_phone"  aria-describedby="phoneHelp">
                  
                </div>
                <button type="submit" class="btn btn-primary" target="target" id="buttonSubmit"> Register</button>                
              </form>
        </div>
                
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
