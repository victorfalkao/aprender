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
                <button type="button" name="verdadeiro" id="1" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/abelha.jpg" alt="abelha"/><p id="p1">MUITO BEM!  : )</p></button>
                <button type="button" name="verdadeiro" id="2" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/apito.png" alt="apito"/><p id="p2">MUITO BEM!  : )</p></button>
                <button type="button" name="falso" id="3" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/pintinho.jpg" alt="pintinho"/><p id="p3">QUE PENA!  : (</p></button>
                <button type="button" name="verdadeiro" id="4" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/alho.jpg" alt="alho"/><p id="p4">MUITO BEM!  : )</p></button>
                <button type="button" name="falso" id="5" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/borboleta.jpg" alt="borboleta"/><p id="p5">QUE PENA!  : (</p></button>
                <button type="button" name="verdadeiro" id="6" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/anel.png" alt="anel"/><p id="p6">MUITO BEM!  : )</p></button>
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
                <button type="button" id="9" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/cachorro.jpg" alt="cachorro"/><p id="p9">QUE PENA!  : (</p></button>
            <button type="button" id="10" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/estrela.jpg" alt="estrela"/><p id="p10">MUITO BEM!  : )</p></button>
            <button type="button" id="11" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/elefante.png" alt="elefante"/><p id="p11">MUITO BEM!  : )</p></button>
            <button type="button" id="12" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/escada.jpg" alt="escada"/><p id="p12">MUITO BEM!  : )</p></button>
            <button type="button" id="13" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/sapo.jpg" alt="sapo"/><p id="p13">QUE PENA!  : (</p></button>
            <button type="button" id="14" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/espada.jpg" alt="espada"/><p id="p14">MUITO BEM!  : )</p></button>
            <button type="button" id="15" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/raquete.jpg" alt="raquete"/><p id="p15">QUE PENA!  : (</p></button>
            <button type="button" id="16" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/escova.jpg" alt="escova"/><p id="p16">MUITO BEM!  : )</p></button>
            </main>
            
        </principal>
    
    <br><br><br><br>
    
    <principal>
            
            <aside>
                <p>I</p>
            </aside>
            
            <main>
                <button type="button" id="17" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/pao.jpg" alt="cachorro"/><p id="p17">QUE PENA!  : (</p></button>
                <button type="button" id="18" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/indio.png" alt="estrela"/><p id="p18">MUITO BEM!  : )</p></button>
                <button type="button" id="19" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/passarinho.jpg" alt="raquete"/><p id="p19">QUE PENA!  : (</p></button>
                <button type="button" id="20" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/ioio.png" alt="elefante"/><p id="p20">MUITO BEM!  : )</p></button>
                <button type="button" id="21" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/ima.png" alt="escada"/><p id="p21">MUITO BEM!  : )</p></button>
                <button type="button" id="22" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/zebra.png" alt="sapo"/><p id="p22">QUE PENA!  : (</p></button>
                <button type="button" id="23" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/igreja.png" alt="espada"/><p id="p23">MUITO BEM!  : )</p></button>
                <button type="button" id="24" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/ilha.jpg" alt="escova"/><p id="p24">MUITO BEM!  : )</p></button>
            </main>
            
        </principal>
    
    <br><br><br><br>
    
    <principal>
            
            <aside>
                <p>O</p>
            </aside>
            
            <main>
                <button type="button" id="9" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/cachorro.jpg" alt="cachorro"/><p id="p9">QUE PENA!  : (</p></button>
            <button type="button" id="10" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/estrela.jpg" alt="estrela"/><p id="p10">MUITO BEM!  : )</p></button>
            <button type="button" id="11" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/elefante.png" alt="elefante"/><p id="p11">MUITO BEM!  : )</p></button>
            <button type="button" id="12" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/escada.jpg" alt="escada"/><p id="p12">MUITO BEM!  : )</p></button>
            <button type="button" id="13" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/sapo.jpg" alt="sapo"/><p id="p13">QUE PENA!  : (</p></button>
            <button type="button" id="14" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/espada.jpg" alt="espada"/><p id="p14">MUITO BEM!  : )</p></button>
            <button type="button" id="15" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/raquete.jpg" alt="raquete"/><p id="p15">QUE PENA!  : (</p></button>
            <button type="button" id="16" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/escova.jpg" alt="escova"/><p id="p16">MUITO BEM!  : )</p></button>
            </main>
            
        </principal>
    
    <br><br><br><br>
    
    <principal>
            
            <aside>
                <p>U</p>
            </aside>
            
            <main>
                <button type="button" id="9" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/cachorro.jpg" alt="cachorro"/><p id="p9">QUE PENA!  : (</p></button>
            <button type="button" id="10" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/estrela.jpg" alt="estrela"/><p id="p10">MUITO BEM!  : )</p></button>
            <button type="button" id="11" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/elefante.png" alt="elefante"/><p id="p11">MUITO BEM!  : )</p></button>
            <button type="button" id="12" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/escada.jpg" alt="escada"/><p id="p12">MUITO BEM!  : )</p></button>
            <button type="button" id="13" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/sapo.jpg" alt="sapo"/><p id="p13">QUE PENA!  : (</p></button>
            <button type="button" id="14" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/espada.jpg" alt="espada"/><p id="p14">MUITO BEM!  : )</p></button>
            <button type="button" id="15" name="falso" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/raquete.jpg" alt="raquete"/><p id="p15">QUE PENA!  : (</p></button>
            <button type="button" id="16" name="verdadeiro" onclick="corrigirSelecao(this.id,this.name)"><img src="../img/escova.jpg" alt="escova"/><p id="p16">MUITO BEM!  : )</p></button>
            </main>
            
        </principal>
    </body>
</html>
