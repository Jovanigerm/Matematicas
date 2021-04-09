<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
        IDGS-81
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    </head>
<body>
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 pr-3">
                                <div class="form-group">
                                    <label>Valor de H</label>
                                    <input type="text" name="ValorH" id="ValorH" class="form-control">                          
                                </div>      
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-3">
                                <div class="form-group">
                                    <label>Numero de interacciones</label>
                                    <input type="text" name="Interacciones" id="Interacciones" class="form-control">
                                </div>      
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-3">
                                <button type="submit" id="boton" value="boton" class="btn btn-success col-md-12" onclick="calcular()">Calcular</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grafica-->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <canvas id="chartContainer" ></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                    <table id="tabla" class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Xo</th>
                            <th scope="col">Yo</th>
                            <th scope="col">Y1</th>
                            <th scope="col">Y-RK4</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/euler.js"></script>
    
</body>
</html>