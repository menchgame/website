<?php

echo '<div class="row justify-content">';
foreach($this->X_model->fetch(array(
    'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
    'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
    'x__following' => 13450,
), array('x__follower'), 0, 0, array('e__weight' => 'DESC')) as $e){
    echo view_card_e(12274, $e);
}
echo '</div>';