<!-- calc plano escala -->
<div class="cells">
    <div class="titulo">
        Calculadora de Pão Rustico
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Peso de farinha (g):</span>
        </div>
        <input type="text" class="form-control" id="CPR_farinha" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade de água (g):</span>
        </div>
        <input type="text" class="form-control" id="CPR_agua" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade de sal (g):</span>
        </div>
        <input type="text" class="form-control" id="CPR_sal" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade de levain (g):</span>
        </div>
        <input type="text" class="form-control" id="CPR_levain" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade de Fermento Biológico (g):</span>
        </div>
        <input type="text" class="form-control" id="CPR_fermento" value="0">
    </div>

    <script>
        $(document).ready(function() {
            $('#CPR_farinha').keyup(function() { //calculate scale
                $("#CPR_agua").val(0.65 * document.getElementById('CPR_farinha').value);
                $("#CPR_sal").val(0.02 * document.getElementById('CPR_farinha').value);
                $("#CPR_levain").val(0.20 * document.getElementById('CPR_farinha').value);
                $("#CPR_fermento").val(0.0120 * document.getElementById('CPR_farinha').value);
            })
        })
    </script>
</div>