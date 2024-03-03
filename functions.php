<?php 
    function opt ($i) { ?>
        <div class="opt">
            <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>Ok', 'i<?= $i?>R', 'i<?= $i?>T', 'i<?= $i?>N')" id="<?= $i?>_OK" value="Ok" >
            <label for="<?= $i?>_OK"><i id="i<?= $i?>Ok" class="fa fa-thumbs-up w3-large"></i></label>
            <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>R', 'i<?= $i?>Ok', 'i<?= $i?>T', 'i<?= $i?>N')" id="<?= $i?>_R" value="Recuperar" >
            <label for="<?= $i?>_R"><i id="i<?= $i?>R" class="fa fa-wrench w3-large"></i></label>
            <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>T', 'i<?= $i?>R', 'i<?= $i?>Ok', 'i<?= $i?>N')" id="<?= $i?>_T" value="Trocar" >
            <label for="<?= $i?>_T"><i id="i<?= $i?>T" class="fa fa-thumbs-down w3-large"></i></label>
            <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>N', 'i<?= $i?>R', 'i<?= $i?>T', 'i<?= $i?>Ok')" id="<?= $i?>_N" value="Não insp." >
            <label for="<?= $i?>_N"><i id="i<?= $i?>N" class="fa fa-low-vision w3-large"></i></label>
        </div>
    <?php } ?>