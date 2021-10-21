<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../style.css">
        
        <script type="text/javascript">
            function corrigir(gabarito,resposta){
                
                if(gabarito.toUpperCase() !== resposta.toUpperCase()){
                    document.getElementById(gabarito).value="";
                    alert("OPS!!! TENTE MAIS UMA VEZ");
                }else{
                    var lista = document.querySelectorAll("input");
                    for(var i=0; i<lista.length; i++){
                        if(lista[i].id === gabarito){
                            i++;
                            if(i===lista.length){
                                alert("MEUS PARABENS, VOCÊ CONCLUIU ESSA PRIMEIRA TAREFA");
                            }else{
                            var next = lista[i].id;
                            document.getElementById(next).focus();
                        }
                        break;
                        }
                    }
                    //alert(proximo);
                }
            }
        </script>
    </head>
    <body>
        <h1>VOGAIS</h1>
        <h3>COMPLETE OS BALÕES COM AS VOGAIS QUE ESTÃO FALTANDO</h3>
        <button type="button"><img src="../img/BALAO A_VERMELHO.png" alt="balão vermelho com a letra A"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="e" id="e" value="" onkeyup="corrigir(this.id,this.value)"><img src="../img/BALAO AMARELO.png" alt="balão amarelo"/></button>
        <button type="button"><img src="../img/BALAO I_AZUL.png" alt="balão azul com a letra I"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="o" id="o" value="" onkeyup="corrigir(this.id,this.value)"><img src="../img/BALAO VERDE.png" alt="balão verde"/></button>
        <button type="button"><img src="../img/BALAO U_ROXO.png" alt="balão roxo com a letra U"/></button>
        
        <br><br>
        
        <button type="button" class="rela"><input class="baloens" type="text" name="a" id="a" value="" onkeyup="corrigir(this.id,this.value)"><img src="../img/BALAO VERMELHO.png" alt="balão vermelho"/></button>
        <button type="button"> <img src="../img/BALAO E_AMARELO.png" alt="balão amarelo com a letra E"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="i" id="i" value="" onkeyup="corrigir(this.id,this.value)"><img src="../img/BALAO AZUL.png" alt="balão azul"/></button>
        <button type="button"><img src="../img/BALAO O_VERDE.png" alt="balão verde com a letra O"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="u" id="u" value="" onkeyup="corrigir(this.id,this.value)"><img src="../img/BALAO ROXO.png" alt="balão roxo"/></button>
        
    </body>
</html>
