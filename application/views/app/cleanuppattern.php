<?php

foreach($this->Idea_cache->fetch(array(
    'LOWER(i__hashtag)' => strtolower($_GET['i__hashtag']),
)) as $i){

    echo '<h2>' . view__i_title($i) . '</h2>';

    $preg_query = $this->Mench_ledger->fetch(array(
        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
        'x__type IN (' . join(',', $this->config->item('n___42991')) . ')' => null, //Active Writes
        'x__next' => $i['i__id'],
        'x__following' => 32103,
    ));


    //See apply to sources:
    $apply_to = array();
    foreach($this->Mench_ledger->fetch(array(
        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
        'x__type' => 7545, //Following Add
        'x__next' => $i['i__id'],
    ), array('x__following')) as $this_tag){
        array_push($apply_to, intval($this_tag['x__following']));
    }


    if(count($preg_query)){



        if(isset($_GET['e__handle'])){

            $responses = 0;
            $updated = 0;
            $removed = 0;

            echo '<p>SOURCES Applying against ['.$preg_query[0]['x__message'].'] results in:</p>';

            foreach($this->Source_cache->fetch(array(
                'LOWER(e__handle)' => strtolower($_GET['e__handle']),
            )) as $e){
                foreach($this->Mench_ledger->fetch(array(
                    'x__following' => $e['e__id'],
                    'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                    'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                ), array('x__follower'), 0) as $x) {

                    $responses++;
                    $new_form = preg_replace($preg_query[0]['x__message'], "", $x['x__message'] );
                    $links_updated = 0;
                    $links_removed = 0;
                    if(strlen($new_form) != strlen($x['x__message'])) {

                        if(strlen($new_form)){

                            $updated++;
                            if(isset($_GET['update'])){

                                $this->Mench_ledger->update($x['x__id'], array(
                                    'x__message' => $new_form,
                                ));

                                foreach($apply_to as $apply_e__id){
                                    foreach($this->Mench_ledger->fetch(array(
                                        'x__following' => $apply_e__id,
                                        'x__follower' => $x['x__player'],
                                        'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                                    ), array(), 0) as $follow_appended) {
                                        $links_updated++;
                                        $this->Mench_ledger->update($follow_appended['x__id'], array(
                                            'x__message' => $new_form,
                                        ));
                                    }
                                }

                                echo 'Updated! ';
                            }

                        } else {

                            $removed++;
                            if(isset($_GET['update'])){

                                $this->Mench_ledger->update($x['x__id'], array(
                                    'x__privacy' => 6173,
                                ));

                                //Also update follower link?
                                foreach($apply_to as $apply_e__id){
                                    foreach($this->Mench_ledger->fetch(array(
                                        'x__following' => $apply_e__id,
                                        'x__follower' => $x['x__player'],
                                        'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                                    ), array(), 0) as $follow_appended) {
                                        $links_removed++;
                                        $this->Mench_ledger->update($follow_appended['x__id'], array(
                                            'x__privacy' => 6173,
                                        ));
                                    }
                                }
                                echo 'Removed! ';
                            }
                        }

                        echo 'Source ID '.$x['x__player'].' ['.$x['x__message'].'] transforms to ['.$new_form.']<hr />';
                    }
                }
            }


            echo 'SOURCES '.$updated.'/'.$responses.' Updated & '.$removed.' removed! (Links Removed: '.$links_removed.' & Links Updated: '.$links_updated.')<hr /><hr /><hr />';

        }


        $responses = 0;
        $updated = 0;
        $removed = 0;

        echo '<p>Applying against ['.$preg_query[0]['x__message'].'] results in:</p>';

        foreach($this->Mench_ledger->fetch(array(
            'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            'x__type IN (' . join(',', $this->config->item('n___6255')) . ')' => null, //DISCOVERIES
            'LENGTH(x__message)>0' => null,
            'x__previous' => $i['i__id'],
        ), array(), 0) as $x) {
            $responses++;
            $new_form = preg_replace($preg_query[0]['x__message'], "", $x['x__message'] );
            $links_updated = 0;
            $links_removed = 0;
            if(strlen($new_form) != strlen($x['x__message'])) {

                if(strlen($new_form)){

                    $updated++;
                    if(isset($_GET['update'])){

                        $this->Mench_ledger->update($x['x__id'], array(
                            'x__message' => $new_form,
                        ));

                        foreach($apply_to as $apply_e__id){
                            foreach($this->Mench_ledger->fetch(array(
                                'x__following' => $apply_e__id,
                                'x__follower' => $x['x__player'],
                                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                            ), array(), 0) as $follow_appended) {
                                $links_updated++;
                                $this->Mench_ledger->update($follow_appended['x__id'], array(
                                    'x__message' => $new_form,
                                ));
                            }
                        }
                        echo 'Updated! ';
                    }

                } else {

                    $removed++;
                    if(isset($_GET['update'])){

                        $this->Mench_ledger->update($x['x__id'], array(
                            'x__privacy' => 6173,
                        ));

                        //Also update follower link?
                        foreach($apply_to as $apply_e__id){
                            foreach($this->Mench_ledger->fetch(array(
                                'x__following' => $apply_e__id,
                                'x__follower' => $x['x__player'],
                                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                            ), array(), 0) as $follow_appended) {
                                $links_removed++;
                                $this->Mench_ledger->update($follow_appended['x__id'], array(
                                    'x__privacy' => 6173,
                                ));
                            }
                        }
                        echo 'Removed! ';
                    }
                }

                echo 'Source ID '.$x['x__player'].' ['.$x['x__message'].'] transforms to ['.$new_form.']<hr />';
            }
        }

        echo $updated.'/'.$responses.' Updated & '.$removed.' removed! (Links Removed: '.$links_removed.' & Links Updated: '.$links_updated.')<hr /><hr /><hr />';

    } else {

        echo 'Preg remove not set for this idea';

    }
}
