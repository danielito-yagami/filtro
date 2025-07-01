

//Para mostrar la pantalla de bienvenida

$(document).ready(function(){

    $("#categoria").css("display","none")
    $("#producto").css("display","none")

    //Esta funcion es solo para cambiar el color del mensaje estos mensajes vienen del backend
    //la categoria ya existe si se recibe esta respuesta entonces se toma color rojo
    mensajes("#msj","La categoria ya existe")
    mensajes("#msj2","No se ha podido registrar")
})


$("#boton1").on("click",(e)=>{

e.preventDefault()


console.log("mostrando los productos")

$("#categoria").css("display","none")
$("#producto").css("display","block")
$("#bienvenida").css("display","none")

})



$("#boton2").on("click",(e)=>{

    e.preventDefault()


    console.log("mostrando los categorias")

    $("#producto").css("display","none")
    $("#categoria").css("display","block")
    $("#bienvenida").css("display","none")
    })


    //Funcion para mostrar los mensajes del backend
    function mensajes(elemento,mensaje){

        if($(elemento).length){

            //Si hay mensaje del backed


            let valor = $(elemento).text()

            valor = valor.trim()



            if(valor== mensaje){


                $(elemento).attr("class","alert alert-danger text-center p-2")

            }else {


                $(elemento).attr("class","alert alert-success text-center p-2")
            }


            setTimeout(function(){

                $(elemento).css("display","none")


            },2000)

        }else{

        //Sino hay

       // console.log("sin mensaje")
        }

        }


