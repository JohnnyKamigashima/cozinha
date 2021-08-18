<!-- calc para temperos de marinar carne -->
<div class="cells">
    <div class="titulo">
        Calculadora tempero para Marinar carne
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Peso da carne (g):</span>
        </div>
        <input type="text" class="form-control" id="CTM_carne" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade de sal de cura 1 (g):</span>
        </div>
        <input type="text" class="form-control" id="CTM_sal1" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade de sal (g):</span>
        </div>
        <input type="text" class="form-control" id="CTM_sal" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade de alho (g):</span>
        </div>
        <input type="text" class="form-control" id="CTM_alho" value="0">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default"> Quantidade total de outros temperos (g):</span>
        </div>
        <input type="text" class="form-control" id="CTM_outros" value="0">
    </div>

    <script>
        $(document).ready(function() {
            $('#CTM_carne').keyup(function() { //calculate scale
                $("#CTM_sal1").val(0.0025 * document.getElementById('CTM_carne').value);
                $("#CTM_sal").val(0.03 * document.getElementById('CTM_carne').value);
                $("#CTM_alho").val(0.003 * document.getElementById('CTM_carne').value);
                $("#CTM_outros").val(0.007 * document.getElementById('CTM_carne').value);
            })
        })
    </script>
</div>