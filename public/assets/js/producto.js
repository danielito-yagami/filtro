
$(document).ready(function(){

    $("#msj3").css("display","none")

//Para realizar peticiones post usando ajax y el meta en html
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

})



$("#crearP").on('click',function(e){

e.preventDefault()

//Obteniendo los parametros

let nombre = $("#nombreP").val();
let descripcion = $("#desP").val()
let precio = $("#precioP").val()
let categoria = $("#categorias").val()
let img = $("#imgx")[0].files[0]



/*

*/



let formData = new FormData();

formData.append('nombre',nombre)
formData.append('descripcion',descripcion)
formData.append('precio',precio)
formData.append('categoria',categoria)
formData.append('imgx',img)


if(nombre == "" || descripcion == "" || precio == ""){

    $("#msj3").attr("class","alert alert-warning black text-center")
    $("#msj3").text("Llena los campos nombre, descripcion y precio")
    $("#msj3").css("display","block")

    setTimeout(function(){

        $("#msj3").css("display","none")

    },3000)

    return

}
//Restricciones para validar la categoria

if(categoria == "default"){

    $("#msj3").attr("class","alert alert-warning black text-center")
    $("#msj3").text("El producto debe tener una categoria")
    $("#msj3").css("display","block")

    setTimeout(function(){

        $("#msj3").css("display","none")

    },3000)

    return
}



//formData.append('img',img)

//console.log(datos)

let ruta = "/producto"

$.ajax({
    url: ruta,
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,

})
.done(function(res){
    console.log(res)

    if(res == 0){

        $("#msj3").attr("class","alert alert-success white text-center")
        $("#msj3").text("Producto creado con exito")
        $("#msj3").css("display","block")

        window.location.replace("./")

    }else{
        $("#msj3").attr("class","alert alert-danger white text-center")
        $("#msj3").text("No se pudo registrar el producto")
        $("#msj3").css("display","block")

    }

    setTimeout(function(){

        $("#msj3").css("display","none")


    },3000)

})

.fail((e)=>{

    console.log(e)
})


})
