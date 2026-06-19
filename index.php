<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MeExcluyo.cl - Autoexclusión de Casas de Apuestas</title>

<style>
    body{
        font-family: Arial, sans-serif;
        background:#121212;
        color:white;
        max-width:800px;
        margin:auto;
        padding:20px;
    }

    h1{
        text-align:center;
        color:#00d26a;
    }

    .card{
        background:#1e1e1e;
        padding:20px;
        border-radius:15px;
        margin-top:20px;
    }

    input{
        width:100%;
        padding:12px;
        margin-top:10px;
        border:none;
        border-radius:8px;
    }

    .checkbox{
        margin:10px 0;
    }

    button{
        width:100%;
        background:#00d26a;
        color:white;
        border:none;
        padding:15px;
        border-radius:10px;
        font-size:18px;
        cursor:pointer;
        margin-top:20px;
    }

    button:hover{
        background:#00b85c;
    }

    .footer{
        text-align:center;
        margin-top:30px;
        color:#999;
    }
</style>
</head>
<body>

<h1>🎯 MeExcluyo.cl</h1>

<div class="card">

<h2>Solicita tu autoexclusión</h2>

<input type="text" id="nombre" placeholder="Nombre completo">

<input type="email" id="correo" placeholder="Correo registrado en las casas de apuestas">

<h3>Selecciona las plataformas:</h3>

<div class="checkbox">
<input type="checkbox" value="Betano"> Betano
</div>

<div class="checkbox">
<input type="checkbox" value="Bet365"> Bet365
</div>

<div class="checkbox">
<input type="checkbox" value="Coolbet"> Coolbet
</div>

<div class="checkbox">
<input type="checkbox" value="1xBet"> 1xBet
</div>

<div class="checkbox">
<input type="checkbox" value="Stake"> Stake
</div>

<button onclick="enviarSolicitud()">
Autoexcluirme
</button>

</div>

<div class="card">
<h2>Recursos de ayuda</h2>

<p>✅ Elimina las aplicaciones de apuestas.</p>
<p>✅ Bloquea las páginas con BetBlocker.</p>
<p>✅ Pide ayuda a familiares y amigos.</p>
<p>✅ Busca apoyo psicológico si lo necesitas.</p>
</div>

<div class="footer">
MeExcluyo.cl © 2026
</div>

<script>

function enviarSolicitud(){

    let nombre = document.getElementById("nombre").value;
    let correo = document.getElementById("correo").value;

    let seleccionadas = [];

    document.querySelectorAll('input[type="checkbox"]:checked')
    .forEach(item => {
        seleccionadas.push(item.value);
    });

    let asunto = "Solicitud de Autoexclusión Permanente";

    let mensaje =
`Hola,

Mi nombre es ${nombre}.

Solicito la autoexclusión permanente de todas mis cuentas asociadas al correo:

${correo}

Plataformas seleccionadas:
${seleccionadas.join(", ")}

Solicito además dejar de recibir promociones y confirmar el cierre de mi cuenta.

Gracias.`;

    window.location.href =
    `mailto:?subject=${encodeURIComponent(asunto)}&body=${encodeURIComponent(mensaje)}`;
}

</script>

</body>
</html>
