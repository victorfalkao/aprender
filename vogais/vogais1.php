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
        <h1>VOGAIS</h1>
        <h3>COMPLETE OS BALÕES COM AS VOGAIS QUE ESTÃO FALTANDO</h3>
        <button type="button"><img src="../img/BALAO A_VERMELHO.png" alt="balão vermelho com a letra A"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="e" id="0" value="" onkeyup="corrigir(this.id,this.value,this.name)"><img src="../img/BALAO AMARELO.png" alt="balão amarelo"/></button>
        <button type="button"><img src="../img/BALAO I_AZUL.png" alt="balão azul com a letra I"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="o" id="1" value="" onkeyup="corrigir(this.id,this.value,this.name)"><img src="../img/BALAO VERDE.png" alt="balão verde"/></button>
        <button type="button"><img src="../img/BALAO U_ROXO.png" alt="balão roxo com a letra U"/></button>
        
        <br><br>
        <h3>VAMOS MAIS UMA VEZ</h3>
        
        <button type="button" class="rela"><input class="baloens" type="text" name="a" id="2" value="" onkeyup="corrigir(this.id,this.value,this.name)"><img src="../img/BALAO VERMELHO.png" alt="balão vermelho"/></button>
        <button type="button"> <img src="../img/BALAO E_AMARELO.png" alt="balão amarelo com a letra E"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="i" id="3" value="" onkeyup="corrigir(this.id,this.value,this.name)"><img src="../img/BALAO AZUL.png" alt="balão azul"/></button>
        <button type="button"><img src="../img/BALAO O_VERDE.png" alt="balão verde com a letra O"/></button>
        <button type="button" class="rela"><input class="baloens" type="text" name="u" id="4" value="" onkeyup="corrigir(this.id,this.value,this.name)"><img src="../img/BALAO ROXO.png" alt="balão roxo"/></button>
        
    </body>
</html>
