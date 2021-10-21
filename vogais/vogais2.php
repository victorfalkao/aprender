<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../style.css">
        
        <script type="text/javascript">
            function corrigir(identidade,resposta,gabarito){
        
                if(gabarito.toUpperCase() !== resposta.toUpperCase()){
                    document.getElementById(identidade).value="";
                    alert("OPS!!! TENTE MAIS UMA VEZ");
                }else{
                        identidade++;
                        var lista = document.querySelectorAll("input");
                            if(identidade===lista.length){
                                alert("MEUS PARABENS, VOCÊ CONCLUIU ESSA TAREFA");
                            }else{
                                document.getElementById(identidade).focus();
                        }
                    
                }
            }
        </script>
    </head>
    <body>
        <h1>ESCREVA A LETRA INICIAL DE CADA DESENHO!</h1> 
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%" src="../img/aviao.jpg" alt="avião"/>
            <input class="text_vogais2" type="text" name="a" id="0" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/elefante.png" alt="elefanteS"/>
            <input class="text_vogais2" type="text" name="e" id="1" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/ioio.png" alt="io-io"/>
            <input class="text_vogais2" type="text" name="i" id="2" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/ovelha.jpg" alt="ovelha"/>
            <input class="text_vogais2" type="text" name="o" id="3" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/urso.jpg" alt="elefante"/>
            <input class="text_vogais2" type="text" name="u" id="4" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/ilha.jpg" alt="ilha"/>
            <input class="text_vogais2" type="text" name="i" id="5" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/ovo.jpg" alt="ovo"/>
            <input class="text_vogais2" type="text" name="o" id="6" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/estrela.jpg" alt="estrela"/>
            <input class="text_vogais2" type="text" name="e" id="7" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/abacaxi.png" alt="abacaxi"/>
            <input class="text_vogais2" type="text" name="a" id="8" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/uva.jpg" alt="uva"/>
            <input class="text_vogais2" type="text" name="u" id="9" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/espelho.jpg" alt="espelho"/>
            <input class="text_vogais2" type="text" name="e" id="10" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/unicornio.jpg" alt="unicornio"/>
            <input class="text_vogais2" type="text" name="u" id="11" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/olho.jpg" alt="olho"/>
            <input class="text_vogais2" type="text" name="o" id="12" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/igreja.png" alt="igreja"/>
            <input class="text_vogais2" type="text" name=i id="13" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
        
        <div class="vogais2_div">
            <img style="height: 300px; max-width: 100%"  src="../img/arvore.png" alt="árvore"/>
            <input class="text_vogais2" type="text" name="a" id="14" value="" onkeyup="corrigir(this.id,this.value,this.name)">
        </div>
    </body>
</html>
