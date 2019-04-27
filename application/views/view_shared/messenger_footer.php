<div class="pfooter"><img src="/img/bp_128.png">Mench v<?= $this->config->item('app_version') ?></div>
</div>
</div>

<?php $this->load->view('view_shared/messenger_web_chat'); ?>


<div class="modal fade" id="markCompleteModal" tabindex="-1" role="dialog" aria-labelledby="markCompleteModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p style="padding-bottom:20px;">You are about to stop your intention to <b class="stop-title"></b>. Choose one of the following options to continue:</p>

                <div class="form-group label-floating is-empty">
                <?php
                foreach($this->config->item('en_all_6150') as $en_id => $m){
                    echo '<span class="radio">
                        <label style="font-size:1em; font-weight: 300;">
                            <input type="radio" id="in_type_' . $en_id . '" name="in_type" value="' . $en_id . '" />
                            ' . $m['m_icon'] . ' <b>' . $m['m_name'] . '</b> ' . $m['m_desc'] . '
                        </label>
                    </span>';
                }
                ?>
                </div>

                <p style="font-size:1em !important;">Note: You can re-add this intention back to your Action Plan later on if you decided that you want to <span class="stop-title"></span> again.</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fas fa-hand-paper"></i> Stop</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



</body>
</html>
