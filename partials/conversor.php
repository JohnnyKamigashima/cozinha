 <!-- Tabela Medidas cozinha -->
 <div class="cells">
     <div class="titulo">
         Conversor de medidas de cozinha
     </div>
     <div class="rotulo">
         Medida:
     </div>
     <div class="entrada">
         <select name="medida" id="medida" class="form-control">
             <option value="120" selected>Xícara Farinha</option>
             <option value="200" selected>Xícara Manteiga</option>
             <option value="250">Xícara Água</option>
             <option value="180">Xícara Óleo</option>
             <option value="300">Xícara Sal</option>
             <option value="200">Xícara Açúcar</option>
             <option value="150">Xícara Polvilho</option>
             <option value="200">Xícara Arroz</option>
             <option value="80">Xícara Queijo</option>
             <option value="200">Copo Americano água</option>
             <option value="160">Copo Americano arroz</option>
             <option value="7">Colher de sopa de farinha</option>
             <option value="15">Colher de sopa de água</option>
             <option value="15">Colher de sopa de óleo</option>
             <option value="10">Colher de sopa de açúcar</option>
             <option value="9">Colher de sopa de polvilho</option>
             <option value="12">Colher de sopa de Manteiga</option>
             <option value="15">Colher de sopa de arroz</option>
             <option value="20">Colher de sopa de sal</option>
             <option value="5">Colher de sopa de queijo</option>
             <option value="5">Colher de sobremesa de farinha</option>
             <option value="10">Colher de sobremesa de água</option>
             <option value="9">Colher de sobremesa de açúcar</option>
             <option value="9">Colher de sobremesa de Manteiga</option>
             <option value="5">Colher de sobremesa de polvilho</option>
             <option value="3">Colher de cha de farinha</option>
             <option value="5">Colher de cha de água</option>
             <option value="4">Colher de cha de açúcar</option>
             <option value="5">Colher de cha de sal</option>
             <option value="10">Colher de cha de fermento</option>
             <option value="4">Colher de cha de Manteiga</option>
             <option value="3">Colher de cha de polvilho</option>
             <option value="1.5">Colher de cha de queijo</option>
             <!-- <option value="xicara_farinha" selected>Xícara Farinha</option>
             <option value="xicara_agua">Xícara Água</option>
             <option value="xicara_oleo">Xícara Óleo</option>
             <option value="xicara_acucar">Xícara Açúcar</option>
             <option value="xicara_polvilho">Xícara Polvilho</option>
             <option value="xicara_arroz">Xícara Arroz</option>
             <option value="xícara_queijo">Xícara Queijo</option>
             <option value="copo_agua">Copo Americano água</option>
             <option value="copo_arroz">Copo Americano arroz</option>
             <option value="colher_sopa_farinha">Colher de sopa de farinha</option>
             <option value="colher_sopa_agua">Colher de sopa de água</option>
             <option value="colher_sopa_oleo">Colher de sopa de óleo</option>
             <option value="colher_sopa_acucar">Colher de sopa de açúcar</option>
             <option value="colher_sopa_polvilho">Colher de sopa de polvilho</option>
             <option value="colher_sopa_arroz">Colher de sopa de arroz</option>
             <option value="colher_sopa_queijo">Colher de sopa de queijo</option>
             <option value="colher_sobremesa_farinha">Colher de sobremesa de farinha</option>
             <option value="colher_sobremesa_agua">Colher de sobremesa de água</option>
             <option value="colher_sobremesa_oleo">Colher de sobremesa de óleo</option>
             <option value="colher_sobremesa_acucar">Colher de sobremesa de açúcar</option>
             <option value="colher_sobremesa_polvilho">Colher de sobremesa de polvilho</option>
             <option value="colher_sobremesa_arroz">Colher de sobremesa de arroz</option>
             <option value="colher_sobremesa_queijo">Colher de sobremesa de queijo</option>
             <option value="colher_cha_farinha">Colher de cha de farinha</option>
             <option value="colher_cha_agua">Colher de cha de água</option>
             <option value="colher_cha_oleo">Colher de cha de óleo</option>
             <option value="colher_cha_acucar">Colher de cha de açúcar</option>
             <option value="colher_cha_polvilho">Colher de cha de polvilho</option>
             <option value="colher_cha_arroz">Colher de cha de arroz</option>
             <option value="colher_cha_queijo">Colher de cha de queijo</option> -->
         </select>
     </div>
     <div class="desc">
         <p id="descricao">
         </p>
     </div>

     <div class="input-group mb-3">
         <div class="input-group-prepend">
             <span class="input-group-text" id="inputGroup-sizing-default">
                 Medida:
             </span>
         </div>
         <input type="text" class="form-control" id="input" name="input">
     </div>

     <div class="input-group mb-3">
         <div class="input-group-prepend">
             <span class="input-group-text" id="inputGroup-sizing-default">
                 Peso (g):
             </span>
         </div>
         <input type="text" class="form-control" name="peso" id="peso">
     </div>

     

     <script>
         $(document).ready(function() {
             $('#input').keyup(function() {
                 $("#peso").val(Number(document.getElementById('medida').value) * Number(document.getElementById('input').value));
             })
             
         })
     </script>
 </div>