<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

        
            <img src="https://br.cepcompression.com/cdn/shop/files/CEP_Logo_RGB_AnthraciteOnTransparent_500pxWidth_79ba741b-4e62-4664-9e2f-f019a0f954ff.png?v=1666626609" alt="">
    
            <nav>
                <ul>
    
                    <li class="escritas"> <a href="https://viacep.com.br/" target="_blank">Documentação </a></li>
                    <li class="escritas"> <a href="https://viacep.com.br/ws/01001000/json/" target="_blank">Exemplo </a></li>
                    
                </ul>
            </nav>
    
        
    </header>
    <hr class="linha">

    <section class="caixa">

        <div class="box">
            <form method="post">
                      <input type="text" name="cep" id="cep" placeholder="Digite seu CEP:">
            </form>
            
        </div>

     <section>
        <div class="info">
            <div>
                 <?php
                    if(isset($_POST['cep'])) {
                         $cep = $_POST['cep'];
                         $url = "http://viacep.com.br/ws/{$cep}/json/";
                         $informacao = json_decode(file_get_contents($url));
    
                                 if(isset($informacao->erro)){
                                         echo "CEP não encontrado";
                                        } else {
                                          echo "CEP: ".$informacao->cep."<br>";
                                          echo "Logradouro: ".$informacao->logradouro."<br>";
                                          echo "Cidade: ".$informacao->localidade."<br>";
                                          echo "IBGE: ".$informacao->ibge."<br>";
                                          echo "DDD: ".$informacao->ddd."<br>";
                                          echo "Estado: ".$informacao->uf."<br>";
                                         }
                                            }
?>
            </div>
           
        </div>
        </section>

    </section>
    <hr class="linha">

    <section class="Créditos" class="">
        <div class="container"> 
             <p class="escritas"> Site produzido por <a href="https://github.com/LeonardoXavier1" target="_blank">Leonardo Matheus Xavier Vieira</a> 🔥 </p>
        </div>

        

    </section>

</body>
</html>