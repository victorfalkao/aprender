<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../style.css">
        
        <script type="text/javascript">
            function corrigirSelecao(identidade, valor){
                var testo = "p"+identidade;
             if(valor === "verdadeiro"){   
        document.getElementById(identidade).style = "background-color: green";
        document.getElementById(testo).style = "display: inline-block";
             }
             else{
         document.getElementById(identidade).style = "background-color: red";
         document.getElementById(testo).style = "display: inline-block";
             }
            }
        </script>
        
    </head>
    <body>
        <h1>SELECIONE AS IMAGENS COM OS NOMES INICIADOS PELA VOGAL DESTACADA</h1>
        <principal>
            
            <aside>
                <p>A</p>
            </aside>
            
            <main>
                <button type="button" name="verdadeiro" id="1" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/abelha.jpg" alt="abelha"/><p id="p1">MUITO BEM!  : )</p></button>
                <button type="button" name="verdadeiro" id="2" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/apito.png" alt="apito"/><p id="p2">MUITO BEM!  : )</p></button>
                <button type="button" name="falso" id="3" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/pintinho.jpg" alt="pintinho"/><p id="p3">QUE PENA!  : (</p></button>
                <button type="button" name="verdadeiro" id="4" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/alho.jpg" alt="alho"/><p id="p4">MUITO BEM!  : )</p></button>
                <button type="button" name="falso" id="5" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/borboleta.jpg" alt="borboleta"/><p id="p5">QUE PENA!  : (</p></button>
                <button type="button" name="verdadeiro" id="6" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/anel.png" alt="anel"/><p id="p6">MUITO BEM!  : )</p></button>
                <button type="button" name="verdadeiro" id="7" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/arvore.png" alt="árvore"/><p id="p7">MUITO BEM!  : )</p></button>
                <button type="button" name="verdadeiro" id="8" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/abacaxi.png" alt="abacaxi"/><p id="p8">MUITO BEM!  : )</p></button>
            </main>
            
        </principal>
    
    <br><br><br><br>
    
    <principal>
            
            <aside>
                <p>E</p>
            </aside>
            
            <main>
                <button type="button" id="9" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/cachorro.jpg" alt="cachorro"/><p id="p9">QUE PENA!  : (</p></button>
            <button type="button" id="10" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/estrela.jpg" alt="estrela"/><p id="p10">MUITO BEM!  : )</p></button>
            <button type="button" id="11" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/elefante.png" alt="elefante"/><p id="p11">MUITO BEM!  : )</p></button>
            <button type="button" id="12" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/escada.jpg" alt="escada"/><p id="p12">MUITO BEM!  : )</p></button>
            <button type="button" id="13" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/sapo.jpg" alt="sapo"/><p id="p13">QUE PENA!  : (</p></button>
            <button type="button" id="14" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/espada.jpg" alt="espada"/><p id="p14">MUITO BEM!  : )</p></button>
            <button type="button" id="15" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/raquete.jpg" alt="raquete"/><p id="p15">QUE PENA!  : (</p></button>
            <button type="button" id="16" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img2/escova.jpg" alt="escova"/><p id="p16">MUITO BEM!  : )</p></button>
            </main>
            
        </principal>
    </body>
</html>
