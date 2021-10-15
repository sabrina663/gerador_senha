<?php
        function gerarsenha($tamanho,$upper,$lower,$number,$symbol){
            $up = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $lw = 'abcdefghijklmnopqrstuvwxyz';
            $num = '0123456789';
            $sym = "!@#$%¨&*()_+=";
            $senha = '';
            if($upper){
                $senha .= str_shuffle($up);
            }
            if($lower){
                $senha .= str_shuffle($lw);
            }
            if($number){
                $senha .= str_shuffle($num);
            }
            if($symbol){
                $senha .= str_shuffle($sym);
            }
            return $senha = substr(str_shuffle($senha), 0, $tamanho);
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Gerador de senha</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light border-bottom p-3">
        <div class="container-fluid">
          <span class="navbar-brand mb-0"><h2 class="display-5">Gerador de senha</h2></span>
        </div>
    </nav>
    <div class="container m-3">
        <div class="mb-4">
            <h5 class='display-6'>Essa e sua senha <small>(a cada refresh uma nova senha)</small>:</h5>
        </div>
            <div class="mb-3">
                <h2 class='display-2 text-center p-5 text-success'><?php echo gerarsenha(7,true,true,true,true);?></h2>
            </div>
    </div>
</body>
</html>