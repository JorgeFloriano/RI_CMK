<?php 
    function opt ($i) { ?>
        <div class="opt">

            <input type="radio" hidden name="txt<?= $i?>" id="<?= $i?>_OK" value="Ok" >
            <i onclick="check('i<?= $i?>Ok', '<?= $i?>_OK', 'i<?= $i?>R', '<?= $i?>_R', 'i<?= $i?>T', '<?= $i?>_T', 'ok', 'secJust<?= $i?>' ,'idJust<?= $i?>')" 
            id="i<?= $i?>Ok" class="fa fa-thumbs-up w3-large"></i>

            <input type="radio" hidden name="txt<?= $i?>" id="<?= $i?>_R" value="Recuperar" >
            <i onclick="check('i<?= $i?>R', '<?= $i?>_R', 'i<?= $i?>Ok', '<?= $i?>_OK', 'i<?= $i?>T', '<?= $i?>_T', 're', 'secJust<?= $i?>' ,'idJust<?= $i?>')" 
            id="i<?= $i?>R" class="fa fa-wrench w3-large"></i>

            <input type="radio" hidden name="txt<?= $i?>" id="<?= $i?>_T" value="Trocar" >
            <i onclick="check('i<?= $i?>T', '<?= $i?>_T', 'i<?= $i?>R', '<?= $i?>_R', 'i<?= $i?>Ok', '<?= $i?>_OK', 'tr', 'secJust<?= $i?>' ,'idJust<?= $i?>')" 
            id="i<?= $i?>T" class="fa fa-thumbs-down w3-large"></i>
            
        </div>
        <section style="padding: 0;display: none;" class="obs" name="txtSecJust<?= $i?>" id="secJust<?= $i?>">
            <label for="idJust<?= $i?>">Justificativa:</label>
            <textarea name="txtJust<?= $i?>" id="idJust<?= $i?>" class='autoExpand' rows='1' data-min-rows='1' autofocus></textarea>
        </section>
    <?php } ?>

    <!-- <div class="opt">
        <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>Ok', 'i<?= $i?>R', 'i<?= $i?>T', 'i<?= $i?>N')" id="<?= $i?>_OK" value="Ok" >
        <label for="<?= $i?>_OK"><i id="i<?= $i?>Ok" class="fa fa-thumbs-up w3-large"></i></label>
        <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>R', 'i<?= $i?>Ok', 'i<?= $i?>T', 'i<?= $i?>N')" id="<?= $i?>_R" value="Recuperar" >
        <label for="<?= $i?>_R"><i id="i<?= $i?>R" class="fa fa-wrench w3-large"></i></label>
        <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>T', 'i<?= $i?>R', 'i<?= $i?>Ok', 'i<?= $i?>N')" id="<?= $i?>_T" value="Trocar" >
        <label for="<?= $i?>_T"><i id="i<?= $i?>T" class="fa fa-thumbs-down w3-large"></i></label>
        <input type="radio" hidden name="txt<?= $i?>" onclick="check('i<?= $i?>N', 'i<?= $i?>R', 'i<?= $i?>T', 'i<?= $i?>Ok')" id="<?= $i?>_N" value="Não insp." >
        <label for="<?= $i?>_N"><i id="i<?= $i?>N" class="fa fa-low-vision w3-large"></i></label>
    </div> -->