<!---Chamada da sua parte 'header.view.php'-->
<?php require_once views_path('partes/header')?>
            
    <!---1ª border do container-->    
    <div class="container-fluid shadow p-1">
        <center><h4><b><?=APP_SOFT?></b></h4></center>
    </div>

    <!---2ª border do container azul--> 
    <div class="d-flex">
        <div style="height:600px;" class="shadow-sm col-7 p-4">
        
         <div class="input-group mb-3"><h3>Items</h3>
            <input type="text" class="ms-4 form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" autofocus>
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
        </div>
        
        <div class="js-products d-flex" style="flex-wrap: wrap; height: 80%;overflow-y: scroll;">
            
            <!--Inicio imagem card-->
            <div class="card m-2 border-0" style="min-width: 200px; max-width: 200px;">
                <a href="#">
                    <img src="assets/images/shake.png" class="w-100 rounded">
                </a>
                <div class="p-4" style="font-size:20px;">
                    <div class="text-muted">Gelado Morango</div>
                    <div class=""><b>2.500,00 AOA</b></div>
                </div>
            </div>    
            <!--fim imagem card-->
            
            <!--Inicio imagem card-->
             <div class="card m-2 border-0" style="min-width: 200px; max-width: 200px;">
                <a href="#">                
                    <img src="assets/images/hamburguer.jpg" class="w-100 rounded">
                </a>
                <div class="p-4" style="font-size:20px;">
                    <div class="text-muted">Hamburguer</div>
                    <div class=""><b>3.500,00 AOA</b></div>
                </div>
            </div>    
            <!--fim imagem card-->
            
             <!--Inicio imagem card-->
             <div class="card m-2 border-0" style="min-width: 200px; max-width: 200px;">
                <a href="#">
                    <img src="assets/images/shake.png" class="w-100 rounded">
                </a>
                <div class="p-4" style="font-size:20px;">
                    <div class="text-muted">Coca-cola</div>
                    <div class=""><b>500,00 AOA</b></div>
                </div>
            </div>    
            <!--fim imagem card-->
            
             <!--Inicio imagem card-->
            <div class="card m-2 border-0" style="min-width: 200px; max-width: 200px;">
                <a href="#">
                    <img src="assets/images/shake.png" class="w-100 rounded">
                </a>
                <div class="p-4" style="font-size:20px;">
                    <div class="text-muted">Gelado Morango</div>
                    <div class=""><b>2.500,00 AOA</b></div>
                </div>
            </div>    
            <!--fim imagem card-->
            
            <!--Inicio imagem card-->
             <div class="card m-2 border-0" style="min-width: 200px; max-width: 200px;">
                <a href="#">                
                    <img src="assets/images/hamburguer.jpg" class="w-100 rounded">
                </a>
                <div class="p-4" style="font-size:20px;">
                    <div class="text-muted">Hamburguer</div>
                    <div class=""><b>3.500,00 AOA</b></div>
                </div>
            </div>    
            <!--fim imagem card-->
            
             <!--Inicio imagem card-->
             <div class="card m-2 border-0" style="min-width: 220px; max-width: 220px;">
                <a href="#">
                    <img src="assets/images/shake.png" class="w-100 rounded">
                </a>
                <div class="p-4">
                    <div class="text-muted">Coca-cola</div>
                    <div class="" style="font-size:20px;"><b>500,00 AOA</b></div>
                </div>
            </div>    
            <!--fim imagem card-->
        </div>     
    </div>
         
        <!--Limitar as colunas na entrada dos produtos-->
        <div class="col-5 bg-light p-4 pt-2">
            
       <!---criar tabelas--> 
            <div><center><h3>Carrinho<div class="badge bg-primary rounded-circle">3</div></h3></center></div>
            <table class="table table-striped table-hover">
                <tr>
                    <th>Imagem</th><th>Descrição</th><th>Preço</th>
                </tr>
                
            <!--Inicio item-->     
                <tr>
                    <td style="width:110px"><img src="assets/images/shake.png" class="rounded border" style="width:100px;height:100px;"></td>
                    <td class="text-primary">
                        Coffee drink
                    
                        <div class="input-group my-3" style="max-width:150px">
                            <span class="input-group-text" style="cursor: pointer;"><i class="fa fa-minus text-primary"></i></span>
                            <input type="text" class="form-control text-primary" placeholder="1" value="1">
                            <span class="input-group-text" style="cursor: pointer;"><i class="fa fa-plus text-primary"></i></span>
                        </div>
                    
                    </td>
                    <td  style="font-size:20px;"><b>2.500,00 AOA</b></td>
                </tr>
            
            <!--fim item-->
            <!--Inicio item-->     
                <tr>
                    <td style="width:110px"><img src="assets/images/shake.png" class="rounded border" style="width:100px;height:100px;"></td>
                    <td class="text-primary">
                        Coffee drink
                    
                        <div class="input-group my-3" style="max-width:150px">
                            <span class="input-group-text" style="cursor: pointer;"><i class="fa fa-minus text-primary"></i></span>
                            <input type="text" class="form-control text-primary" placeholder="1" value="1">
                            <span class="input-group-text" style="cursor: pointer;"><i class="fa fa-plus text-primary"></i></span>
                        </div>
                    
                    </td>
                    <td  style="font-size:20px;"><b>2.500,00 AOA</b></td>
                </tr>
            
            <!--fim item-->
                
            </table>
      </div>
    </div>
        
                    

<!---Chamada da sua parte 'footer.view.php'-->
<?php require_once views_path('partes/footer')?>