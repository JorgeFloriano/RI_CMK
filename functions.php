<?php 
    function opt ($i, $msg) { ?>
        <section class="item" id="<?= $i?>" name="txt<?= $i?>">
            <section class="ask">
                <div class="lab">
                    <p><?= $i?>-<?= $msg?>.</p>
                </div>
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
            </section>
            <section style="display: none;" class="obs" name="txtSecJust<?= $i?>" id="secJust<?= $i?>">
                <label style="margin-right: 100px;" for="idJust<?= $i?>">Justificativa:</label>
                <textarea name="txtJust<?= $i?>" id="idJust<?= $i?>" class='autoExpand' rows='1' data-min-rows='1' autofocus></textarea>
            </section>
        </section>
    <?php }
?>
