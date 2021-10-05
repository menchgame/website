<style>
    .list-border{
        margin-bottom: 34px;
        border: 1px solid #000;
        border-radius: 13px;
        overflow: hidden;
    }
    .list-border .list-group-item{
        border-bottom: 1px solid #000;
    }
    .list-border .list-group-item:last-of-type{
        border-bottom: 0 !important;
    }
</style>

<?php

function build_item($e, $link, $desc){

    return '<a href="/-27970?e__id='.$e['e__id'].'&go_to='.urlencode($link).'" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex justify-content-between">
      <h3 class="mb-1"><b><span class="icon-block-lg">'.view_cover(12274,$e['e__cover']).'</span>'.$e['e__title'].'</b></h3>
      <small>&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;</small>
    </div>
    '.( strlen($desc) ? '<p class="mb-1" style="padding: 8px 3px 8px 52px;">'.$desc.'</p>' : '' ) .'
  </a>';

}

//Set default loading:
if(!isset($_GET['e__id'])){
    $_GET['e__id'] = '27960,27961';
}

$ui = '';

foreach(explode(',',$_GET['e__id']) as $e__id){

    //Fetch ID:
    $headers = $this->E_model->fetch(array(
        'e__id' => $e__id,
        'e__type IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
    ));
    if(!count($headers)){
        continue;
    }

    //Fetch all links for this link list
    $list_body = '';
    foreach($this->X_model->fetch(array(
        'x__up' => $headers[0]['e__id'],
        'x__type IN (' . join(',', $this->config->item('n___4592')) . ')' => null, //SOURCE LINKS
        'x__status IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
        'e__type IN (' . join(',', $this->config->item('n___7357')) . ')' => null, //PUBLIC
    ), array('x__down'), 0, 0, array('x__spectrum' => 'ASC', 'e__title' => 'ASC')) as $list_e){

        //Make sure this has a valid URL:
        if(substr($list_e['x__message'], 0, 2)=='//'){

            //URL override in link message:
            $list_body .= build_item($list_e, $list_e['x__message']);

        } else {

            //Search for URL:
            foreach($this->X_model->fetch(array(
                'x__type IN (' . join(',', $this->config->item('n___4537')) . ')' => null, //SOURCE LINK URLS
                'x__status IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                'e__type IN (' . join(',', $this->config->item('n___7357')) . ')' => null, //PUBLIC
                'x__down' => $list_e['e__id'],
            ), array('x__up'), 0, 0, array('e__spectrum' => 'DESC')) as $url){
                $list_body .= build_item($list_e, $url['x__message'], $list_e['x__message']);
            }

        }
    }

    if($list_body){
        //Add this to the UI:
        $ui .= '<div class="css__title x-info grey"><span class="icon-block-lg">'.view_cover(12274,$headers[0]['e__cover']).'</span>&nbsp;&nbsp;'.$headers[0]['e__title'].'</div>';
        $ui .= '<div class="list-group list-border">';
        $ui .= $list_body;
        $ui .= '</div>';
    }
}

echo $ui;