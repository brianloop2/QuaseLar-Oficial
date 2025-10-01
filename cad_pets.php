<?php
include './template/header.php';
?>

<section class="page_cad_pets">
    <main class="cad_pets">
        <nav class="cad_pets_itens1">

        </nav>
        <nav class="cad_pets_itens2">
            <div class="group_inputs_pet">
                <div>
                    <label for="">Nome do pet</label>
                    <input type="text">
                    <label for="">Sexo</label>
                    <select name="" id="">
                        <option value="" disabled selected>--Selecione--</option>
                        <option value="">Macho</option>
                        <option value="">Fêmea</option>
                    </select> 
                    <!-- <select id="idade" name="idade">
  <option value="">Selecione a idade</option>
  <option value="0-1">0-1 ano</option>
  <option value="2-5">2-5 anos</option>
  <option value="6-10">6-10 anos</option>
  <option value="mais-10">Mais de 10 anos</option>
</select> -->
                </div>
                <div>
                    <label for="">Espécie</label>
                    <input type="text">                 
                    <label for="">idade</label>
                    <input type="number" style="width: 3rem;" pattern="[0-9]{2}" maxlength="99" required>
                    <select name="" id="">
                        <option value="">--Selecione--</option>
                        <option value="">Semanas</option>
                        <option value="">Messes</option>
                        <option value="">Anos</option>
                    </select>
                </div>
                <div>
                    <label for="">Raça</label>
                    <input type="text">
                    <label for="">Porte</label>
                    <select name="" id="">
                        <option value="" disabled selected>--Selecione--</option>
                        <option value="">Grande</option>
                        <option value="">Medio</option>
                        <option value="">Pequeno</option>
                    </select>
                </div>
                <div>    
                    <label for="">Castrado</label>
                    <select name="" id="">
                        <option value="" disabled selected>--Selecione--</option>
                        <option value="">Sim</option>
                        <option value="">Não</option>
                    </select>


                    <label for="">Vacinado</label>
                     <select name="" id="">
                        <option value="" disabled selected>--Selecione--</option>
                        <option value="">Sim</option>
                        <option value="">Não</option>
                    </select>
                </div>
                <div>
                    <label for="">Motivo da doação</label>
                    <textarea name="" id="" rows="5" cols="33" style=" resize: none;"></textarea>
                </div>
            </div>
        </nav>
    </main>    
</section>