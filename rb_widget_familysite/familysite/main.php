       
        <div class="familysite_widget <?php echo $wdgvar['rl']?>">
            <div class="inside familysite_widget <?php echo $wdgvar['rl']?>">
                <a href="#none"><?php echo $wdgvar['title']?></a>
                <ul class=" <?php echo $wdgvar['tb']?>">
        <?php for($_k = 1; $_k <= $wdgvar['tabnum']; $_k++):?>                    
                    <li>
                        <a href="<?php echo $wdgvar['link'.$_k]?>" target="<?php echo $wdgvar['target'.$_k]?>"><?php echo $wdgvar['title'.$_k]?></a>
                    </li>
        <?php endfor?>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                familysite_widget();
            });
        </script>