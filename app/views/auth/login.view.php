<!---Chamada da sua parte 'header.view.php'-->
<?php require_once views_path('partes/header')?>
            
      <div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow-sm">  
        
          <form method="post">
              
        <!--fim do menu copiado do bootstrap-->  
        <center>
            <h1><i class="fa fa-user"></i></h1>
            <h3>Login</h3>
            <div><?=esc(APP_NAME)?></div>
        </center> 
      <!---input group-->
                  
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" autofocus>
        </div>
 
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>

        <br>
             <div class="row">
                <button class="btn btn-primary" style="min-width:100px;font-size: 20px;">login</button>
             </div>
       </form>
    </div>  
<!---Chamada da sua parte 'footer.view.php'-->
<?php require_once views_path('partes/footer')?> 