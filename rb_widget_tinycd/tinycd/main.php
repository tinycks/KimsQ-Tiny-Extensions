    <div id="<?php echo $wdgvar['cd_id']?>" class="countdown_dashboard">
        <div class="dash days_dash">
            <div class="bor">
                <!-- Days -->
                <span class="dash_title">일</span>
                <div class="digit">
                    0
                </div>
                <div class="digit">
                    0
                </div>
                <div class="digit">
                    0
                </div>
            </div>
        </div>

        <div class="dash hours_dash">
            <div class="bor">
                <!-- Hours -->
                <span class="dash_title">시간</span>
                <div class="digit">
                    0
                </div>
                <div class="digit">
                    0
                </div>
            </div>
        </div>

        <div class="dash minutes_dash">
            <div class="bor">
                <!-- Minutes -->
                <span class="dash_title">분</span>
                <div class="digit">
                    0
                </div>
                <div class="digit">
                    0
                </div>
            </div>
        </div>

        <div class="dash seconds_dash">
            <div class="bor">
                <!-- Seconds -->
                <span class="dash_title">초</span>
                <div class="digit">
                    0
                </div>
                <div class="digit">
                    0
                </div>
            </div>
        </div>
    </div>
    
    <div class="clear"></div>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $('#<?php echo $wdgvar['cd_id']?>').countDown({
            targetDate : {
                'day' : <?php echo $wdgvar['cd_d']?>,
                'month' : <?php echo $wdgvar['cd_m']?>,
                'year' : <?php echo $wdgvar['cd_y']?>,
                'hour' : <?php echo $wdgvar['cd_h']?>,
                'min' : <?php echo $wdgvar['cd_i']?>,
                'sec' : <?php echo $wdgvar['cd_s']?>
            },
            omitWeeks : true
        });
    }); 
</script>