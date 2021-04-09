document.getElementById('boton').onclick=calcular;

function calcular(){
    var valorh = parseFloat(document.getElementById("ValorH").value);
    var interacciones = parseInt(document.getElementById("Interacciones").value);     
    let datostabla = document.getElementById("tabla");
    let grafica = document.getElementById("chartContainer").getContext('2d');
    function objetos(valX,valY,valYi){
        this.valX=valX;
        this.valY=valY;
        this.valYi=valYi;
    }
    if(valorh!=0 && interacciones != 0){
            var Xo = 0;
            var Yo = 0.5;

            for(var repeticiones=0;repeticiones < interacciones;repeticiones++){
                var valor1;
                /*Metodo de Euler*/valor1=Yo+(valorh*((Xo-Yo)**2));
                var Xi; 
                Xi = Xo + valorh;
                var Yi;
                Yi = valor1;
                var valor;    
                /*Metodo de Euler mejorado*/valor = Yo + (valorh / 2)*(((Xo - Yo)**2)+((Xi - Yi)**2)); 
                resultados = new objetos(Xo.toFixed(4),Yo.toFixed(4),Yi.toFixed(4));
                Xo = Xo + valorh;
                Yo = valor1;
                let nuevafila = datostabla.insertRow(-1);
                let nuevacelda = nuevafila.insertCell(0);           
                nuevacelda.textContent = resultados.valX;

                nuevacelda = nuevafila.insertCell(1);           
                nuevacelda.textContent = resultados.valY;

                nuevacelda = nuevafila.insertCell(2);           
                nuevacelda.textContent = resultados.valYi;

                nuevacelda = nuevafila.insertCell(3);           
                nuevacelda.textContent = "resultadosXo";
                var xo = resultados.valX;
                Array();
                
            }    
            //                var X=arreglo[1].valX;

            var chart= new Chart(grafica,{
                type:'line',
                data:{
                    labels:arreglo.map(X => X.valX),
                    datasets:[{
                        label:"Euler",
                        borderColor: 'black',
                        data:arreglo.map(Y => Y.valY),
                    },{
                        label:"Euler mejorado",
                        borderColor: 'blue',
                        data:arreglo.map(Yi => Yi.valYi),
                    },]
                },
                options:{
                    title:{
                        display:true,
                        text:"Graficación",
                        fontSize: 40,
                        padding: 5,
                        fontColor: "#48C9B0",
                    },
                    legend:{
                        position: 'bottom',
                        labels:{
                            padding:20,
                            boxWidth: 15,
                            fontFamily: 'system-ui',
                            fontColor: 'black',
                        }
                    },
                    elements:{
                        line:{
                            fill:false,
                        }
                    }
                }    
            })
        }
        else{
            alert("Ingresa los valores solicitados")
        }
    }

var arreglo = [];
function Array(){
        arreglo.push(resultados);
        //var arreglo = [];
    }
calcular();