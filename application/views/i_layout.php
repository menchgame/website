<?php

//Just Viewing:
$new_order = ( $this->session->userdata('session_page_count') + 1 );
$this->session->set_userdata('session_page_count', $new_order);
$this->X_model->create(array(
    'x__source' => $member_e['e__id'],
    'x__type' => 4993, //Member Opened Idea
    'x__right' => $i_focus['i__id'],
    'x__spectrum' => $new_order,
));


$e___11035 = $this->config->item('e___11035'); //NAVIGATION
$e_of_i = e_of_i($i_focus['i__id']);

if(!$e_of_i){

    //DO they already have a request?
    $request_history = $this->X_model->fetch(array(
        'x__source' => $member_e['e__id'],
        'x__status IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
        'x__type' => 14577,
        'x__right' => $i_focus['i__id'],
    ), array(), 1, 0, array('x__id' => 'DESC'));

    if(count($request_history)){

        echo '<div class="msg alert alert-warning no-margin"><span class="icon-block"><i class="fas fa-exclamation-circle zq12274"></i></span>You submitted your request to join ' . view_time_difference(strtotime($request_history[0]['x__time'])) . ' ago. You will be notified soon.</span></div>';

    } else {

        echo '<div class="msg alert alert-warning no-margin"><span class="icon-block"><i class="fas fa-exclamation-circle zq12274"></i></span>You are not a source for this idea, yet. <span class="inline-block '.superpower_active(10939).'"><a href="/i/i_e_add/'.$i_focus['i__id'].'" class="inline-block css__title">REQUEST TO JOIN</a></span></div>';

    }
}


if(isset($_GET['load__e']) && superpower_active(14005, true)){
    //Filtered Specific Source:
    $e_filters = $this->E_model->fetch(array(
        'e__id' => intval($_GET['load__e']),
        'e__type IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
    ));
    if(count($e_filters)){
        echo view__load__e($e_filters[0]);
    }
}


$item_counts = array();
$e___11018 = $this->config->item('e___11018');
foreach($e___11018 as $x__type => $m) {

    //Have Needed Superpowers?
    $require = 0;
    $missing = 0;
    $meeting = 0;
    foreach(array_intersect($this->config->item('n___10957'), $m['m__profile']) as $superpower_required){
        $require++;
        if(superpower_active($superpower_required, true)){
            $meeting++;
        } else {
            $missing++;
        }
    }
    if($require && $missing){
        //STRICT: Anything missing and it would be skipped!
        continue;
    }

    $coin_count = view_coins_i($x__type, $i_focus['i__id'], 0, false);
    if($coin_count > 0 || (in_array($x__type , $this->config->item('n___13530')) && superpower_active(10939, true))){
        $item_counts[$x__type] = $coin_count;
    }
}


//Determine focus/auto-load tab:
$focus_tab = 0;
foreach($this->config->item('e___20424') as $x__type => $m) {
    if(isset($item_counts[$x__type]) && $item_counts[$x__type] > 0){
        $focus_tab = $x__type;
        break;
    }
}



//Top Notes
echo view_pill(11019,  $item_counts[11019], $e___11018[11019], view_body_i(11019, $item_counts[11019], $i_focus['i__id']), true);


//Focus Notes
echo '<div class="row justify-content" id="thisNode" style="padding-bottom: 55px;">';
echo view_i(4250, 0, null, $i_focus);
echo '</div>';


//Source Menu:
//echo '<ul class="nav nav-pills nav12273"></ul>';

//Print results:
foreach($item_counts as $x__type => $counter) {
    //echo view_pill($x__type, $counter, $e___11018[$x__type], ($x__type==$focus_tab ? view_body_i($x__type, $counter, $i_focus['i__id']) : null ), ($x__type==$focus_tab));
    if($x__type==11019){
        continue;
    }
    echo view_pill($x__type, $counter, $e___11018[$x__type], view_body_i($x__type, $counter, $i_focus['i__id']), true);
}



?>

<style>
    <?= ( !$e_of_i ? '.note-editor {display:none;}' : '' ) ?>
</style>
<input type="hidden" id="focus__type" value="12273" />
<input type="hidden" id="focus__id" value="<?= $i_focus['i__id'] ?>" />
<script type="text/javascript">

    $(document).ready(function () {

        $([document.documentElement, document.body]).animate({
            scrollTop: $("#thisNode").offset().top
        }, 0);

        load_tab(<?= $focus_tab ?>);

        //Look for power editor updates:
        $('.x_set_class_text').keypress(function(e) {
            var code = (e.keyCode ? e.keyCode : e.which);
            if (code == 13) {
                x_set_text(this);
                e.preventDefault();
            }
        }).change(function() {
            x_set_text(this);
        });

    });

</script>

