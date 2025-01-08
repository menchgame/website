<?php

//See if we need to redirect to starting point?
if($player_e && !superpower_unlocked(10939) && i_startable($focus_i, $player_e['e__id']) ){
    //Player without editing superpowers has viewed an idea they have discovered already, so get them there:
    js_php_redirect('/'.$focus_i['i__hashtag'].'/start', 13);
}

//Focus Idea:
echo '<div class="main_item view__12273 row justify-content">';
echo view__card_i(42288,  $focus_i);
echo '</div>';

if(superpower_unlocked(10939) || isset($_GET['open'])){
    echo view__i_nav(false, $focus_i);
}

echo '<a href="javascript:void(0)" onclick="openPopUp(\''.i_redirect_url($focus_i).'\')">'.i_redirect_url($focus_i).'</a>';

?>

<script>
    $(document).ready(function () {
        load_hashtag_menu();
        show_more(<?= $focus_i['i__id'] ?>);
    });
</script>