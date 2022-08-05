<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/global.css">
    <link rel="stylesheet" href="./CSS/login.css">
    
    <title>Document</title>
</head>
<body>
    <div class="pagina">
        <div class="principal">
            <div>
                <form class="login" action="../INCLUDES/validar.php" method="post">
                    <div class="log">
                        <input name = "nick" class="inlog in1" type="text">
                        <input name = "pass" class="inlog in2" type="text">
                    </div>
                    <div class="log">
                        <button class="inlog btnLog">INGRESAR</button>
                        <div class="inlog btnLog btnLimpiar"
                        onClick='
                        const entrada1 = document.querySelector(".in1");
                        const entrada2 = document.querySelector(".in2");
                        entrada1.value = "";
                        entrada2.value = "";
                        '
                        >BORRAR</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    <script src="./JS/index.js"></script>
</body>
</html>