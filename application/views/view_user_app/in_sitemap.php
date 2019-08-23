<?php

$en_all_7369 = $this->config->item('en_all_7369');
$in_published_trees = $this->Intents_model->in_fetch(array(
    'in_scope_entity_id' => 7598, //Tree
    'in_status_entity_id' => 6184, //Published
), array(), 0, 0, array(
    'in_outcome' => 'ASC',
));

echo '<div class="landing-page-intro">';


echo '<h1 style="margin-bottom:30px;" id="title-parent">' . $en_all_7369[10563]['m_icon'] . ' ' . $en_all_7369[10563]['m_name'] . '</h1>';

echo '<p style="margin:25px 0 15px;">So far I\'m trained on these '.count($in_published_trees).' intentions:</p>';


//Generate sitemap:
echo '<div class="list-group actionplan_list grey_list" style="margin-top:40px;">';
foreach($in_published_trees as $in_published_tree){
    echo echo_in_recommend($in_published_tree, null, null);
}

echo '</div>';
echo '</div>';

?>
