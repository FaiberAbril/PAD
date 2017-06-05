<!DOCTYPE html>
<html>
    <head>
        <title>PROYECTO PAD</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style> * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body{
    background: #dedrede;
    display: flex;
    /*100% de la pagina*/
    min-height: 100vh;
}


form{
    margin: auto;
    width: 60%;
    max-width: 500px;
    background-color: #F3F3F3;
    padding: 30px;
    border: 1px solid rgba(0,0,0,0.2)    
}

h2{
    text-align: center;
    margin-bottom:10px;
    color: rgba(0,0,0,0.5)
}

input {
    display:block;
    padding: 10px;
    width: 100%;
    margin: 30px 0px;
    font-size: 20px;
}

.boton-login{
    background: linear-gradient(#004020,#004040);
    border: 0;
    color: white;
    opacity: 0.8;
    cursor: pointer;
    border-radius: 20px;
    margin-bottom: 0;
}

.boton-login:hover{
    opacity: 1;
}

/*momento hace click*/
.boton-login:active{
    /*rReduce un poco */
    transform: scale(0.95);
}


/*caracteristica tamaño a mobiles*/
@media screen and (min-width:480px){
    

 
}



@media screen and (min-width:767px){
    

}




@media screen and (min-width:950px){
    

  
}

        </style>
    </head>
    <body>
                 {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
                    <div class="formulario">
                    <h2>PROYECTO PAD</h2>
         				<input type="text" placeholder="&#128272; usuario" name="nombreusuario">
         				<input type="password" placeholder="&#9919; contraseña" name="clave">
         				<input type="submit" value="Ingresar" class="boton-login">
               		</div> 
                {!!Form::close()!!}

   

    </body>
</html>
