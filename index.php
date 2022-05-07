<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <style>
        body{
            width:auto;
            height: 200px;
           display: flex;
           flex-direction: column;
           justify-content: space-around;
           justify-items: center;
           align-items:center;
           margin-top: 200px;
           background-image: url(./img/fondo.jpg);
           background-size: cover;
        }
        .contenedor{
            display: flex;
           flex-direction: column;
           justify-items: center;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       <p>calculadora</p>
                    </div>
                    <div class="panel-body">
                        <form action="" method="_GET">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="">primer numero</label> <br>
                                    <input type="number" class="form-control" name="n1" id="n1">
                                </div>
                                
                                <div class="col-md-4">
                                    <label for=""> segundo numero</label>
                                    <input type="number" class="form-control" name="n2" id="n2">
                                </div>
                                <div class="col-md-4">
                                    <label for=""> operacion</label> 
                                    <br>
                                    <select class="form-control" name="operacion" id="operacion">
                                        <option value="+">+</option>
                                        <option value="-">-</option>
                                        <option value="*">*</option>
                                        <option value="/">/</option>
                                    </select> 
                                </div>
                            </div>
                             <br><br><br><br>
                            <button type="submit" class="btn btn-outline-primary">consultar</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <?php 

        @$n1 = $_GET['n1'];
        @$n2 = $_GET['n2'];
        @$operacion = $_GET['operacion'];
        $r = 0;

        if($operacion=="+"){
        $r=$n1 + $n2;
        }elseif($operacion=="-"){
        $r =$n1 - $n2;
        }elseif($operacion =="*"){
        $r = $n1 * $n2;
        }elseif($operacion =="/"){
        $r = $n1 / $n2;
        } 
            
       echo "el resultado es =" . $r
    ?>
</body>
</html>