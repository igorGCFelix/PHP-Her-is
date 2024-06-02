<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Herói</title>
</head>
<body>
    <form action="index.php" method="post" class="p-5">
        <h1 id="title">Heróis</h1>
        <div>
            <label class="form-label">DC ou Marvel?</label>
            <input type="text" placeholder="Escolha um Universo" name="txt_universo" class="form-control">
        </div>
        <div>
            <label class="form-label">Herói</label>
            <input type="text" placeholder="Escolha um herói" name="txt_heroi" class="form-control">
        </div>
        <div>
            <label class="form-label">Quantidade de heróis</label>
            <input type="number" name="txt_qtdHeroi" class="form-control">
        </div>
        <br>
        <input type="submit" id="button" class="mx-auto">

    </form>

    <?php
        if(empty($_POST["txt_universo"]) or empty($_POST["txt_heroi"]) or empty($_POST["txt_qtdHeroi"])){
    ?>
    <h3 id="heroi_naocadastrado">Preencha as informações acima</h3>
    
    <?php
        }
        else{
            $universo = $_POST["txt_universo"];
            $heroi = $_POST["txt_heroi"];
            $qtdHeroi = $_POST["txt_qtdHeroi"];   
            
            if(strtolower($universo) == "marvel"){
    ?>
    <div id="div_marvel">
        <img id="img_marvel" src="imgs/Marvel_Logo.svg">
    </div>
    <?php
                for($x=1;$x<=$qtdHeroi;$x++){
                    if(strtolower($heroi)=="hulk"){
                        $imagem="<img src='imgs/hulk.avif'  class='imagens' >";
                    }
                    else if(strtolower($heroi)=="homem aranha"){
                        $imagem="<img src='imgs/homem-aranha.webp' class='imagens'>";
                    }
                    else if(strtolower($heroi)=="thor"){
                        $imagem="<img src='imgs/thor.jpg' class='imagens'>";
                    }
                    else if(strtolower($heroi)=="wolverine"){
                        $imagem="<img src='imgs/wolverine.webp'  class='imagens'>";
                    }
                    else if(strtolower($heroi)=="capitão américa"){
                        $imagem="<img src='imgs/capitão america.jpg' class='imagens' >";
                    }
                    else{
                        echo "heroi invalido";
                    }
                    echo $imagem;
                }
            }
    
            else if(strtolower($universo)=="dc"){
    ?>
    <div id="div_dc">
        <img id="img_dc" src="imgs/dc-logo.webp">
    </div>
    <?php
                while(1<=$qtdHeroi){
                    switch(strtolower($heroi)){
                        case "batman":
                            $imagem=("<img src='imgs/batman.avif' class='imagens'>");
                        break;
                        case "mulher maravilha":
                            $imagem=("<img src='imgs/mulher maravilha.webp'  class='imagens'>");
                        break;
                        case "superman":
                            $imagem=("<img src='imgs/superman.webp' class='imagens'>");
                        break;
                        case "flash":
                            $imagem=("<img src='imgs/flash.webp' class='imagens'>");
                        break;
                        case "lanterna verde":
                            $imagem=("<img src='imgs/lanterna verde.avif' class='imagens'>");
                        break;
                        default:
                            $imagem="<p>Herói não cadastrado.</p>";
                        break;
                    }
                    echo $imagem;
                    $qtdHeroi--;
                }
            }
    
            else{
                echo "<p id='heroi_naocadastrado'>Herói não cadastrado ou inexistente.</p>";
            }
        }
        
        
    ?>
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>