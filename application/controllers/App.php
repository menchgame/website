<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller
{

    public $player_e; // Declare the variable

    function __construct()
    {
        
        parent::__construct();

        $this->output->enable_profiler(FALSE);

        $this->player_e = superpower_unlocked();

        auto_login_player(false);
    }

    function index(){
        //Home:
        $this->load(14565);
    }

    function load($app_e__id = 14563 /* Error if none provided */, $focus_handle = 0, $focus_hashtag = 0, $target_hashtag = 0){


        $memory_detected = is_array($this->config->item('n___6287')) && count($this->config->item('n___6287'));
        if(!$memory_detected){
            //Since we don't have the memory created we must load the app that does so:
            $app_e__id = 4527;
        }


        //Any ideas passed?
        $e___6287 = $this->config->item('e___6287'); //APP
        $flash_message = false;
        $focus_e = null; //Sourcing
        $focus_i = null; //Ideation/Discovery
        $target_i = null; //Discovery


        if(isset($_GET['e__handle']) && $_GET['e__handle']=='SuccessfulWhale'){
            $_GET['e__handle'] = '';
            $focus_handle = '';
        } elseif($focus_handle && strlen($focus_handle) && !isset($_GET['e__handle'])){
            $_GET['e__handle'] = $focus_handle;
        }
        if($focus_hashtag && strlen($focus_hashtag) && !isset($_GET['i__hashtag'])){
            $_GET['i__hashtag'] = $focus_hashtag;
        }
        if(!isset($_GET['e__handle'])){
            $_GET['e__handle'] = 0;
        }
        if(!isset($_GET['i__hashtag'])){
            $_GET['i__hashtag'] = 0;
        }


        if($target_hashtag && strlen($target_hashtag)){
            //Verify:
            foreach($this->Idea_cache->fetch(array(
                'LOWER(i__hashtag)' => strtolower($target_hashtag),
            )) as $i_found){
                $target_i = $i_found;
            }
        }


        if(strlen($_GET['i__hashtag'])){

            //Validate Focus Idea:
            if($target_i && $_GET['i__hashtag']==view__memory(6404,4235)){

                //This is the starting point:
                $_GET['i__hashtag'] = $target_hashtag;
                $focus_i = $target_i;

            } else {

                foreach($this->Idea_cache->fetch(array(
                    'LOWER(i__hashtag)' => strtolower($_GET['i__hashtag']),
                )) as $i_found){
                    $focus_i = $i_found;
                }

            }

            if(!$focus_i){
                //See if we can find via ID?
                if(is_numeric($_GET['i__hashtag'])){
                    foreach($this->Idea_cache->fetch(array(
                        'i__id' => $_GET['i__hashtag'],
                    )) as $i_found){
                        $focus_i = $i_found;
                    }
                }
            }

            if($app_e__id==33286 && $focus_i && $focus_i['i__hashtag']!==$_GET['i__hashtag']){
                //Adjust URL Case Sensitive:
                return redirect_message(view__memory(42903,33286).$focus_i['i__hashtag']);
            }
        }

        
        if(isset($_GET['e__handle']) && strlen($_GET['e__handle'])){
            foreach($this->Source_cache->fetch(array(
                'LOWER(e__handle)' => strtolower($_GET['e__handle']),
            )) as $e_found){
                $focus_e = $e_found;
            }
            if(!$focus_e){
                //See if we need to lookup the ID:
                if(is_numeric($_GET['e__handle'])){
                    //Maybe its an ID?
                    foreach ($this->Source_cache->fetch(array(
                        'e__id' => $_GET['e__handle'],
                    )) as $e_found){
                        $focus_e = $e_found;
                    }
                }
            }
            if($app_e__id==42902 && $focus_e && $focus_e['e__handle']!==$_GET['e__handle']){
                //Adjust URL Case Sensitive:
                return redirect_message(view__memory(42903,42902).$focus_e['e__handle']);
            }
        }







        if($memory_detected && !in_array($app_e__id, $this->config->item('n___6287'))){
            //Invalid App:
            return redirect_message(view__memory(42903,42902).$e___6287[$app_e__id]['m__handle'], '<div class="alert alert-danger" role="alert">@'.$e___6287[$app_e__id]['m__handle'].' Is not an APP, yet 🤔</div>');
        } elseif($memory_detected && !in_array($app_e__id, $this->config->item('n___42922'))){
            //Validate Required App input:
            if(in_array($app_e__id, $this->config->item('n___42905')) && !$focus_e){
                return redirect_message( home_url(), '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Error: @'.$_GET['e__handle'].' is not a valid source handle.</div>');
            } elseif(in_array($app_e__id, $this->config->item('n___42923')) && (!$focus_i || !$target_i)){
                return redirect_message( home_url(), '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Error: Both #'.$_GET['i__hashtag'].' & #'.$target_hashtag.' must be valid hashtags.</div>');
            } elseif(in_array($app_e__id, $this->config->item('n___42911')) && !$focus_i){
                return redirect_message( home_url(), '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Error: #'.$_GET['i__hashtag'].' is not a valid idea hashtag.</div>');
            }
        }



        $x__follower = ( $focus_e ? $focus_e['e__id'] : 0 );
        $x__next = ( $focus_i ? $focus_i['i__id'] : 0 );
        $x__previous = ($target_i ? $target_i['i__id'] : 0 );

        //Run App
        $player_e = false;
        $player_http_request = ( isset($_SERVER['SERVER_NAME']) ? 1 : 0 );

        if($memory_detected && in_array($app_e__id, $this->config->item('n___42920'))){
            boost_power();
        }

        if($memory_detected && $player_http_request){

            //Needs superpowers?
            $player_e = superpower_unlocked();

            //Auto Login?
            if(isset($_GET['e__hash']) && isset($_GET['e__time']) && $focus_e){

                //Validate Hash:
                if($_GET['e__hash'] == view__hash($_GET['e__time'].$focus_e['e__handle'])){

                    if($focus_i){
                        if(i_startable($focus_i)){
                            $flash_message = '<div class="alert alert-success" role="alert"><span class="icon-block"><i class="far fa-play"></i></span>You have started discovering this idea. Scroll to the bottom & go next to continue.</div>';
                        } else {
                            $this->Mench_ledger->mark_complete(i__discovery_link($focus_i), $focus_e['e__id'], ( $target_i ? $target_i['i__id'] : 0 ), $focus_i);
                            $this->Mench_ledger->mark_complete(29393, $focus_e['e__id'], ( $target_i ? $target_i['i__id'] : 0 ), $focus_i);

                            //Inform user of changes:
                            $flash_message = '<div class="alert alert-success" role="alert"><span class="icon-block"><i class="far fa-check-circle"></i></span>Idea has been discovered</div>';
                        }
                    }

                    //If not logged in, log them in:
                    if(!$player_e){
                        $session_data = $this->Source_cache->activate_session($player_e, true);
                    }

                }
            }
        }


        //Cache App?
        $x__metadata = array(
            'current_link' => 'https://' .get_server('SERVER_NAME') . get_server('REQUEST_URI'),
            '$_GET' => $_GET,
            '$_POST' => $_POST,
            '$_REQUEST' => $_REQUEST,
            'php_input' => json_decode(file_get_contents('php://input')),
        );
        $ui = null;
        $new_cache = false;
        $cache_x__time = null;
        $x__player = ( $player_http_request ? ( $player_e ? $player_e['e__id'] : 14068 /* GUEST */ ) : 7274 /* CRON JOB */ );
        $skip_i_privacy_check = in_array($app_e__id, $this->config->item('n___43388'));
        $access_level_e = access_level_e(null, $focus_e['e__id'], $focus_e);
        $access_level_i = access_level_i(null, $focus_i['i__id'], $focus_i);
        $target_access_level_i = access_level_i(null, $target_i['i__id'], $target_i);

        //MEMBER REDIRECT?
        if($player_http_request){

            //Missing App, Source or Idea Access?
            $missing_access = false; //Assume they have access
            $superpowers_required = array_intersect($this->config->item('n___10957'), $e___6287[$app_e__id]['m__following']);
            if($player_e && in_array($app_e__id, $this->config->item('n___14639'))){
                //Should redirect them:
                return redirect_message(view__memory(42903,42902).$player_e['e__handle']);
            } elseif(!$player_e && in_array($app_e__id, $this->config->item('n___14740'))){
                //Should redirect them:
                $missing_access = 'Login or register a free account to continue.';
            } elseif(count($superpowers_required) && !superpower_unlocked(end($superpowers_required))){
                $e___10957 = $this->config->item('e___10957');
                $missing_access = 'Error: You Cannot Access '.$e___6287[$app_e__id]['m__title'].' as it requires the superpower of '.$e___10957[end($superpowers_required)]['m__title'].'.';
            } elseif($focus_e && !$access_level_e){
                $missing_access = 'Error: You Cannot Access @'.$focus_e['e__handle'].' due to Privacy Settings.';
            } elseif(!$skip_i_privacy_check && $focus_i && !$access_level_i){
                $missing_access = 'Error: You Cannot Access Focus #'.$focus_i['i__hashtag'].' due to Privacy Settings.';
            } elseif(!$skip_i_privacy_check && $target_i && !$target_access_level_i){
                $missing_access = 'Error: You Cannot Access Target #'.$target_i['i__hashtag'].' due to Privacy Settings.';
            }


            if($missing_access){
                //Redirect:
                return redirect_message((!$player_e ? view__app_link(4269).'?url='.urlencode($_SERVER['REQUEST_URI']) : home_url() ), '<div class="alert alert-warning" role="alert">'.$missing_access.'</div>');
            }
        }




        if($memory_detected){

            if(in_array($app_e__id, $this->config->item('n___14599')) && !in_array($app_e__id, $this->config->item('n___12741'))){

                if(!isset($_GET['reset_cache'])){
                    //Fetch Most Recent Cache:
                    foreach($this->Mench_ledger->fetch(array(
                        'x__website' => website_setting(0),
                        'x__type' => 14599, //Cache App
                        'x__following' => $app_e__id,
                        'x__follower' => $x__follower,
                        'x__previous' => $x__previous,
                        'x__next' => $x__next,
                        'x__time >' => date("Y-m-d H:i:s", (time() - view__memory(6404,14599))),
                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                    ), array(), 1, 0, array('x__time' => 'DESC')) as $latest_cache){
                        $ui = $latest_cache['x__message'];
                        $cache_x__time = '<div class="texttransparent center main__title">Updated ' . view__time_difference($latest_cache['x__time']) . ' Ago</div>';
                    }
                }

                if(!$ui){
                    //No recent cache found, create a new one:
                    $new_cache = true;
                }
            }
        }


        $title = null;
        if($focus_i){
            $title .= view__i_title($focus_i, true).' | ';
        }
        if($target_i){
            $title .= view__i_title($target_i, true).' | ';
        }
        if($focus_e){
            $title .= $focus_e['e__title'].' @'.$focus_e['e__handle'].' | ';
        }
        if(!$title){
            //Append app name since no title:
            $title .= $e___6287[$app_e__id]['m__title'].' | ';
        }
        //Always Append Website at the end:
        $title .= get_domain('m__title');



        $view_input = array(
            'app_e__id' => $app_e__id,
            'x__player' => $x__player,
            'player_e' => $player_e,
            'player_http_request' => $player_http_request,
            'memory_detected' => $memory_detected,

            'focus_e' => $focus_e,
            'focus_i' => $focus_i,
            'target_i' => $target_i,

            '$access_level_e' => $access_level_e,
            '$access_level_i' => $access_level_i,
            '$target_access_level_i' => $target_access_level_i,

            'title' => $title,
            'flash_message' => $flash_message,
        );

        if(!$ui){
            //Prep view:
            $raw_app = $this->load->view('app/'.strtolower($e___6287[$app_e__id]['m__handle']), $view_input, true);
            $ui .= $raw_app;
        }


        if($new_cache){
            $cache_x = $this->Mench_ledger->create(array(
                'x__player' => $x__player,
                'x__type' => 14599, //Cache App
                'x__following' => $app_e__id,
                'x__message' => $ui,

                'x__follower' => $x__follower,
                'x__previous' => $x__previous,
                'x__next' => $x__next,
            ));
        }




        //App title?
        if(in_array($app_e__id, $this->config->item('n___42928'))){
            $ui = '<h1>'.$e___6287[$app_e__id]['m__title'].'</h1>'.$ui;
        }


        //Check to ensure they have started:
        if($app_e__id==30795 && $target_i && $focus_i && $player_e && $target_i['i__hashtag']==$focus_i['i__hashtag']){

            //Starting point, make sure all good:
            if(!i_startable($target_i)){

                //Not a valid starting point:
                return redirect_message(home_url(), '<div class="alert alert-warning" role="alert">#'.$target_i['i__hashtag'].' is not an active starting point.</div>');

            } elseif(!$this->Mench_ledger->i_has_started($player_e['e__id'], $target_i['i__hashtag'])){

                //Not yet started, add to their starting point:
                $this->Mench_ledger->create(array(
                    'x__player' => $player_e['e__id'],
                    'x__type' => 4235, //Get started
                    'x__next' => $target_i['i__id'],
                    'x__previous' => $target_i['i__id'],
                ));

                //Mark as complete:
                $this->Mench_ledger->mark_complete(i__discovery_link($target_i), $player_e['e__id'], $target_i['i__id'], $target_i);

                //Now return next idea:
                $next__url = $this->Mench_ledger->find_next($player_e['e__id'], $target_i['i__hashtag'], $target_i);
                if($next__url){
                    //Go Next:
                    return redirect_message(view__memory(42903,30795).$target_i['i__hashtag'].'/'.$next__url );
                }

            }

        }




        //Delivery App
        if(!$memory_detected){

            echo $ui;

        } else {

            if(in_array($app_e__id, $this->config->item('n___12741'))){

                //Raw UI:
                echo $raw_app;

            } else {

                //Regular UI:
                //Load App:
                echo $this->load->view('shared/header', $view_input, true);
                echo $ui;
                echo $cache_x__time;
                echo $this->load->view('shared/footer', array(), true);

            }
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*
     * 
     * AJAX FUNCTION CALLS:
     * 
     * */





    function load_popover(){
        if(isset($_POST['handle_string']) && strlen($_POST['handle_string'])>1 && in_array(substr($_POST['handle_string'], 0, 1), array('#','@')) ){
            if(substr($_POST['handle_string'], 0, 1)=='#'){
                foreach($this->Idea_cache->fetch(array(
                    'LOWER(i__hashtag)' => strtolower(substr($_POST['handle_string'], 1)),
                )) as $i){
                    echo view__card_i(6255, $i);
                    return true;
                }
            } elseif(substr($_POST['handle_string'], 0, 1)=='@'){
                foreach($this->Source_cache->fetch(array(
                    'LOWER(e__handle)' => strtolower(substr($_POST['handle_string'], 1)),
                )) as $e){
                    echo view__card_e(12274, $e);
                    return true;
                }
            }

            //Did not find, had error:
            echo '<div class="alert alert-danger" role="alert">Could not find '.$_POST['handle_string'].'</div>';
            return false;
        }

        //Did not find, had error:
        echo '<div class="alert alert-danger" role="alert">Missing handle_string variable</div>';
        return false;

    }

    function i_editor_load()
    {

        $player_e = superpower_unlocked(null, 0, $this->player_e);
        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));
        } elseif (!isset($_POST['i__id']) || !isset($_POST['x__id']) || !isset($_POST['current_i__type'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing Core IDs',
            ));
        }


        $i__id = 0; //New idea
        $i__type = intval($_POST['current_i__type']);
        $created_i__id = 0;

        if($_POST['i__id'] > 0){

            $is = $this->Idea_cache->fetch(array(
                'i__id' => $_POST['i__id'],
            ));
            if (!count($is)) {
                return view__json(array(
                    'status' => 0,
                    'message' => 'Idea is no longer active',
                ));
            } elseif (!access_level_i($is[0]['i__hashtag'], 0, $is[0])) {
                return view__json(array(
                    'status' => 0,
                    'message' => 'You are missing permission to edit this idea',
                ));
            }


            $i__id = intval($is[0]['i__id']);
            if(!$i__type){
                $i__type = intval($is[0]['i__type']);
            }

        } else {

            //Create a new idea:
            $i_new = $this->Idea_cache->create(array(
                'i__message' => null,
                'i__type' => $_POST['current_i__type'],
                'i__privacy' => 42636, //Pre-drafting idea
            ), $player_e['e__id']);

            $i__id = $i_new['i__id'];
            $created_i__id = $i__id;

        }


        //Fetch dynamic data based on idea type:
        $return_inputs = array();
        $e___4737 = $this->config->item('e___4737'); // Idea Status
        $e___42179 = $this->config->item('e___42179'); //Dynamic Input Fields
        $e___11035 = $this->config->item('e___11035'); //Encyclopedia

        foreach(array_intersect($this->config->item('n___'.$i__type), $this->config->item('n___42179')) as $dynamic_e__id){

            $superpowers_required = array_intersect($this->config->item('n___10957'), $e___42179[$dynamic_e__id]['m__following']);
            if(count($superpowers_required) && !superpower_unlocked(end($superpowers_required), 0, $this->player_e)){
                continue;
            }

            //Let's first determine the data type:
            $data_types = array_intersect($e___42179[$dynamic_e__id]['m__following'], $this->config->item('n___4592'));

            if(count($data_types)!=1) {
                //This is strange, we are expecting 1 match only report this:
                $this->Mench_ledger->create(array(
                    'x__type' => 4246, //Platform Bug Reports
                    'x__player' => $player_e['e__id'],
                    'x__following' => 42179, //Dynamic Input Fields
                    'x__follower' => $dynamic_e__id,
                    'x__next' => $i__id,
                    'x__reference' => $_POST['x__id'],
                    'x__message' => 'Found ' . count($data_types) . ' Data Types (Expecting exactly 1) for @' . $dynamic_e__id . ': Check @4592 to see what is wrong',
                ));
                continue; //Go to the next dynamic data type
            }

            //We found 1 match as expected:
            foreach($data_types as $data_type_this){
                $data_type = $data_type_this;
                break;
            }

            if(in_array($data_type, $this->config->item('n___42188'))){

                //Single or Multiple Choice:
                array_push($return_inputs, array(
                    'd__id' => $dynamic_e__id,
                    'd__is_radio' => 1,
                    'd_x__id' => 0,
                    'd__html' => view__instant_select($dynamic_e__id, 0, $i__id),
                    'd__value' => ( $i__id>0 ? $i__id : '' ),
                    'd__type_name' => '',
                    'd__placeholder' => '',
                    'd__profile_header' => '',
                ));

            } else {

                $this_data_type = $this->config->item('e___'.$data_type);
                $e___4592 = $this->config->item('e___4592'); //Data types
                $e___6177 = $this->config->item('e___6177'); //Source Privacy
                $e___42179 = $this->config->item('e___42179'); //Dynamic Input Field
                $e___11035 = $this->config->item('e___11035'); //Encyclopedia

                //Fetch the current value:
                $counted = 0;
                $unique_values = array();
                if($i__id > 0){ //Must have an original ID to possibly have a value...
                    foreach($this->Mench_ledger->fetch(array(
                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        'x__type IN (' . join(',', $this->config->item('n___42252')) . ')' => null, //Plain Link
                        'x__next' => $i__id,
                        'x__following' => $dynamic_e__id,
                    ), array('x__following')) as $selected_e){
                        if(strlen($selected_e['x__message']) && !in_array($selected_e['x__message'], $unique_values)){
                            $counted++;
                            array_push($unique_values, $selected_e['x__message']);
                            array_push($return_inputs, array(
                                'd__id' => $dynamic_e__id,
                                'd__is_radio' => 0,
                                'd_x__id' => $selected_e['x__id'],
                                'd__html' => view__dynamic_headline($dynamic_e__id, $e___42179[$dynamic_e__id], $selected_e),
                                'd__value' => $selected_e['x__message'],
                                'd__type_name' => html_input_type($data_type),
                                'd__placeholder' => ( strlen($this_data_type[$dynamic_e__id]['m__message']) ? $this_data_type[$dynamic_e__id]['m__message'] : $e___4592[$data_type]['m__title'].'...' ),
                                'd__profile_header' => '',
                            ));
                        }
                    }
                }


                if(!$counted){
                    foreach($this->Source_cache->fetch(array(
                        'e__id' => $dynamic_e__id,
                    )) as $selected_e){
                        array_push($return_inputs, array(
                            'd__id' => $dynamic_e__id,
                            'd__is_radio' => 0,
                            'd_x__id' => 0,
                            'd__html' => view__dynamic_headline($dynamic_e__id, $e___42179[$dynamic_e__id], $selected_e),
                            'd__value' => '',
                            'd__type_name' => html_input_type($data_type),
                            'd__placeholder' => ( strlen($this_data_type[$dynamic_e__id]['m__message']) ? $this_data_type[$dynamic_e__id]['m__message'] : $e___4592[$data_type]['m__title'].'...' ),
                            'd__profile_header' => '',
                        ));
                    }
                }
            }
        }

        $return_array = array(
            'status' => 1,
            'return_inputs' => $return_inputs,
            'created_i__id' => $created_i__id,
        );

        //Log Modal View:
        $this->Mench_ledger->create(array(
            'x__player' => $player_e['e__id'],
            'x__type' => 14576, //MODAL VIEWED
            'x__following' => 31911, //Edit Idea
            'x__next' => $i__id,
            'x__reference' => $_POST['x__id'],
            'x__metadata' => $return_array,
        ));

        //Return everything we found:
        return view__json($return_array);

    }

    function i_editor_save(){


        $player_e = superpower_unlocked(null, 0, $this->player_e);
        if (!$player_e) {

            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));

        } elseif(!isset($_POST['save_i__message'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Idea',
            ));

        } elseif(!isset($_POST['focus__node']) || !isset($_POST['focus__id'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing focus Card/ID',
            ));

        } elseif(!isset($_POST['save_i__hashtag'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing hashtag',
            ));

        } elseif(!isset($_POST['save_i__id']) || !intval($_POST['save_i__id'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Idea ID',
            ));

        } elseif(!isset($_POST['next_i__id']) || !isset($_POST['previous_i__id']) || !isset($_POST['save_x__type'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Next/Previous ID',
            ));

        } elseif(!isset($_POST['save_x__id']) || !isset($_POST['save_x__message'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Transaction Data',
            ));

        } elseif (!isset($_POST['save_i__type']) || !in_array($_POST['save_i__type'], $this->config->item('n___4737'))) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid idea Type',
            ));
        } elseif (!isset($_POST['save_i__privacy']) || !in_array($_POST['save_i__privacy'], $this->config->item('n___31004'))) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid idea Privacy',
            ));
        } elseif(strlen($_POST['save_i__message'])>view__memory(6404,4736)){
            return view__json(array(
                'status' => 0,
                'message' => 'Idea message must be less than '.view__memory(6404,4736).' characters.',
            ));
        }



        $is = $this->Idea_cache->fetch(array(
            'i__id' => $_POST['save_i__id'],
        ));
        if(!count($is)){
            return view__json(array(
                'status' => 0,
                'message' => 'Idea Not Valid',
            ));
        }


        $focus__node = ( $_POST['focus__node']==12273 && $_POST['focus__id']==$_POST['save_i__id'] );
        if(!isset($_POST['uploaded_media']) || !is_array($_POST['uploaded_media'])){
            $_POST['uploaded_media'] = array();
        }

        //Might be new if pre-drafting:
        if( $is[0]['i__privacy']==42636 ){

            //See if references only:
            if(strlen($_POST['save_i__message']) && !count($_POST['uploaded_media']) && !substr_count($_POST['save_i__message'], "\n") && intval($_POST['save_x__type']) && (intval($_POST['next_i__id']) || intval($_POST['previous_i__id']))){

                $all_hashtags = true;
                $i_references = array();
                foreach(explode(' ', trim($_POST['save_i__message'])) as $word){
                    $found_hashtag = false;
                    if(substr($word, 0, 1)=='#'){
                        $valid_hashtag = false;
                        foreach($this->Idea_cache->fetch(array(
                            'LOWER(i__hashtag)' => strtolower(substr($word, 1)),
                            'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
                        )) as $i_found){
                            $found_hashtag = true;
                            $valid_hashtag = true;
                            array_push($i_references, $i_found);
                        }
                        if(!$valid_hashtag && superpower_unlocked(10939, 0, $this->player_e)){
                            return view__json(array(
                                'status' => 0,
                                'message' => 'ERROR: '.$word.' is not a valid/active Idea',
                            ));
                        }
                    }
                    if(!$found_hashtag){
                        $all_hashtags = false;
                        break; //It must be a hashtag only reference
                    }
                }

                if($all_hashtags && count($i_references) && $_POST['save_x__type']>0){

                    //Return success:
                    foreach($this->Idea_cache->fetch(array(
                        'i__id' => ( intval($_POST['next_i__id'])>0 ? intval($_POST['next_i__id']) : intval($_POST['previous_i__id']) ),
                    )) as $focus_i){

                        //Append all of these hashtags:
                        foreach($i_references as $reference_i){
                            if(intval($_POST['next_i__id'])>0){
                                $status = $this->Idea_cache->i_link($focus_i, $_POST['save_x__type'], $reference_i, $player_e['e__id']);
                            } elseif(intval($_POST['previous_i__id'])>0){
                                $status = $this->Idea_cache->i_link($reference_i, $_POST['save_x__type'], $focus_i, $player_e['e__id']);
                            }
                            if(!$status['status']){
                                return view__json($status);
                            }
                        }

                        //What to focus on depends on how many total ideas added:
                        $return_i = ( count($i_references)>=2 ? $focus_i : $reference_i );

                        return view__json(array(
                            'status' => 1,
                            'return_i__cache' => '',
                            'return_i__cache_links' => '',
                            'return_i__cache_full' => view__card_i($_POST['focus_x__group'], $return_i),
                            'redirect_idea' => view__memory(42903,33286).$return_i['i__hashtag'],
                            'message' => count($i_references).' ideas linked',
                        ));
                    }
                }
            }



            //Update new idea fields:
            $this->Idea_cache->update($is[0]['i__id'], array(
                'i__type' => $_POST['save_i__type'],
                'i__privacy' => $_POST['save_i__privacy'],
            ), true, $player_e['e__id']);
            $is[0]['i__type'] = trim($_POST['save_i__type']);
            $is[0]['i__privacy'] = trim($_POST['save_i__privacy']);
        }



        //Process Media:
        $media_stats = process_media($is[0]['i__id'], $_POST['uploaded_media']);


        //Validate Idea Message:
        if(!$media_stats['total_media'] && !strlen(trim($_POST['save_i__message']))){
            //Since we do not have media, we must have a message:
            return view__json(array(
                'status' => 0,
                'message' => 'Write or Upload something to save.',
            ));
        }



        //Process dynamic inputs if any:
        $e___42179 = $this->config->item('e___42179'); //Dynamic Input Fields
        if($_POST['save_i__id'] > 0){
            for ($p = 1; $p <= view__memory(6404,42206); $p++) {

                if(!isset($_POST['save_dynamic_' . $p])){
                    break; //Nothing more to process
                }

                $input_parts = explode('____', $_POST['save_dynamic_' . $p], 3);
                if(!isset($input_parts[0]) || !isset($input_parts[1])){
                    continue;
                }
                $d_x__id = $input_parts[0];
                $dynamic_e__id = $input_parts[1];
                $dynamic_value = trim($input_parts[2]);

                //Required fields must have an input:
                if(in_array($dynamic_e__id, $this->config->item('n___28239')) && !strlen($dynamic_value) && !in_array($dynamic_e__id, $this->config->item('n___33331')) && !in_array($dynamic_e__id, $this->config->item('n___33332'))){
                    return view__json(array(
                        'status' => 0,
                        'message' => 'Missing Required Field: '.$e___42179[$dynamic_e__id]['m__title'],
                    ));
                }

                //Validate input based on its data type, if provided:
                if (strlen($dynamic_value)) {
                    foreach(array_intersect($e___42179[$dynamic_e__id]['m__following'], $this->config->item('n___4592')) as $data_type_this){
                        $data_type_validate = data_type_validate($data_type_this, $dynamic_value, $e___42179[$dynamic_e__id]['m__title']);
                        if (!$data_type_validate['status']) {
                            //We had an error:
                            return view__json($data_type_validate);
                        }
                    }
                }


                //Fetch the current value:
                if($d_x__id > 0){
                    $values = $this->Mench_ledger->fetch(array(
                        'x__id' => $d_x__id,
                    ));
                }

                if(!$d_x__id || !count($values)){
                    $values = $this->Mench_ledger->fetch(array(
                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        'x__type IN (' . join(',', $this->config->item('n___42252')) . ')' => null, //Plain Link
                        'x__next' => $is[0]['i__id'],
                        'x__following' => $dynamic_e__id,
                    ));
                }


                //Update if needed:
                if(!strlen($dynamic_value)){

                    //Remove Link if we have one:
                    if(count($values) && $dynamic_e__id!=11035 /* HACK: Summary are key links that should not be removed */){
                        $this->Mench_ledger->update($values[0]['x__id'], array(
                            'x__privacy' => 6173, //Transaction Removed
                        ), $player_e['e__id'], 42175 /* Dynamic Link Content Removed */);
                    }

                } elseif(!count($values)){

                    //Create New Link:
                    $this->Mench_ledger->create(array(
                        'x__player' => $player_e['e__id'],
                        'x__type' => 4983, //Co-Author
                        'x__following' => $dynamic_e__id,
                        'x__next' => $is[0]['i__id'],
                        'x__message' => $dynamic_value,
                        'x__weight' => number_x__weight($dynamic_value),
                    ));

                } elseif($values[0]['x__message']!=$dynamic_value){

                    //Update Link:
                    $this->Mench_ledger->update($values[0]['x__id'], array(
                        'x__message' => $dynamic_value,
                    ), $player_e['e__id'], 42176 /* Dynamic Link Content Updated */);

                }
            }
        }



        if(strlen($_POST['save_i__hashtag']) && $is[0]['i__hashtag']!==trim($_POST['save_i__hashtag'])){

            $validate_update_handle = validate_update_handle($_POST['save_i__hashtag'], $is[0]['i__id'], null);
            if(!$validate_update_handle['status']){
                return view__json(array(
                    'status' => 0,
                    'message' => $validate_update_handle['message'],
                ));
            }

            //Save hashtag since changed:
            $this->Idea_cache->update($is[0]['i__id'], array(
                'i__hashtag' => trim($_POST['save_i__hashtag']),
            ), true, $player_e['e__id']);

            //Now Handles everywhere they are referenced:
            foreach ($this->Mench_ledger->fetch(array(
                'x__previous' => $is[0]['i__id'],
                'x__type IN (' . join(',', $this->config->item('n___42341')) . ')' => null, //Idea References
                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            ), array('x__next')) as $ref) {
                view__sync_links(str_replace('#'.$is[0]['i__hashtag'], '#'.trim($_POST['save_i__hashtag']), $ref['i__message']), true, $ref['i__id']);
            }

            //Assign new value:
            $is[0]['i__hashtag'] = trim($_POST['save_i__hashtag']);

        }


        //Also have to add as a comment to another idea?
        if(intval($_POST['next_i__id'])>0 && $_POST['save_x__type']>0){
            $this->Mench_ledger->create(array(
                'x__player' => $player_e['e__id'],
                'x__previous' => $_POST['next_i__id'],
                'x__next' => $is[0]['i__id'],
                'x__type' => $_POST['save_x__type'],
            ));
        } elseif(intval($_POST['previous_i__id'])>0 && $_POST['save_x__type']>0){
            $this->Mench_ledger->create(array(
                'x__player' => $player_e['e__id'],
                'x__previous' => $is[0]['i__id'],
                'x__next' => $_POST['previous_i__id'],
                'x__type' => $_POST['save_x__type'],
            ));
        }


        //Do we have a link reference message that need to be saved?
        if($_POST['save_x__id']>0 && $_POST['save_x__message']!='IGNORE_INPUT'){
            //Fetch transaction:
            foreach($this->Mench_ledger->fetch(array(
                'x__id' => $_POST['save_x__id'],
            )) as $this_x){

                $is[0] = array_merge($is[0], $this_x);

                if($this_x['x__message'] != trim($_POST['save_x__message'])){
                    $this->Mench_ledger->update($this_x['x__id'], array(
                        'x__message' => trim($_POST['save_x__message']),
                    ), $player_e['e__id'], 42171);
                }
            }
        }


        //Update Links based on save_i__message / Sync Idea Synonym & Source References links:
        $view_sync_links = view__sync_links($_POST['save_i__message'], true, $is[0]['i__id']);
        $is[0]['i__message'] = trim($_POST['save_i__message']);
        $is[0]['i__cache'] = $view_sync_links['i__cache'];


        //Update Search Index:
        flag_for_search_indexing(12273, $is[0]['i__id']);


        return view__json(array(
            'status' => 1,
            'return_i__cache' => $view_sync_links['i__cache'],
            'return_i__cache_links' => view__i__links($is[0], $player_e['e__id'], $focus__node, $focus__node),
            'return_i__cache_full' => view__card_i($_POST['focus_x__group'], $is[0]),
            'redirect_idea' => ( isset($is[0]['i__hashtag']) ? view__memory(42903,33286).$is[0]['i__hashtag'] : null ),
            'message' => $media_stats['total_current'].' current & '.$media_stats['total_submitted'].' submitted media: '.$media_stats['total_submitted'].' Created, '.$media_stats['adjust_updated'].' Updated & '.$media_stats['adjust_removed'].' Removed while detected '.$media_stats['adjust_duplicated'].' duplicate uploads. '.$view_sync_links['sync_stats']['old_links_removed'].' old links removed, '.$view_sync_links['sync_stats']['old_links_kept'].' old links kept, '.$view_sync_links['sync_stats']['new_links_added'].' new links added.',
        ));

    }

    function i_copy(){

        //Auth member and check required variables:
        $player_e = superpower_unlocked(10939, 0, $this->player_e);

        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'messagCloe' => view__unauthorized_message(10939),
            ));
        } elseif (!isset($_POST['i__id']) || intval($_POST['i__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Following Source',
            ));
        } elseif (!isset($_POST['do_recursive'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing template parameter',
            ));
        }

        return view__json($this->Idea_cache->recursive_clone(intval($_POST['i__id']), intval($_POST['do_recursive']), $player_e['e__id']));

    }

    function i_load_cover(){

        if (!isset($_POST['i__id']) || !isset($_POST['x__type']) || !isset($_POST['first_segment']) || !isset($_POST['counter'])) {
            echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Missing core variables</div>';
        } else {

            if(in_array($_POST['x__type'], $this->config->item('n___42376')) && !access_level_i(null, $_POST['i__id'])){

                echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-lock"></i></span>Private</div>';

            } else {

                $target_disccovery = target_disccovery();

                $ui = '';
                $listed_items = 0;
                if(in_array($_POST['x__type'], $this->config->item('n___42261')) || in_array($_POST['x__type'], $this->config->item('n___42284'))){

                    //SOURCES
                    $e___6177 = $this->config->item('e___6177'); //Source Types
                    $e___4593 = $this->config->item('e___4593'); //Transaction Types
                    $current_e__handle = view__valid_handle_e($_POST['first_segment']);
                    foreach(view__i_covers($_POST['x__type'], $_POST['i__id'], 1, false) as $e_e) {
                        if(isset($e_e['e__id'])){
                            $ui .= view__card(view__memory(42903,42902).$e_e['e__handle'], $current_e__handle && $e_e['e__handle']==$current_e__handle, $e_e['x__type'], $e_e['e__privacy'], view__cover($e_e['e__cover'], true), $e_e['e__title'], $e_e['x__message']);
                            $listed_items++;
                        }
                    }

                } elseif(in_array($_POST['x__type'], $this->config->item('n___11020'))){

                    //IDEAS
                    $e___4737 = $this->config->item('e___4737'); //Idea Types
                    $e___4593 = $this->config->item('e___4593'); //Transaction Types
                    $current_i__hashtag = ( substr($_POST['first_segment'], 0, 1)=='~' ? substr($_POST['first_segment'], 1) : false );

                    foreach(view__i_covers($_POST['x__type'], $_POST['i__id'], 1, false) as $next_i) {
                        if(isset($next_i['i__id'])){
                            $ui .= view__card($target_disccovery.view__memory(42903,33286).$next_i['i__hashtag'], $next_i['i__hashtag']==$current_i__hashtag, $next_i['x__type'], null, ( in_array($next_i['i__type'], $this->config->item('n___32172')) ? $e___4737[$next_i['i__type']]['m__cover'] : '' ), view__i_title($next_i, true), $next_i['x__message']);
                            $listed_items++;
                        }
                    }

                }

                if($listed_items < $_POST['counter']){
                    //We have more to show:
                    foreach($this->Idea_cache->fetch(array(
                        'i__id' => $_POST['i__id'],
                    )) as $i){
                        $ui .= view__more($target_disccovery.view__memory(42903,33286).$i['i__hashtag'], false, '&nbsp;', '&nbsp;', '&nbsp;', 'View all '.number_format($_POST['counter'], 0));
                    }
                }

                echo $ui;

            }
        }
    }

    function i_sort_load()
    {

        /*
         *
         * Saves the order of read ideas based on
         * member preferences.
         *
         * */

        $player_e = superpower_unlocked(null, 0, $this->player_e);

        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));
        } elseif (!isset($_POST['new_x_order']) || !is_array($_POST['new_x_order']) || count($_POST['new_x_order']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing sorting ideas',
            ));
        } elseif (!isset($_POST['x__type']) || !in_array($_POST['x__type'], $this->config->item('n___4603'))) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Transaction Type',
            ));
        }

        //Update the order of their discoveries:
        $updated = 0;
        foreach($_POST['new_x_order'] as $x__weight => $x__id){
            if(intval($x__id) > 0 && intval($x__weight) > 0){
                //Update order of this transaction:
                if($this->Mench_ledger->update(intval($x__id), array(
                    'x__weight' => $x__weight,
                ), $player_e['e__id'], 4603)){
                    $updated++;
                }
            }
        }

        //All good:
        return view__json(array(
            'status' => 1,
            'message' => $updated.' Sorted',
        ));
    }

    function view__i_body(){
        //Authenticate Member:
        if (!isset($_POST['i__id']) || intval($_POST['i__id']) < 1 || !isset($_POST['counter']) || !isset($_POST['x__type']) || intval($_POST['x__type']) < 1) {
            echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Missing core variables</div>';
        } else {
            echo view__i_body($_POST['x__type'], $_POST['counter'], $_POST['i__id']);
        }
    }



    function view__e_body(){
        //Authenticate Member:
        if (!isset($_POST['e__id']) || intval($_POST['e__id']) < 1 || !isset($_POST['x__type']) || intval($_POST['x__type']) < 1) {
            echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Missing core variables</div>';
        } else {
            echo view__e_body($_POST['x__type'], $_POST['counter'], $_POST['e__id'], $_POST['js_request_uri']);
        }
    }

    function e_load_cover(){

        if (!isset($_POST['e__id']) || !isset($_POST['x__type']) || !isset($_POST['first_segment']) || !isset($_POST['counter'])) {

            echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Missing core variables</div>';

        } else {

            if(in_array($_POST['x__type'], $this->config->item('n___42376')) && !access_level_e(null, $_POST['e__id'])){

                echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-lock"></i></span>Private</div>';

            } else {

                $ui = '';
                $listed_items = 0;

                if(in_array($_POST['x__type'], $this->config->item('n___11028'))){

                    //SOURCES
                    $current_e__handle = view__valid_handle_e($_POST['first_segment']);
                    $e___6177 = $this->config->item('e___6177'); //Source Privacy
                    $e___4593 = $this->config->item('e___4593'); //Transaction Types

                    foreach(view__e_covers($_POST['x__type'], $_POST['e__id'], 1, false) as $e_e) {
                        if(isset($e_e['e__id'])){
                            $ui .= view__card(view__memory(42903,42902).$e_e['e__handle'], $e_e['e__handle']==$current_e__handle, $e_e['x__type'], $e_e['e__privacy'], view__cover($e_e['e__cover'], true), $e_e['e__title'], $e_e['x__message']);
                            $listed_items++;
                        }
                    }

                } elseif(in_array($_POST['x__type'], $this->config->item('n___42261')) || in_array($_POST['x__type'], $this->config->item('n___42284'))){

                    //IDEAS
                    $current_i__hashtag = ( substr($_POST['first_segment'], 0, 1)=='~' ? substr($_POST['first_segment'], 1) : false );
                    $e___4737 = $this->config->item('e___4737'); //Idea Types
                    $e___4593 = $this->config->item('e___4593'); //Transaction Types
                    $target_disccovery = target_disccovery();

                    foreach(view__e_covers($_POST['x__type'], $_POST['e__id'], 1, false) as $next_i) {
                        if(isset($next_i['i__id'])){
                            $ui .= view__card($target_disccovery.view__memory(42903,33286).$next_i['i__hashtag'], $next_i['i__hashtag']==$current_i__hashtag, $next_i['x__type'], null, ( in_array($next_i['i__type'], $this->config->item('n___32172')) ? $e___4737[$next_i['i__type']]['m__cover'] : '' ), view__i_title($next_i, true), $next_i['x__message']);
                            $listed_items++;
                        }
                    }

                }

                if($listed_items < $_POST['counter']){
                    //We have more to show:
                    foreach($this->Source_cache->fetch(array(
                        'e__id' => $_POST['e__id'],
                    )) as $e_this){
                        $ui .= view__more(view__memory(42903,42902).$e_this['e__handle'], false, '&nbsp;', '&nbsp;', '&nbsp;', 'View all '.number_format($_POST['counter'], 0));
                    }
                }

                echo $ui;

            }
        }
    }

    function e_sort_save()
    {

        //Authenticate Member:
        $player_e = superpower_unlocked(10939, 0, $this->player_e);
        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(10939),
            ));
        } elseif (!isset($_POST['e__id']) || intval($_POST['e__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid e__id',
            ));
        } elseif (!isset($_POST['new_x__weight']) || !is_array($_POST['new_x__weight']) || count($_POST['new_x__weight']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Nothing passed for sorting',
            ));
        } else {

            //Validate Source:
            $es = $this->Source_cache->fetch(array(
                'e__id' => $_POST['e__id'],
                'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            ));

            //Count followers:
            $list_e_count = $this->Mench_ledger->fetch(array(
                'x__following' => $_POST['e__id'],
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            ), array('x__follower'), 0, 0, array(), 'COUNT(e__id) as totals');

            if (count($es) < 1) {

                return view__json(array(
                    'status' => 0,
                    'message' => 'Invalid e__id',
                ));

            } elseif($list_e_count[0]['totals'] > view__memory(6404,11064)){

                return view__json(array(
                    'status' => 0,
                    'message' => 'Cannot sort sources if greater than '.view__memory(6404,11064),
                ));

            } else {

                //Update them all:
                foreach($_POST['new_x__weight'] as $rank => $x__id) {
                    $this->Mench_ledger->update($x__id, array(
                        'x__weight' => intval($rank),
                    ), $player_e['e__id'], 13006 /* SOURCE SORT MANUAL */);
                }

                //Display message:
                return view__json(array(
                    'status' => 1,
                ));

            }
        }
    }

    function e_delete(){

        //Auth member and check required variables:
        $player_e = superpower_unlocked(10939, 0, $this->player_e);

        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(10939),
            ));
        } elseif (!isset($_POST['x__id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Transaction ID',
            ));
        }

        //Archive Transaction:
        $this->Mench_ledger->update($_POST['x__id'], array(
            'x__privacy' => 6173,
        ), $player_e['e__id'], 10673 /* IDEA NOTES Unpublished */);

        return view__json(array(
            'status' => 1,
        ));

    }

    function e_copy(){

        //Auth member and check required variables:
        $player_e = superpower_unlocked(10939, 0, $this->player_e);

        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(10939),
            ));
        } elseif (intval($_POST['e__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Source',
            ));
        } elseif (!strlen($_POST['copy_source_title'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Source Title',
            ));
        }


        //Validate Source:
        $fetch_o = $this->Source_cache->fetch(array(
            'e__id' => $_POST['e__id'],
            'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
        ));
        if (count($fetch_o) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid followings source ID',
            ));
        }



        //Create:
        $added_e = $this->Source_cache->verify_create($_POST['copy_source_title'], $player_e['e__id'], $fetch_o[0]['e__cover']);
        if(!$added_e['status']){
            //We had an error, return it:
            return view__json($added_e);
        } else {
            //Assign new source:
            $focus_e = $added_e['new_e'];
        }


        //Followers:
        foreach($this->Mench_ledger->fetch(array(
            'x__following' => $_POST['e__id'],
            'x__type IN (' . join(',', $this->config->item('n___41303')) . ')' => null, //Clone Source Links
            'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
        ), array(), 0) as $x) {
            //Make sure none existent in new source:
            if(!count($this->Mench_ledger->fetch(array(
                'x__type' => $x['x__type'],
                'x__following' => $focus_e['e__id'],
                'x__follower' => $x['x__follower'],
                'x__message' => $x['x__message'],
                'x__reference' => $x['x__reference'],
                'x__privacy' => $x['x__privacy'],
                'x__metadata' => $x['x__metadata'],
            )))){
                $this->Mench_ledger->create(array(
                    'x__player' => $player_e['e__id'],
                    'x__weight' => $x['x__weight'],

                    'x__type' => $x['x__type'],
                    'x__following' => $focus_e['e__id'],
                    'x__follower' => $x['x__follower'],
                    'x__message' => $x['x__message'],
                    'x__reference' => $x['x__reference'],
                    'x__privacy' => $x['x__privacy'],
                    'x__metadata' => $x['x__metadata'],
                ));
            }
        }


        //Followings:
        foreach($this->Mench_ledger->fetch(array(
            'x__follower' => $_POST['e__id'],
            'x__type IN (' . join(',', $this->config->item('n___41303')) . ')' => null, //Clone Source Links
            'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
        ), array(), 0) as $x) {
            if(!count($this->Mench_ledger->fetch(array(
                'x__type' => $x['x__type'],
                'x__following' => $x['x__following'],
                'x__follower' => $focus_e['e__id'],
                'x__message' => $x['x__message'],
                'x__reference' => $x['x__reference'],
                'x__metadata' => $x['x__metadata'],
                'x__privacy' => $x['x__privacy'],
            )))){
                $this->Mench_ledger->create(array(
                    'x__player' => $player_e['e__id'],
                    'x__weight' => $x['x__weight'],

                    'x__type' => $x['x__type'],
                    'x__following' => $x['x__following'],
                    'x__follower' => $focus_e['e__id'],
                    'x__message' => $x['x__message'],
                    'x__reference' => $x['x__reference'],
                    'x__metadata' => $x['x__metadata'],
                    'x__privacy' => $x['x__privacy'],
                ));
            }
        }

        //Ideas:
        foreach($this->Mench_ledger->fetch(array(
            'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            'x__type IN (' . join(',', $this->config->item('n___41302')) . ')' => null, //Clone Idea Source Links
            'x__following' => $_POST['e__id'],
        ), array(), 0) as $x){
            if(!count($this->Mench_ledger->fetch(array(
                'x__type' => $x['x__type'],
                'x__following' => $focus_e['e__id'],
                'x__follower' => $x['x__follower'],
                'x__previous' => $x['x__previous'],
                'x__next' => $x['x__next'],
                'x__message' => $x['x__message'],
                'x__reference' => $x['x__reference'],
                'x__metadata' => $x['x__metadata'],
                'x__privacy' => $x['x__privacy'],
            )))){
                $this->Mench_ledger->create(array(
                    'x__player' => $player_e['e__id'],
                    'x__weight' => $x['x__weight'],

                    'x__type' => $x['x__type'],
                    'x__following' => $focus_e['e__id'],
                    'x__follower' => $x['x__follower'],
                    'x__previous' => $x['x__previous'],
                    'x__next' => $x['x__next'],
                    'x__message' => $x['x__message'],
                    'x__reference' => $x['x__reference'],
                    'x__metadata' => $x['x__metadata'],
                    'x__privacy' => $x['x__privacy'],
                ));
            }
        }

        return view__json(array(
            'status' => 1,
            'new_e__handle' => $focus_e['e__handle'],
        ));


    }

    function i__add()
    {

        /*
         *
         * Either creates a IDEA transaction between focus_id & link_i__id
         * OR will create a new idea with outcome i__message and then transaction it
         * to focus_id (In this case link_i__id=0)
         *
         * */

        //Authenticate Member:
        $member_e = superpower_unlocked(10939, 0, $this->player_e);
        if (!$member_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(10939),
            ));
        } elseif (!isset($_POST['x__type']) || !isset($_POST['focus_id']) || !isset($_POST['focus_card'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing Core Variables',
            ));
        } elseif (!isset($_POST['new_i__message']) || !isset($_POST['link_i__id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing either Idea Outcome OR Follower Idea ID',
            ));
        }

        $validate_i__message = validate_i__message($_POST['new_i__message']);
        if(!$validate_i__message['status']){
            //We had an error, return it:
            return view__json($validate_i__message);
        }


        if(!$_POST['link_i__id'] && view__valid_handle_i($_POST['new_i__message'])){
            foreach($this->Idea_cache->fetch(array(
                'LOWER(i__hashtag)' => strtolower(view__valid_handle_i($_POST['new_i__message'])),
            )) as $i){
                $_POST['link_i__id'] = $i['i__id'];
            }
        }

        $x_i = array();

        if($_POST['link_i__id'] > 0){
            //Fetch transaction idea to determine idea type:
            $x_i = $this->Idea_cache->fetch(array(
                'i__id' => intval($_POST['link_i__id']),
                'i__access IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
            ));
            if(count($x_i)==0){
                //validate Idea:
                return view__json(array(
                    'status' => 0,
                    'message' => 'Idea #'.$_POST['link_i__id'].' is not active.',
                ));
            }
        }

        //All seems good, go ahead and try to create/link the Idea:
        return view__json($this->Idea_cache->create_or_link($_POST['focus_card'], $_POST['x__type'], trim($_POST['new_i__message']), $member_e['e__id'], $_POST['focus_id'], $_POST['link_i__id']));

    }


    function e__add()
    {

        //Auth member and check required variables:
        $player_e = superpower_unlocked(10939, 0, $this->player_e);

        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(10939),
            ));
        } elseif (intval($_POST['focus__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Following Source',
            ));
        } elseif (!isset($_POST['x__type'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Source Creation Type',
            ));
        } elseif (!isset($_POST['e_existing_id']) || !isset($_POST['e_new_string']) || (intval($_POST['e_existing_id']) < 1 && strlen($_POST['e_new_string']) < 1)) {
            return view__json(array(
                'status' => 0,
                'message' => 'Either New Source ID or Source Name',
            ));
        }

        $adding_to_i = ($_POST['focus__node']==12273);

        if($adding_to_i){

            //Validate Idea:
            $fetch_o = $this->Idea_cache->fetch(array(
                'i__id' => $_POST['focus__id'],
            ));
            if (count($fetch_o) < 1) {
                return view__json(array(
                    'status' => 0,
                    'message' => 'Invalid followings source ID',
                ));
            }

        } else {

            //Validate Source:
            $fetch_o = $this->Source_cache->fetch(array(
                'e__id' => $_POST['focus__id'],
                'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            ));
            if (count($fetch_o) < 1) {
                return view__json(array(
                    'status' => 0,
                    'message' => 'Invalid followings source ID',
                ));
            }

        }



        //Set some variables:
        $_POST['e_new_string'] = trim($_POST['e_new_string']);
        $_POST['x__type'] = intval($_POST['x__type']);
        $is_upwards = in_array($_POST['x__type'], $this->config->item('n___14686'));

        if(!intval($_POST['e_existing_id']) && view__valid_handle_e($_POST['e_new_string'])){
            foreach($this->Source_cache->fetch(array(
                'LOWER(e__handle)' => strtolower(substr($_POST['e_new_string'], 1)),
            )) as $e){
                $_POST['e_existing_id'] = $e['e__id'];
            }
        }
        $adding_to_existing = ( intval($_POST['e_existing_id']) > 0 );

        //Are we adding an existing source?
        if ($adding_to_existing) {

            //Validate this existing source:
            $es = $this->Source_cache->fetch(array(
                'e__id' => $_POST['e_existing_id'],
                'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            ));

            if (count($es) < 1) {
                return view__json(array(
                    'status' => 0,
                    'message' => 'Source @'.$_POST['e_existing_id'].' is not active',
                ));
            }

            //All good, assign:
            $focus_e = $es[0];

        } else {

            //We are creating a new source:
            $added_e = $this->Source_cache->verify_create($_POST['e_new_string'], $player_e['e__id']);
            if(!$added_e['status']){
                //We had an error, return it:
                return view__json($added_e);
            } else {
                //Assign new source:
                $focus_e = $added_e['new_e'];
            }

        }


        //We need to check to ensure this is not a duplicate transaction if adding an existing source:
        $ur2 = array();

        if($adding_to_i) {

            //Add Reference:
            $ur2 = $this->Mench_ledger->create(array(
                'x__player' => $player_e['e__id'],
                'x__type' => 4983, //Co-Author
                'x__following' => $focus_e['e__id'],
                'x__next' => $fetch_o[0]['i__id'],
            ));

        } else {

            //Add Up/Down Source:

            //Add transactions only if not previously added by the URL function:
            if ($is_upwards) {

                //Following
                $x__follower = $fetch_o[0]['e__id'];
                $x__following = $focus_e['e__id'];
                $x__weight = 0; //Never sort following, only sort followers

            } else {

                //Followers
                $x__following = $fetch_o[0]['e__id'];
                $x__follower = $focus_e['e__id'];
                $x__weight = 0;

            }


            $x__message = null;

            //Create transaction:
            $ur2 = $this->Mench_ledger->create(array(
                'x__player' => $player_e['e__id'],
                'x__type' => 4251,
                'x__message' => $x__message,
                'x__follower' => $x__follower,
                'x__following' => $x__following,
                'x__weight' => $x__weight,
            ));
        }


        //Return source:
        return view__json(array(
            'status' => 1,
            'e_new_echo' => view__card_e($_POST['x__type'], array_merge($focus_e, $ur2), null),
        ));

    }

    function e_editor_load()
    {

        $player_e = superpower_unlocked(null, 0, $this->player_e);
        $e___11035 = $this->config->item('e___11035');
        $e___42776 = $this->config->item('e___42776');
        $e___4592 = $this->config->item('e___4592'); //Data types
        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));
        } elseif (!isset($_POST['e__id']) || !isset($_POST['x__id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing Core IDs',
            ));
        }

        $es = $this->Source_cache->fetch(array(
            'e__id' => $_POST['e__id'],
            'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
        ));
        if (!count($es)) {
            return view__json(array(
                'status' => 0,
                'message' => 'Source is no longer active',
            ));
        } elseif (!access_level_e($es[0]['e__handle'], 0, $es[0])) {
            return view__json(array(
                'status' => 0,
                'message' => 'You are missing permission to edit this Source',
            ));
        }


        //Fetch dynamic data based on idea type:
        $order_42145 = sort_by(42145);
        $scanned_sources = array();
        $return_inputs = array();
        $input_pointer = 0;
        $profile_header = '';

        //Fetch Source Templates, if any:
        foreach($this->Mench_ledger->fetch(array(
            'x__following IN (' . join(',', $this->config->item('n___42178')) . ')' => null, //Dynamic Sources
            'x__follower' => $es[0]['e__id'],
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
        ), array('x__following'), 0, 0, sort_by(42178)) as $e_group) {

            if(in_array($e_group['e__id'], $scanned_sources)){
                continue;
            }
            array_push($scanned_sources, $e_group['e__id']);

            foreach($this->Mench_ledger->fetch(array(
                'x__follower' => $e_group['e__id'],
                'x__following IN (' . join(',', $this->config->item('n___42145')) . ')' => null, //Dynamic Input Templates
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            ), array('x__following'), 0, 0, $order_42145) as $e_template) {

                $profile_header = '<div class="profile_header main__title"><span class="icon-block-sm">'.view__cover($e_template['e__cover']).'</span>'.$e_template['e__title'].'<a href="'.view__memory(42903,42902).$e_group['e__handle'].'" target="_blank" data-toggle="tooltip" data-placement="top" title="Because you follow '.$e_group['e__title'].'... Click to Open in a New Window"><span class="icon-block-sm">'.view__cover($e_group['e__cover']).'</span></a></div>';


                //Load template:
                if(!is_array($this->config->item('e___'.$e_template['e__id']))){
                    //Report Error:
                    $this->Mench_ledger->create(array(
                        'x__type' => 4246, //Platform Bug Reports
                        'x__message' => 'e_editor_load() ERROR: @'.$e_template['e__id'].' is NOT in memory cache',
                    ));
                    continue;
                } elseif(in_array($e_template['e__id'], $scanned_sources)){
                    continue;
                }
                array_push($scanned_sources, $e_template['e__id']);


                foreach($this->config->item('e___'.$e_template['e__id']) as $dynamic_e__id => $m) {

                    //Make sure it's a dynamic input field:
                    if(!in_array($dynamic_e__id, $this->config->item('n___42179'))){
                        continue;
                    } elseif(in_array($dynamic_e__id, $scanned_sources)){
                        continue;
                    }
                    array_push($scanned_sources, $dynamic_e__id);

                    //Let's first determine the data type:
                    $data_types = array_intersect($m['m__following'], $this->config->item('n___4592'));

                    if(count($data_types)!=1){

                        //This is strange, we are expecting 1 match only report this:
                        $this->Mench_ledger->create(array(
                            'x__type' => 4246, //Platform Bug Reports
                            'x__player' => $player_e['e__id'],
                            'x__following' => 31912, //Edit Source
                            'x__follower' => $dynamic_e__id,
                            'x__reference' => $_POST['x__id'],
                            'x__message' => 'Found '.count($data_types).' Data Types (@'.$es[0]['e__id'].') (Expecting exactly 1) for @'.$dynamic_e__id.': Check @4592 to see what is wrong',
                        ));
                        continue; //Go to the next dynamic data type

                    } elseif ($input_pointer >= view__memory(6404, 42206)) {
                        //Monitor if we ever reach the maximum:
                        $this->Mench_ledger->create(array(
                            'x__type' => 4246, //Platform Bug Reports
                            'x__player' => $player_e['e__id'],
                            'x__following' => 42179, //Dynamic Input Fields
                            'x__follower' => $dynamic_e__id,
                            'x__next' => $_POST['e__id'],
                            'x__reference' => $_POST['x__id'],
                            'x__metadata' => $_POST,
                            'x__message' => 'Dynamic Fields Reach their maximum limit of ' . view__memory(6404, 42206) . '  which may require field expansion',
                        ));
                    }

                    //We found 1 match as expected:
                    $input_pointer++;
                    foreach($data_types as $data_type_this){
                        $data_type = $data_type_this;
                        break;
                    }

                    if(in_array($data_type, $this->config->item('n___42188'))){

                        //Single or Multiple Choice:
                        array_push($return_inputs, array(
                            'd__id' => $dynamic_e__id,
                            'd__is_radio' => 1,
                            'd_x__id' => 0,
                            'd__html' => view__instant_select($dynamic_e__id, $es[0]['e__id'], 0),
                            'd__value' => ( $es[0]['e__id']>0 ? $es[0]['e__id'] : '' ),
                            'd__type_name' => '',
                            'd__placeholder' => '',
                            'd__profile_header' => $profile_header,
                        ));

                    } else {

                        $this_data_type = $this->config->item('e___'.$data_type);
                        $e___6177 = $this->config->item('e___6177'); //Source Privacy
                        $e___42179 = $this->config->item('e___42179'); //Dynamic Input Field
                        $e___11035 = $this->config->item('e___11035'); //Encyclopedia

                        //Fetch the current value(s):
                        $counted = 0;
                        $unique_values = array();
                        foreach($this->Mench_ledger->fetch(array(
                            'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                            'x__follower' => $es[0]['e__id'],
                            'x__following' => $dynamic_e__id,
                        ), array('x__following')) as $selected_e){
                            if(strlen($selected_e['x__message']) && !in_array($selected_e['x__message'], $unique_values)){
                                array_push($unique_values, $selected_e['x__message']);
                                $counted++;
                                array_push($return_inputs, array(
                                    'd__id' => $dynamic_e__id,
                                    'd__is_radio' => 0,
                                    'd_x__id' => $selected_e['x__id'],
                                    'd__html' => view__dynamic_headline($dynamic_e__id, $m, $selected_e),
                                    'd__value' => $selected_e['x__message'],
                                    'd__type_name' => html_input_type($data_type),
                                    'd__placeholder' => ( strlen($this_data_type[$dynamic_e__id]['m__message']) ? $this_data_type[$dynamic_e__id]['m__message'] : $e___4592[$data_type]['m__title'].'...' ),
                                    'd__profile_header' => $profile_header,
                                ));
                            }
                        }

                        if(!$counted){
                            foreach($this->Source_cache->fetch(array(
                                'e__id' => $dynamic_e__id,
                            )) as $selected_e){
                                array_push($return_inputs, array(
                                    'd__id' => $dynamic_e__id,
                                    'd__is_radio' => 0,
                                    'd_x__id' => 0,
                                    'd__html' => view__dynamic_headline($dynamic_e__id, $m, $selected_e),
                                    'd__value' => '',
                                    'd__type_name' => html_input_type($data_type),
                                    'd__placeholder' => ( strlen($this_data_type[$dynamic_e__id]['m__message']) ? $this_data_type[$dynamic_e__id]['m__message'] : $e___4592[$data_type]['m__title'].'...' ),
                                    'd__profile_header' => $profile_header,
                                ));
                            }
                        }
                    }
                }
            }
        }



        //Add universal inputs only if missing bio profiles:
        if(!array_intersect($scanned_sources, $this->config->item('n___42885'))){
            foreach($this->Source_cache->fetch(array(
                'e__id IN (' . join(',', $this->config->item('n___42776')) . ')' => null, //Universal Dynamic Inputs
            )) as $selected_e){
                foreach(array_intersect($e___42776[$selected_e['e__id']]['m__following'], $this->config->item('n___4592')) as $data_type){
                    //Any value?
                    $values = $this->Mench_ledger->fetch(array(
                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                        'x__follower' => $es[0]['e__id'],
                        'x__following' => $selected_e['e__id'],
                    ));
                    array_push($return_inputs, array(
                        'd__id' => $selected_e['e__id'],
                        'd__is_radio' => 0,
                        'd_x__id' => 0,
                        'd__html' => view__dynamic_headline($selected_e['e__id'], $e___42776[$selected_e['e__id']], $selected_e),
                        'd__value' => ( isset($values[0]['x__message']) && strlen($values[0]['x__message'])>0 ? $values[0]['x__message'] : '' ),
                        'd__type_name' => html_input_type($data_type),
                        'd__placeholder' => ( strlen($e___42776[$selected_e['e__id']]['m__message']) ? $e___42776[$selected_e['e__id']]['m__message'] : $e___4592[$data_type]['m__title'].'...' ),
                        'd__profile_header' => '', //No header for universals
                    ));
                    break;
                }
            }
        }


        //Find Past Selected Covers for Source:
        $cover_history_content = array();
        $unique_covers = array();
        foreach($this->Mench_ledger->fetch(array(
            'x__follower' => $_POST['e__id'],
            'x__type' => 10653, //Source Cover Update
            'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
        ), array(), 0, 0, array('x__id' => 'DESC')) as $x) {
            $x__metadata = unserialize($x['x__metadata']);
            if(strlen($x__metadata['before'])){
                $cover = ( substr_count($x__metadata['before'], 'class="') ? one_two_explode('class="','"',$x__metadata['before']) : $x__metadata['before'] );
                if((filter_var($cover, FILTER_VALIDATE_URL) || string_is_icon($cover) || string_is_emoji($cover)) && !in_array($cover, $unique_covers)){
                    array_push($unique_covers, $cover);
                    array_push($cover_history_content, array(
                        'cover_preview' => $cover,
                        'cover_apply' => $cover,
                        'new_title' => $x['x__time'],
                    ));
                }
            }
        }

        $return_array = array(
            'status' => 1,
            'return_inputs' => $return_inputs,
            'cover_history_content' => $cover_history_content, //Past covers for quick editing
        );

        //Log Modal View:
        $this->Mench_ledger->create(array(
            'x__player' => $player_e['e__id'],
            'x__type' => 14576, //MODAL VIEWED
            'x__following' => 31912, //Edit Source
            'x__follower' => $es[0]['e__id'],
            'x__reference' => $_POST['x__id'],
            'x__metadata' => $return_array,
        ));

        //Return everything we found:
        return view__json($return_array);

    }

    function e_editor_save()
    {

        $player_e = superpower_unlocked(null, 0, $this->player_e);
        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));
        } elseif (!isset($_POST['save_e__id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Coin ID',
            ));
        } elseif (!isset($_POST['save_e__title'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Source Title',
            ));
        } elseif (!isset($_POST['save_e__handle'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Source Handle',
            ));
        } elseif (!isset($_POST['save_e__privacy']) || !in_array($_POST['save_e__privacy'], $this->config->item('n___6177'))) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Source Privacy',
            ));
        } elseif (!isset($_POST['save_e__cover'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Source Cover',
            ));
        } elseif(!isset($_POST['save_x__id']) || !isset($_POST['save_x__message'])){
            return view__json(array(
                'status' => 0,
                'message' => 'Missing Transaction Data',
            ));
        }



        $es = $this->Source_cache->fetch(array(
            'e__id' => $_POST['save_e__id'],
            'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
        ));
        if(!count($es)){
            return view__json(array(
                'status' => 0,
                'message' => 'Source Not Active',
            ));
        }


        //Validate Dynamic Inputs:
        $e___42179 = $this->config->item('e___42179'); //Dynamic Input Fields

        //Process dynamic inputs if any:
        for ($p = 1; $p <= view__memory(6404,42206); $p++) {

            if(!isset($_POST['save_dynamic_' . $p])){
                break; //Nothing more to process
            }

            $input_parts = explode('____', $_POST['save_dynamic_' . $p], 3);
            if(!isset($input_parts[0]) || !isset($input_parts[1])){
                continue;
            }
            $d_x__id = $input_parts[0];
            $dynamic_e__id = $input_parts[1];
            $dynamic_value = trim($input_parts[2]);


            //Required fields must have an input:
            if(in_array($dynamic_e__id, $this->config->item('n___28239')) && !strlen($dynamic_value) && !in_array($dynamic_e__id, $this->config->item('n___33331')) && !in_array($dynamic_e__id, $this->config->item('n___33332'))){
                return view__json(array(
                    'status' => 0,
                    'message' => 'Missing Required Field: '.$e___42179[$dynamic_e__id]['m__title'],
                ));
            }

            //Validate input based on its data type, if provided:
            if (strlen($dynamic_value)) {
                foreach(array_intersect($e___42179[$dynamic_e__id]['m__following'], $this->config->item('n___4592')) as $data_type_this){
                    $data_type_validate = data_type_validate($data_type_this, $dynamic_value, $e___42179[$dynamic_e__id]['m__title']);
                    if (!$data_type_validate['status']) {
                        //We had an error:
                        return view__json($data_type_validate);
                    }
                }
            }


            //Fetch the current value:
            if($d_x__id > 0){
                $values = $this->Mench_ledger->fetch(array(
                    'x__id' => $d_x__id,
                ));
            }

            if(!$d_x__id || !count($values)){
                $values = $this->Mench_ledger->fetch(array(
                    'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                    'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                    'x__following' => $dynamic_e__id,
                    'x__follower' => $es[0]['e__id'],
                ));
            }


            //Update if needed:
            if (!strlen($dynamic_value)) {

                //Remove Link if we have one:
                if(count($values) && $dynamic_e__id!=11035 /* HACK: Summary are key links that should not be removed */){
                    $this->Mench_ledger->update($values[0]['x__id'], array(
                        'x__privacy' => 6173, //Transaction Removed
                    ), $player_e['e__id'], 42175 /* Dynamic Link Content Removed */);
                }

            } elseif (!count($values)) {

                //Create Link:
                $this->Mench_ledger->create(array(
                    'x__player' => $player_e['e__id'],
                    'x__type' => 4251,
                    'x__following' => $dynamic_e__id,
                    'x__follower' => $es[0]['e__id'],
                    'x__message' => $dynamic_value,
                    'x__weight' => number_x__weight($dynamic_value),
                ));

            } elseif ($values[0]['x__message'] != $dynamic_value) {

                //Update Link:
                $this->Mench_ledger->update($values[0]['x__id'], array(
                    'x__message' => $dynamic_value,
                ), $player_e['e__id'], 42176 /* Dynamic Link Content Updated */);

            }
        }




        //Validate Source Handle & save if needed:
        if($es[0]['e__handle'] !== trim($_POST['save_e__handle'])){
            $validate_update_handle = validate_update_handle(trim($_POST['save_e__handle']), null, $es[0]['e__id']);
            if(!$validate_update_handle['status']){
                return view__json(array(
                    'status' => 0,
                    'message' => $validate_update_handle['message'],
                ));
            }
        }

        //Validate Source Title & save if needed:
        $validate_e__title = validate_e__title($_POST['save_e__title']);
        if($es[0]['e__title'] != trim($_POST['save_e__title'])){
            if(!$validate_e__title['status']){
                return view__json(array(
                    'status' => 0,
                    'message' => $validate_e__title['message'],
                ));
            }
            $es[0]['e__title'] = $validate_e__title['e__title_clean'];
        }

        //Save Source Cover if needed:
        if($es[0]['e__cover'] != trim($_POST['save_e__cover'])){
            //TODO validate e__cover?
            $es[0]['e__cover'] = trim($_POST['save_e__cover']);
        }

        //Update:
        $this->Source_cache->update($es[0]['e__id'], array(
            'e__title' => $validate_e__title['e__title_clean'],
            'e__cover' => trim($_POST['save_e__cover']),
            'e__handle' => trim($_POST['save_e__handle']),
            'e__privacy' => $_POST['save_e__privacy'],
        ), true, $player_e['e__id']);


        $es[0]['e__handle'] = sync_handle_references($es[0], trim($_POST['save_e__handle']));

        //Do we have a link reference message that need to be saved?
        if($_POST['save_x__id']>0 && $_POST['save_x__message']!='IGNORE_INPUT'){

            //Fetch transaction:
            foreach($this->Mench_ledger->fetch(array(
                'x__id' => $_POST['save_x__id'],
            )) as $this_x){

                $es[0] = array_merge($es[0], $this_x);

                if($this_x['x__message'] != trim($_POST['save_x__message'])){
                    $this->Mench_ledger->update($this_x['x__id'], array(
                        'x__message' => trim($_POST['save_x__message']),
                    ), $player_e['e__id'], 42171);
                }
            }
        }


        //Reset member session data if this data belongs to the logged-in member:
        if ($_POST['save_e__id']==$player_e['e__id']) {
            $this->Source_cache->activate_session($es[0], true);
        }


        return view__json(array(
            'status' => 1,
            'message' => 'Updated ',
        ));


    }

    function e_select_apply()
    {
        /*
         *
         * Saves the radio selection of some account fields
         *
         * */

        $player_e = superpower_unlocked(null, 0, $this->player_e);
        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));
        } elseif (!isset($_POST['focus__id']) || intval($_POST['focus__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing followings source',
            ));
        } elseif (!isset($_POST['selected_e__id']) || intval($_POST['selected_e__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing selected source',
            ));
        } elseif (!isset($_POST['down_e__id']) || !isset($_POST['right_i__id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing Down/Right Element',
            ));
        } elseif (!isset($_POST['enable_mulitiselect']) || !isset($_POST['was_previously_selected'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing multi-select setting',
            ));
        }

        $stats = array(
            'total' => 0,
            'was_previously_selected' => intval($_POST['was_previously_selected']),
            'deleted' => 0,
            'added' => 0,
        );


        if($_POST['down_e__id'] > 0){

            //Dispatch Any Emails Necessary:
            if(isset($_POST['selected_e__id']) && intval($_POST['selected_e__id'])>0){
                foreach($this->Mench_ledger->fetch(array(
                    'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                    'x__type' => 33600, //Draft
                    'x__following' => $_POST['selected_e__id'],
                ), array('x__next'), 0) as $i){
                    if(count($this->Mench_ledger->fetch(array(
                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        'x__type' => 33600, //Draft
                        'x__following' => 31065, //Choice Update Email Templates
                        'x__next' => $i['i__id'], //Is this the template?
                    )))){
                        //Found the email template to send:
                        $total_sent = $this->Mench_ledger->send_i_mass_dm(array($player_e), $i, website_setting(0), false);
                        break; //Just the first template match
                    }
                }
            }


            if($_POST['focus__id']==28904){

                //Add special transaction to monitor unsubscribes:
                if(in_array($_POST['selected_e__id'], $this->config->item('n___29648'))){
                    $this->Mench_ledger->create(array(
                        'x__player' => $player_e['e__id'],
                        'x__type' => 29648, //Communication Downgraded
                        'x__following' => $_POST['focus__id'],
                        'x__follower' => $_POST['selected_e__id'],
                    ));
                }
            }
        }

        $is_required = in_array($_POST['focus__id'], $this->config->item('n___28239')); //Required Settings

        if(!$_POST['enable_mulitiselect'] || $_POST['was_previously_selected']){

            //Since this is not a multi-select we want to delete all existing options

            //Fetch all possible answers based on followings source:
            $query_filters = array(
                'x__following' => $_POST['focus__id'],
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            );

            if((!$is_required || $_POST['enable_mulitiselect']) && $_POST['was_previously_selected']){
                //Just delete this single item, not the other ones:
                $query_filters['x__follower'] = $_POST['selected_e__id'];
            }

            //List all possible answers:
            $possible_answers = array();
            foreach($this->Mench_ledger->fetch($query_filters, array('x__follower'), 0, 0) as $answer_e){
                $stats['total']++;
                array_push($possible_answers, $answer_e['e__id']);
            }

            //Delete previously selected options:
            if($_POST['down_e__id']){
                $delete_query = $this->Mench_ledger->fetch(array(
                    'x__following IN (' . join(',', $possible_answers) . ')' => null,
                    'x__follower' => $_POST['down_e__id'],
                    'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                    'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                ));
            } elseif($_POST['right_i__id']){
                $delete_query = $this->Mench_ledger->fetch(array(
                    'x__following IN (' . join(',', $possible_answers) . ')' => null,
                    'x__next' => $_POST['right_i__id'],
                    'x__type IN (' . join(',', $this->config->item('n___33602')) . ')' => null, //Idea/Source Links Active
                    'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                ));
            }

            foreach($delete_query as $delete){
                $stats['deleted']++;
                //Should usually delete a single option:
                $this->Mench_ledger->update($delete['x__id'], array(
                    'x__privacy' => 6173, //Transaction Removed
                ), $player_e['e__id'], 6224 /* Member Account Updated */);
            }

        }

        //Add new option if not previously there:
        if((!$_POST['enable_mulitiselect'] && $is_required) || !$_POST['was_previously_selected']){
            if($_POST['down_e__id']){
                $stats['added']++;
                $this->Mench_ledger->create(array(
                    'x__player' => $player_e['e__id'],
                    'x__following' => $_POST['selected_e__id'],
                    'x__type' => 4251,
                    'x__follower' => $_POST['down_e__id'],
                ));
            } elseif($_POST['right_i__id']){

                if(!count($this->Mench_ledger->fetch(array(
                    'x__type IN (' . join(',', $this->config->item('n___31919')) . ')' => null, //IDEA AUTHOR
                    'x__following' => $_POST['selected_e__id'],
                    'x__next' => $_POST['right_i__id'],
                    'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                )))){
                    $stats['added']++;
                    $this->Mench_ledger->create(array(
                        'x__player' => $player_e['e__id'],
                        'x__type' => 4983, //Co-Author
                        'x__following' => $_POST['selected_e__id'],
                        'x__next' => $_POST['right_i__id'],
                    ));
                }

            }
        }


        //Update Session:
        if($_POST['down_e__id'] && count($player_e)){
            $this->Source_cache->activate_session($player_e, true);
        }


        //All good:
        return view__json(array(
            'status' => 1,
            'message' => 'Updated: '.print_r($stats, true),
        ));
    }

    function e_contact_auth(){


        if (!isset($_POST['account_id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing user ID',
            ));
        } elseif (!isset($_POST['input_code']) || !intval($_POST['input_code'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid code',
            ));
        } elseif (!isset($_POST['account_email_phone'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing account_email_phone',
            ));
        } elseif (!isset($_POST['referrer_url'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing referrer URL',
            ));
        } elseif (!isset($_POST['sign_i__id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing idea referrer',
            ));
        }

        $_POST['account_email_phone'] = trim(strtolower($_POST['account_email_phone']));

        //Validate member ID
        if($_POST['account_id'] > 0){

            $es = $this->Source_cache->fetch(array(
                'e__id' => $_POST['account_id'],
            ));
            if(!count($es)){
                return view__json(array(
                    'status' => 0,
                    'message' => 'Invalid account ID.',
                ));
            }

        } else {


            $_POST['new_account_email'] = trim(strtolower($_POST['new_account_email']));
            if(!filter_var($_POST['account_email_phone'], FILTER_VALIDATE_EMAIL) && !filter_var($_POST['new_account_email'], FILTER_VALIDATE_EMAIL)){
                return view__json(array(
                    'status' => 0,
                    'message' => 'Enter your email to continue',
                ));
            }

        }



        //Auth Code:
        $is_authenticated = false;
        foreach($this->Mench_ledger->fetch(array(
            'x__type' => 32078, //Sign In Key
            'x__privacy' => 6175, //Still Pending
            'x__message' => $_POST['account_email_phone'],
        ), array(), 1, 0, array('x__id' => 'DESC')) as $sent_key){

            $x__metadata = unserialize($sent_key['x__metadata']);
            $session_key = $this->session->userdata('session_key');

            if(strlen($session_key) && $x__metadata['hash_code']==md5($session_key.$_POST['input_code'])){

                //Complete access code:
                $is_authenticated = $this->Mench_ledger->update($sent_key['x__id'], array(
                    'x__privacy' => 6176, //Published
                ), $_POST['account_id'], 32569); //Code Verified

            }

        }
        if(!$is_authenticated){
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid code, try again.',
            ));
        }





        //Validate member ID
        if($_POST['account_id'] > 0){

            //Assign session & log transaction:
            $this->Source_cache->activate_session($es[0]);

        } else {

            //Add new account
            $_POST['account_email_phone'] =  trim(strtolower($_POST['account_email_phone']));
            $is_email = filter_var($_POST['account_email_phone'], FILTER_VALIDATE_EMAIL);

            //Prep inputs & validate further:
            $acc_email = ( $is_email ? $_POST['account_email_phone'] : $_POST['new_account_email'] );
            $player_result = $this->Source_cache->add_member(strstr($acc_email, '@', true), $acc_email, ( !$is_email ? $_POST['account_email_phone'] : '' ));
            if (!$player_result['status']) {
                return view__json($player_result);
            }

            $es[0] = $player_result['e'];

        }


        //Set default sign in URL:
        $sign_url = view__memory(42903,42902).$es[0]['e__handle'];

        //See if we can find a better one:
        if (intval($_POST['sign_i__id']) > 0) {
            foreach($this->Idea_cache->fetch(array(
                'i__id' => $_POST['sign_i__id'],
            )) as $i){
                $sign_url = $i['i__hashtag'].'/'.view__memory(6404,4235);
            }
        } elseif (isset($_POST['referrer_url']) && strlen(urldecode($_POST['referrer_url'])) > 1) {
            $sign_url = urldecode($_POST['referrer_url']);
        }

        return view__json(array(
            'status' => 1,
            'sign_url' => $sign_url,
        ));

    }

    function e_toggle_e(){

        $player_e = superpower_unlocked(10939, 0, $this->player_e);
        if(!$player_e){

            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(10939),
            ));

        } elseif(!isset($_POST['x__player']) || !isset($_POST['e__id']) || !isset($_POST['i__id']) || !isset($_POST['x__id'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Core Variable',
            ));

        } else {

            $_POST['require_writing'] = intval($_POST['require_writing']);

            $already_added = $this->Mench_ledger->fetch(array(
                'x__following' => $_POST['e__id'],
                'x__follower' => $_POST['x__player'],
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            ), array('x__following'));

            if(count($already_added)){

                if(intval($_POST['require_writing'])){

                    //Updating current value if changed:
                    if(strlen($_POST['written_answer']) && trim($_POST['written_answer'])!=$already_added[0]['x__message']){
                        $this->Mench_ledger->update($already_added[0]['x__id'], array(
                            'x__message' => $_POST['written_answer'],
                        ));
                    } elseif(!strlen($_POST['written_answer'])){
                        $this->Mench_ledger->update($already_added[0]['x__id'], array(
                            'x__privacy' => 6173, //Transaction Deleted
                        ), $player_e['e__id'], 10673 /* Member Transaction Unpublished */);
                    }

                    return view__json(array(
                        'status' => 1,
                        'message' => $_POST['written_answer'],
                    ));

                } else {

                    //Already exists, let's remove:
                    $this->Mench_ledger->update($already_added[0]['x__id'], array(
                        'x__privacy' => 6173, //Transaction Deleted
                    ), $player_e['e__id'], 10673 /* Member Transaction Unpublished */);

                    return view__json(array(
                        'status' => 1,
                        'message' => '',
                    ));

                }

            } else {

                if(intval($_POST['require_writing']) && !strlen($_POST['written_answer'])){

                    //Nothing to do
                    return view__json(array(
                        'status' => 1,
                        'message' => '',
                    ));

                } else {

                    foreach($this->Source_cache->fetch(array(
                        'e__id' => $_POST['e__id'],
                    )) as $e){

                        //Does not exist, Add:
                        $this->Mench_ledger->create(array(
                            'x__following' => $_POST['e__id'],
                            'x__follower' => $_POST['x__player'],
                            'x__player' => $player_e['e__id'],
                            'x__message' => $_POST['written_answer'],
                            'x__type' => 4251,
                        ));

                        return view__json(array(
                            'status' => 1,
                            'message' => ( intval($_POST['require_writing']) ? $_POST['written_answer'] : view__cover($e['e__cover'], true) ),
                        ));

                    }
                }
            }
        }
    }

    function e_verify_contact(){

        if(!isset($_POST['account_email_phone'])){
            return view__json(array(
                'status' => 0,
                'message' => 'missing account details',
            ));
        }

        //Cleanup input email:
        $e___11035 = $this->config->item('e___11035'); //Encyclopedia
        $_POST['account_email_phone'] = trim(strtolower($_POST['account_email_phone']));
        $valid_email = filter_var($_POST['account_email_phone'], FILTER_VALIDATE_EMAIL);
        if(!$valid_email && strlen($_POST['account_email_phone'])>=10){
            $_POST['account_email_phone'] = preg_replace('/[^0-9]+/', '', $_POST['account_email_phone']);
        }
        $possible_phone = !$valid_email && strlen($_POST['account_email_phone'])>=10;

        if (!$valid_email && !$possible_phone) {
            return view__json(array(
                'status' => 0,
                'message' => ( strlen($_POST['account_email_phone']) ? '['.$_POST['account_email_phone'].'] is Invalid!' : 'Enter your email to continue...' ),
            ));
        } elseif (!isset($_POST['sign_i__id'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing data ID',
            ));
        }


        if(intval($_POST['sign_i__id']) > 0){
            //Fetch the idea:
            $referrer_i = $this->Idea_cache->fetch(array(
                'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
                'i__id' => $_POST['sign_i__id'],
            ));
        } else {
            $referrer_i = array();
        }


        //Search for email/phone to see if it exists
        $x__player = 0;
        foreach($this->Mench_ledger->fetch(array(
            'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            'x__message' => $_POST['account_email_phone'],
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__following' => ( filter_var($_POST['account_email_phone'], FILTER_VALIDATE_EMAIL) ? 3288 : 4783 ), //Email / Phone
            'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
        ), array('x__follower')) as $map_e){
            $u = $map_e;
            $x__player = $map_e['e__id'];
            break;
        }

        //Send Sign In Key
        $passcode = rand(1000,9999);
        $session_key = random_string(55);

        //Append to session:
        $session_data = $this->session->all_userdata();
        $session_data['session_key'] = $session_key;
        $this->session->set_userdata($session_data);

        $html_message = $passcode.' is your '.$e___11035[32078]['m__title'].' for your '.get_domain('m__title').' account.';

        if($valid_email) {

            //Email:
            dispatch_email(array($_POST['account_email_phone']), $html_message, '<div class="line">'.$html_message.'</div>', $x__player, array(), 0, 0, false);


            //Log new key:
            $this->Mench_ledger->create(array(
                'x__player' => $x__player, //Member making request
                'x__previous' => intval($_POST['sign_i__id']),
                'x__type' => 32078, //Sign In Key
                'x__privacy' => 6175, //Pending until used (if used)
                'x__message' => $_POST['account_email_phone'],
                'x__metadata' => array(
                    'hash_code' => md5($session_key.$passcode),
                ),
            ));

        } elseif($possible_phone) {

            //SMS:
            dispatch_sms($_POST['account_email_phone'], $html_message, 0, array(), 0, 0, false);

            //Log new key:
            $this->Mench_ledger->create(array(
                'x__player' => $x__player, //Member making request
                'x__previous' => intval($_POST['sign_i__id']),
                'x__type' => 32078, //Sign In Key
                'x__privacy' => 6175, //Pending until used (if used)
                'x__message' => $_POST['account_email_phone'],
                'x__metadata' => array(
                    'hash_code' => md5($session_key.$passcode),
                ),
            ));

        }

        return view__json(array(
            'status' => 1,
            'account_id' => $x__player,
            'valid_email' => ( $valid_email ? 1 : 0 ),
            'account_preview' => ( $x__player ? '<span class="icon-block">'.view__cover($u['e__cover'], true). '</span>'.$u['e__title'] : '' ),
            'clean_contact' => $_POST['account_email_phone'],
        ));

    }

    function x_set_text(){

        //Authenticate Member:
        $player_e = superpower_unlocked(null, 0, $this->player_e);
        $e___12112 = $this->config->item('e___12112');

        if (!$player_e) {

            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
                'original_val' => '',
            ));

        } elseif(!isset($_POST['s__id']) || !isset($_POST['cache_e__id']) || !isset($_POST['new_i__message'])){

            return view__json(array(
                'status' => 0,
                'message' => 'Missing core variables',
                'original_val' => '',
            ));

        } elseif($_POST['cache_e__id']==6197 /* SOURCE FULL NAME */){

            $es = $this->Source_cache->fetch(array(
                'e__id' => $_POST['s__id'],
                'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            ));
            if(!count($es)){
                return view__json(array(
                    'status' => 0,
                    'message' => 'Invalid Source ID #3',
                    'original_val' => '',
                ));
            }


            $validate_e__title = validate_e__title($_POST['new_i__message']);
            if(!$validate_e__title['status']){
                return view__json(array_merge($validate_e__title, array(
                    'original_val' => $es[0]['e__title'],
                )));
            }

            //All good, go ahead and update:
            $this->Source_cache->update($es[0]['e__id'], array(
                'e__title' => $validate_e__title['e__title_clean'],
            ), true, $player_e['e__id']);

            //Reset member session data if this data belongs to the logged-in member:
            if ($es[0]['e__id']==$player_e['e__id']) {
                //Re-activate Session with new data:
                $es[0]['e__title'] = $validate_e__title['e__title_clean'];
                $this->Source_cache->activate_session($es[0], true);
            }

            return view__json(array(
                'status' => 1,
            ));

        } else {

            return view__json(array(
                'status' => 0,
                'message' => 'Unknown Update Type ['.$_POST['cache_e__id'].']',
                'original_val' => '',
            ));

        }
    }

    function x_mass_apply_preview()
    {

        if(!isset($_POST['apply_id']) || !isset($_POST['s__id'])){
            die('Missing core data');
        }

        //Log Modal View
        $player_e = superpower_unlocked(null, 0, $this->player_e);
        $this->Mench_ledger->create(array(
            'x__player' => ( isset($player_e['e__id']) ? $player_e['e__id'] : 0 ),
            'x__type' => 14576, //MODAL VIEWED
            'x__following' => $_POST['apply_id'],
            'x__follower' => ( $_POST['apply_id']==4997 ? $_POST['s__id'] : 0 ),
            'x__next' => ( $_POST['apply_id']==12589 ? $_POST['s__id'] : 0 ),
        ));

        if(!isset($_POST['apply_id']) || !isset($_POST['s__id'])){
            echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Missing Core Data</div>';
        } else {
            if($_POST['apply_id']==4997){

                //Source list:
                $counter = view__e_covers(12274, $_POST['s__id'], 0, false);
                if(!$counter){
                    echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>No Sources yet</div>';
                } else {
                    echo '<div class="alert" role="alert"><span class="icon-block"><i class="far fa-list"></i></span>Will apply to '.$counter.' source'.view__s($counter).':</div>';
                    echo '<div class="row justify-content">';
                    $ids = array();
                    foreach(view__e_covers(12274, $_POST['s__id'], 1, true) as $e) {
                        array_push($ids, $e['e__id']);
                        echo view__card_e(12274, $e);
                    }
                    echo '</div>';
                    echo '<div class="dotransparent" title="Total of '.count($ids).'">'.join(', ',$ids).'</div>';
                }

            } elseif($_POST['apply_id']==12589){

                //idea list:
                $is_next = $this->Mench_ledger->fetch(array(
                    'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                    'i__privacy IN (' . join(',', $this->config->item('n___42948')) . ')' => null, //Public Ideas
                    'x__type IN (' . join(',', $this->config->item('n___42267')) . ')' => null, //IDEA LINKS
                    'x__previous' => $_POST['s__id'],
                ), array('x__next'), 0, 0, array('x__weight' => 'ASC'));
                $counter = count($is_next);

                if(!$counter){
                    echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>No Ideas yet</div>';
                } else {
                    echo '<div class="alert" role="alert"><span class="icon-block"><i class="far fa-list"></i></span>Will apply to '.$counter.' idea'.view__s($counter).':</div>';
                    echo '<div class="row justify-content">';
                    $ids = array();
                    foreach($is_next as $i) {
                        array_push($ids, $i['i__id']);
                        echo view__card_i(12273, $i);
                    }
                    echo '</div>';
                    echo '<div class="dotransparent">'.join(',',$ids).'</div>';
                }

            } else {
                echo '<div class="alert alert-danger" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>Unknown Apply ID</div>';
            }
        }
    }

    function x_view__load_page()
    {

        $focus_e = array();
        $previous_i = array();

        if(!isset($_POST['focus__node'])){
            die('Missing input. Refresh and try again.');
        }
        $success = false;

        if($_POST['focus__node']==12274){

            //SOURCE
            $focus_es = $this->Source_cache->fetch(array(
                'e__id' => $_POST['focus__id'],
            ));
            $focus_e = $focus_es[0];

            foreach(view__e_covers($_POST['x__type'], $_POST['focus__id'], $_POST['current_page']) as $s) {
                if (in_array($_POST['x__type'], $this->config->item('n___11028'))) {
                    echo view__card_e($_POST['x__type'], $s);
                    $success = true;
                } else if ($_POST['x__type']==6255 || in_array($_POST['x__type'], $this->config->item('n___42284')) || in_array($_POST['x__type'], $this->config->item('n___42261')) || in_array($_POST['x__type'], $this->config->item('n___11020'))) {
                    echo view__card_i($_POST['x__type'], $s, $previous_i, null, $focus_e['e__id']);
                    $success = true;
                }
            }

        } elseif($_POST['focus__node']==12273) {

            //IDEA
            $previous_is = $this->Idea_cache->fetch(array(
                'i__id' => $_POST['focus__id'],
            ));
            $previous_i = $previous_is[0];

            foreach(view__i_covers($_POST['x__type'], $_POST['focus__id'], $_POST['current_page']) as $s) {
                if (in_array($_POST['x__type'], $this->config->item('n___11020'))) {
                    echo view__card_i($_POST['x__type'], $s, $previous_i, null, $focus_e['e__id']);
                    $success = true;
                } else if ($_POST['x__type']==6255 || in_array($_POST['x__type'], $this->config->item('n___42261')) || in_array($_POST['x__type'], $this->config->item('n___42284')) || in_array($_POST['x__type'], $this->config->item('n___11028'))) {
                    echo view__card_e($_POST['x__type'], $s);
                    $success = true;
                }
            }
        }

        if(!$success){
            die('Nothing more to load :)');
        }

    }

    function x_reset_sorting()
    {

        //Authenticate Member:
        $player_e = superpower_unlocked(10939, 0, $this->player_e);

        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(10939),
            ));
        } elseif (!isset($_POST['focus__node']) || !in_array($_POST['focus__node'], $this->config->item('n___28956'))) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid focus__node',
            ));
        } elseif (!isset($_POST['focus__id']) || intval($_POST['focus__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid focus__id',
            ));
        }

        if($_POST['focus__node']==12273){
            //Ideas order based on alphabetical order
            $order = 0;
            foreach($this->Mench_ledger->fetch(array(
                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
                'x__type IN (' . join(',', $this->config->item('n___42267')) . ')' => null, //IDEA LINKS
                'x__previous' => $_POST['focus__id'],
            ), array('x__next'), 0, 0, array('i__message' => 'ASC')) as $x) {
                $order++;
                $this->Mench_ledger->update($x['x__id'], array(
                    'x__weight' => $order,
                ), $player_e['e__id'], 13007 /* SOURCE SORT RESET */);
            }
        } elseif($_POST['focus__node']==12274){
            //Sources reset order
            foreach($this->Mench_ledger->fetch(array(
                'x__following' => $_POST['focus__id'],
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                'e__privacy IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            ), array('x__follower'), 0, 0) as $x) {
                $this->Mench_ledger->update($x['x__id'], array(
                    'x__weight' => 0,
                ), $player_e['e__id'], 13007 /* SOURCE SORT RESET */);
            }
        }


        //Display message:
        view__json(array(
            'status' => 1,
        ));
    }

    function go_next(){

        $player_e = superpower_unlocked(null, 0, $this->player_e);
        if(!$player_e){
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));
        } elseif (!isset($_POST['target_i__hashtag']) || !isset($_POST['target_i__id']) || !isset($_POST['focus_i_data']) || !isset($_POST['do_skip'])) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing Core Data',
            ));
        }

        if(!isset($_POST['selection_i__id'])){
            $_POST['selection_i__id'] = array();
        }
        if(!isset($_POST['focus_i_data']['i__text'])){
            $_POST['focus_i_data']['i__text'] = array();
        }
        if(!isset($_POST['focus_i_data']['uploaded_media'])){
            $_POST['focus_i_data']['uploaded_media'] = array();
        }
        if(!isset($_POST['next_i_data'])){
            $_POST['next_i_data'] = array();
        }


        //Discover Focus Idea:
        $primary_i__id = null;
        foreach($this->Idea_cache->fetch(array(
            'i__id' => $_POST['focus_i_data']['i__id'],
            'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
        )) as $focus_i){

            $input__selection = in_array($focus_i['i__type'], $this->config->item('n___7712'));
            $input__upload = in_array($focus_i['i__type'], $this->config->item('n___43004'));
            $input__text = in_array($focus_i['i__type'], $this->config->item('n___43002')) || in_array($focus_i['i__type'], $this->config->item('n___43003'));
            $total_selected = count($_POST['selection_i__id']);
            $trying_to_skip = ( intval($_POST['do_skip']) || ($input__selection && !$total_selected) || ($input__text && !$input__upload && !strlen($_POST['focus_i_data']['i__text'])) || (!$input__text && $input__upload && !count($_POST['focus_i_data']['uploaded_media'])) || ($input__text && $input__upload && !count($_POST['focus_i_data']['uploaded_media']) && !strlen($_POST['focus_i_data']['i__text'])));
            $i_required = i_required($focus_i);

            if(!$primary_i__id){
                $primary_i__id = ( $total_selected ? end($_POST['selection_i__id']) : $focus_i['i__id'] );
            }

            //If skipping, make sure they can:
            if($i_required && $trying_to_skip){
                return view__json(array(
                    'status' => 0,
                    'message' => ( $input__selection ? 'Make a selection to continue...' : 'Respond to continue...' ),
                ));
            }

            //Now complete relevant next ideas, if any:
            if($input__selection){

                $is_single_selection = in_array($focus_i['i__type'], $this->config->item('n___33331'));

                //How about the min selection?
                if($i_required && !$is_single_selection){
                    foreach($this->Mench_ledger->fetch(array(
                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        'x__type IN (' . join(',', $this->config->item('n___42991')) . ')' => null, //Active Writes
                        'x__next' => $focus_i['i__id'],
                        'x__following' => 40834, //Min Selection
                    ), array(), 1) as $limit){
                        if(intval($limit['x__message']) > 0 && $total_selected < intval($limit['x__message'])){
                            return view__json(array(
                                'status' => 0,
                                'message' => 'Select '.$limit['x__message'].' or more ideas to go next.',
                            ));
                        }
                    }
                }


                //How about max selection?
                if(!$is_single_selection){
                    foreach($this->Mench_ledger->fetch(array(
                        'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        'x__type IN (' . join(',', $this->config->item('n___42991')) . ')' => null, //Active Writes
                        'x__next' => $focus_i['i__id'],
                        'x__following' => 40833, //Max Selection
                    ), array(), 1) as $limit){
                        if(intval($limit['x__message']) > 0 && $total_selected > intval($limit['x__message'])){
                            return view__json(array(
                                'status' => 0,
                                'message' => 'You cannot select more than '.$limit['x__message'].' items.',
                            ));
                        }
                    }
                }


                //Delete ALL previous answers that are not currently selected, if any:
                $already_answered = array();
                foreach($this->Mench_ledger->fetch(array(
                    'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
                    'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                    'x__type' => 7712, //Input Choice
                    'x__player' => $player_e['e__id'],
                    'x__previous' => $focus_i['i__id'],
                ), array('x__next')) as $x_selection){

                    if(in_array($x_selection['i__id'], $_POST['selection_i__id'])){
                        //Current selection is already in the database from before:
                        array_push($already_answered, $x_selection['i__id']);
                        continue; //Nothing we need to do here...
                    }

                    $this->Mench_ledger->update($x_selection['x__id'], array(
                        'x__privacy' => 6173, //Transaction Deleted
                    ), $player_e['e__id'], 12129 /* DISCOVERY ANSWER DELETED */);


                    //Remove discovery if we can:
                    if(!in_array($x_selection['i__type'], $this->config->item('n___42905'))){
                        foreach($this->Mench_ledger->fetch(array(
                            'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                            'x__type IN (' . join(',', $this->config->item('n___6255')) . ')' => null, //DISCOVERIES
                            'x__previous' => $x_selection['i__id'],
                            'x__player' => $player_e['e__id'],
                        ), array(), 0) as $x_discovery){
                            $this->Mench_ledger->update($x_discovery['x__id'], array(
                                'x__privacy' => 6173, //Transaction Deleted
                            ), $player_e['e__id'], 12129 /* DISCOVERY ANSWER DELETED */);
                        }
                    }
                }

                //Save New Answers if not already:
                foreach($_POST['selection_i__id'] as $answer_i__id){
                    if(!in_array($answer_i__id, $already_answered)){
                        $this->Mench_ledger->create(array(
                            'x__type' => 7712, //Input Choice
                            'x__player' => $player_e['e__id'],
                            'x__previous' => $focus_i['i__id'],
                            'x__next' => $answer_i__id,
                        ));
                    }
                }

            }

            //Issue DISCOVERY/IDEA COIN:
            $completion_status = $this->Mench_ledger->mark_complete(i__discovery_link($focus_i, $trying_to_skip), $player_e['e__id'], $_POST['target_i__id'], $focus_i, $_POST['focus_i_data'], array(
                'x__weight' => $_POST['focus_i_data']['i__quantity'],
            ));
            if(!$completion_status['status']){
                //We had an error with data within target_i__id:
                return view__json($completion_status);
            }



            //Look through ALL next ideas and see which ones we can complete, if any:
            foreach($_POST['next_i_data'] as $index => $next_i_data){

                if(!isset($next_i_data['i__id'])){
                    continue;
                }
                if(!isset($next_i_data['i__text'])){
                    $next_i_data['i__text'] = null;
                }
                if(!isset($next_i_data['uploaded_media'])){
                    $next_i_data['uploaded_media'] = array();
                }

                if($input__selection && !in_array($next_i_data['i__id'], $_POST['selection_i__id'])){
                    //Not selected, move on:
                    continue;
                }

                foreach($this->Idea_cache->fetch(array(
                    'i__id' => $next_i_data['i__id'],
                )) as $i_next){

                    //Can we auto-complete?
                    if(in_array($i_next['i__type'], $this->config->item('n___43039')) || (!strlen($next_i_data['i__text']) && !count($next_i_data['uploaded_media']) && count($this->Mench_ledger->fetch(array(
                                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                                'i__privacy IN (' . join(',', $this->config->item('n___42948')) . ')' => null, //Public Ideas
                                'i__type IN (' . join(',', $this->config->item('n___43050')) . ')' => null, //Input Required Ideas
                                'x__type IN (' . join(',', $this->config->item('n___42267')) . ')' => null, //IDEA LINKS
                                'x__previous' => $i_next['i__id'],
                            ), array('x__next'), 0, 0)))){
                        //Focus Discovery only, so must go to next level:
                        continue;
                    }

                    //Analyze input:
                    $input__text = in_array($i_next['i__type'], $this->config->item('n___43002')) || in_array($i_next['i__type'], $this->config->item('n___43003'));
                    $input__upload = in_array($i_next['i__type'], $this->config->item('n___43004'));
                    $trying_to_skip = (($input__text && !$input__upload && !strlen($next_i_data['i__text'])) || (!$input__text && $input__upload && !count($next_i_data['uploaded_media'])) || ($input__text && $input__upload && !count($next_i_data['uploaded_media']) && !strlen($next_i_data['i__text'])));
                    $i_required = i_required($i_next);

                    if(!($i_required && $trying_to_skip)){
                        //Try to complete:
                        $completion_status = $this->Mench_ledger->mark_complete(i__discovery_link($i_next, $trying_to_skip), $player_e['e__id'], $_POST['target_i__id'], $i_next, $next_i_data, array(
                            'x__weight' => $next_i_data['i__quantity'],
                        ));
                        if($i_required && !$completion_status['status']){
                            //We had an error with data within target_i__id:
                            return view__json($completion_status);
                        }
                    }
                }
            }

            //Find Next:
            $i_redirect_url = false;
            foreach($this->Idea_cache->fetch(array(
                'i__id' => $primary_i__id,
            )) as $primary_i){
                $i_redirect_url = i_redirect_url($primary_i);
            }
            if(!$i_redirect_url){
                $find_next = $this->Mench_ledger->find_next($player_e['e__id'], $_POST['target_i__hashtag'], $focus_i);
            }

            //All good:
            return view__json(array(
                'status' => 1,
                'message' => 'Saved & Next',
                'next__url' => ( $i_redirect_url ? $i_redirect_url : ( $find_next ? $find_next : 'start' ) ),
            ));

        }

        //All good:
        return view__json(array(
            'status' => 0,
            'message' => 'Invalid Idea',
        ));

    }

    function x_update_instant_select(){

        if(!isset($_POST['focus__id']) || !isset($_POST['o__id']) || !isset($_POST['element_id']) || !isset($_POST['new_e__id']) || !isset($_POST['migrate_s__handle']) || !isset($_POST['x__id'])){
            return view__json(array(
                'status' => 0,
                'message' => 'Missing core data',
            ));
        }

        //Validate migration handles if any:
        $_POST['migrate_s__handle'] = trim($_POST['migrate_s__handle']);
        $first_letter = substr($_POST['migrate_s__handle'], 0, 1);
        if($first_letter=='@' && strlen($_POST['migrate_s__handle'])>1){
            if (!count($this->Source_cache->fetch(array(
                'LOWER(e__handle)' => strtolower(substr($_POST['migrate_s__handle'], 1)),
            )))) {
                return view__json(array(
                    'status' => 0,
                    'message' => $_POST['migrate_s__handle'].' is an invalid Source Handle. Try again if you want to migrate this source links or leave the field blank.',
                ));
            }
        } elseif($first_letter=='#' && strlen($_POST['migrate_s__handle'])>1){
            if(!count($this->Idea_cache->fetch(array(
                'LOWER(i__hashtag)' => strtolower(substr($_POST['migrate_s__handle'], 1)),
            )))){
                return view__json(array(
                    'status' => 0,
                    'message' => $_POST['migrate_s__handle'].' is an invalid Idea Hashtag. Try again if you want to migrate this idea links or leave the field blank.',
                ));
            }
        } else {
            $_POST['migrate_s__handle'] = '';
        }

        if(is_array($_POST['o__id'])){
            $mass_result = array();
            foreach($_POST['o__id'] as $o__id){
                array_push($mass_result, $this->Mench_ledger->x_update_instant_select($_POST['focus__id'],$o__id,$_POST['element_id'],$_POST['new_e__id'],$_POST['migrate_s__handle'],$_POST['x__id']));
            }
            return view__json($mass_result);
        } else {
            return view__json($this->Mench_ledger->x_update_instant_select($_POST['focus__id'],$_POST['o__id'],$_POST['element_id'],$_POST['new_e__id'],$_POST['migrate_s__handle'],$_POST['x__id']));
        }

    }

    function x_link_toggle(){

        //Authenticate Member:
        $player_e = superpower_unlocked(null, 0, $this->player_e);
        if (!$player_e) {

            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));

        } elseif (!isset($_POST['i__id'])) {

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Idea ID',
            ));

        } elseif (!isset($_POST['x__type'])) {

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Type',
            ));

        } elseif (!isset($_POST['target_i__id'])) {

            return view__json(array(
                'status' => 0,
                'message' => 'Missing Top Idea ID',
            ));

        }

        $is = $this->Idea_cache->fetch(array(
            'i__id' => $_POST['i__id'],
            'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
        ));
        if (!count($is)) {
            return view__json(array(
                'status' => 0,
                'message' => 'Invalid Idea ID',
            ));
        }

        //Save IDEA:
        $x = $this->Mench_ledger->create(array(
            'x__player' => $player_e['e__id'],
            'x__following' => $player_e['e__id'],
            'x__previous' => $_POST['target_i__id'],
            'x__next' => $_POST['i__id'],
            'x__type' => $_POST['x__type'],
        ));

        //All Good:
        return view__json(array(
            'status' => 1,
            'x__id' => $x['x__id'],
        ));

    }

    function x_remove(){

        /*
         *
         * When members indicate they want to stop
         * a IDEA this function saves the changes
         * necessary and delete the idea from their
         * discoveries.
         *
         * */

        $player_e = superpower_unlocked(null, 0, $this->player_e);

        if (!$player_e) {
            return view__json(array(
                'status' => 0,
                'message' => view__unauthorized_message(),
            ));
        } elseif (!isset($_POST['x__id']) || intval($_POST['x__id']) < 1) {
            return view__json(array(
                'status' => 0,
                'message' => 'Missing Link ID',
            ));
        }

        //Remove Idea
        $this->Mench_ledger->update($_POST['x__id'], array(
            'x__privacy' => 6173, //DELETED
        ), $player_e['e__id'], 10673);

        return view__json(array(
            'status' => 1,
        ));
    }

    function x_4341(){

        /*
         * Loads the list of transactions based on the
         * filters passed on.
         *
         * */

        $query_filters = unserialize($_POST['x_filters']);
        $joined_by = unserialize($_POST['x_joined_by']);
        $page_num = ( isset($_POST['page_num']) && intval($_POST['page_num'])>=2 ? intval($_POST['page_num']) : 1 );
        $next_page = ($page_num+1);
        $query_offset = (($page_num-1)*view__memory(6404,11064));
        $player_e = superpower_unlocked(null, 0, $this->player_e);

        $message = '';

        //Fetch transactions and total transaction counts:
        $x = $this->Mench_ledger->fetch($query_filters, $joined_by, view__memory(6404,11064), $query_offset);
        $x_count = $this->Mench_ledger->fetch($query_filters, $joined_by, 0, 0, array(), 'COUNT(x__id) as total_count');
        $total_items_loaded = ($query_offset+count($x));
        $has_more_x = ($x_count[0]['total_count'] > 0 && $total_items_loaded < $x_count[0]['total_count']);


        //Display filter:
        if($total_items_loaded > 0){

            //Subsequent messages:
            $message .= '<div class="main__title x-info grey">'.( $x_count[0]['total_count']>$total_items_loaded ? ( $has_more_x && $query_offset==0  ? 'FIRST ' : ($query_offset+1).' - ' ) . ( $total_items_loaded >= ($query_offset+1) ?  $total_items_loaded . ' OF ' : '' ) : '') . number_format($x_count[0]['total_count'] , 0) .' TRANSACTIONS:</div>';

        }


        if(count($x)>0){

            $message .= '<div class="list-group list-grey">';
            foreach($x as $x) {

                $message .= view__card_x($x);

                if($player_e && strlen($x['x__message'])>0 && strlen($_POST['x__message_find'])>0 && strlen($_POST['x__message_replace'])>0 && substr_count($x['x__message'], $_POST['x__message_find'])>0){

                    $new_content = str_replace($_POST['x__message_find'],trim($_POST['x__message_replace']),$x['x__message']);

                    $this->Mench_ledger->update($x['x__id'], array(
                        'x__message' => $new_content,
                    ), $player_e['e__id'], 12360, update_description($x['x__message'], $new_content));

                    $message .= '<div class="alert alert-info" role="alert"><i class="far fa-check-circle"></i> Replaced ['.$_POST['x__message_find'].'] with ['.trim($_POST['x__message_replace']).']</div>';

                }

            }
            $message .= '</div>';

            //Do we have more to show?
            if($has_more_x){
                $message .= '<div id="x_page_'.$next_page.'"><a href="javascript:void(0);" style="margin:10px 0 72px 0;" class="btn" onclick="x_4341(x_filters, x_joined_by, '.$next_page.');"><span class="icon-block"><i class="far fa-search-plus"></i></span>Page '.$next_page.'</a></div>';
                $message .= '';
            } else {
                $message .= '<div style="margin:10px 0 72px 0;"><span class="icon-block"><i class="far fa-check-circle"></i></span>All '.$x_count[0]['total_count'].' transactions have been loaded</div>';

            }

        } else {

            //Show no transaction warning:
            $message .= '<div class="alert alert-warning" role="alert"><span class="icon-block"><i class="far fa-exclamation-circle"></i></span>No Transactions found with the selected filters. Modify filters and try again.</div>';

        }


        return view__json(array(
            'status' => 1,
            'message' => $message,
        ));


    }

    function x__refresh_gameplay(){

        $miscstats = '';

        //See if we have any idea or source targets to limit our stats:
        $has_handle = isset($_POST['e__handle']) && strlen($_POST['e__handle']) && $_POST['e__handle'];
        $has_hashtag = isset($_POST['i__hashtag']) && strlen($_POST['i__hashtag']) && $_POST['i__hashtag'];

        if($has_handle){

            //See stats for this source:
            $es = $this->Source_cache->fetch(array(
                'LOWER(e__handle)' => strtolower($_POST['e__handle']),
            ));
            if(!count($es)){
                return view__json(array(
                    'status' => 0,
                    'message' => 'Invalid Handle',
                ));
            }

        } elseif($has_hashtag){

            //See stats for this idea:
            $is = $this->Idea_cache->fetch(array(
                'LOWER(i__hashtag)' => strtolower($_POST['i__hashtag']),
            ));
            if(!count($is)){
                return view__json(array(
                    'status' => 0,
                    'message' => 'Invalid Hashtag',
                ));
            }

            $recursive_down_ids = $this->Idea_cache->recursive_down_ids($is[0], 'ALL');

            //List stats:
            $miscstats .= '<div>Tree Ideas: '.number_format(count($recursive_down_ids['recursive_i_ids']), 0).'</div>';

        }


        //Count transactions:
        $return_array = array();
        foreach($this->config->item('e___33292') as $x__type1 => $m1) { //Gameplay
            $level1_total = 0;
            foreach($this->config->item('e___'.$x__type1) as $x__type2 => $m2) { //Nodes/Links

                $e_pinned = e_pinned($x__type2, true);
                $level2_total = 0;
                if(!is_array($this->config->item('e___'.$e_pinned)) || !count($this->config->item('e___'.$e_pinned)) ){
                    continue;
                }
                foreach($this->config->item('e___'.$e_pinned) as $x__type3 => $m3) { //Source/Idea/Discovery

                    if($x__type2==12273){

                        if($has_handle){

                            $sub_counter = $this->Mench_ledger->fetch(array(
                                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                                'x__type IN (' . join(',', $this->config->item('n___33602')) . ')' => null, //Idea/Source Links Active
                                'x__following' => $es[0]['e__id'],
                                'i__type' => $x__type3,
                                'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
                            ), array('x__next'), 0, 0, array(), 'COUNT(x__id) as totals');

                        } elseif($has_hashtag && count($recursive_down_ids['recursive_i_ids'])){

                            //See stats for this idea:
                            $sub_counter = $this->Idea_cache->fetch(array(
                                'i__type' => $x__type3,
                                'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
                                'i__id IN (' . join(',', $recursive_down_ids['recursive_i_ids']) . ')' => null,
                            ), 0, 0, array(), 'COUNT(i__id) as totals');

                        } else {

                            $sub_counter = $this->Idea_cache->fetch(array(
                                'i__type' => $x__type3,
                                'i__privacy IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
                            ), 0, 0, array(), 'COUNT(i__id) as totals');

                        }

                    } elseif($x__type2==12274){

                        if($has_handle){

                            $sub_counter = $this->Mench_ledger->fetch(array(
                                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                                'x__following' => $es[0]['e__id'],
                                'e__privacy' => $x__type3,
                            ), array('x__follower'), 0, 0, array(), 'COUNT(x__id) as totals');

                        } elseif($has_hashtag && count($recursive_down_ids['recursive_i_ids'])){

                            //See stats for this idea:
                            $sub_counter = $this->Mench_ledger->fetch(array(
                                'x__privacy IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                                'x__type IN (' . join(',', $this->config->item('n___33602')) . ')' => null, //Idea/Source Links Active
                                'x__next IN (' . join(',', $recursive_down_ids['recursive_i_ids']) . ')' => null,
                                'e__privacy' => $x__type3,
                            ), array('x__following'), 0, 0, array(), 'COUNT(x__id) as totals');

                        } else {

                            $sub_counter = $this->Source_cache->fetch(array(
                                'e__privacy' => $x__type3,
                            ), 0, 0, array(), 'COUNT(e__id) as totals');

                        }

                    } else {

                        if($has_handle){

                            $sub_counter = $this->Mench_ledger->fetch(array(
                                'x__type' => $x__type3,
                                '( x__follower = ' . $es[0]['e__id'] . ' OR x__following = ' . $es[0]['e__id'] . ' OR x__player = ' . $es[0]['e__id'] . ' )' => null,
                                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                            ), array(), 0, 0, array(), 'COUNT(x__id) as totals');

                        } elseif($has_hashtag && count($recursive_down_ids['recursive_i_ids'])){

                            $sub_counter = $this->Mench_ledger->fetch(array(
                                'x__type' => $x__type3,
                                '( x__previous IN (' . join(',', $recursive_down_ids['recursive_i_ids']) . ') OR x__next IN (' . join(',', $recursive_down_ids['recursive_i_ids']) . '))' => null,
                                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                            ), array(), 0, 0, array(), 'COUNT(x__id) as totals');

                        } else {

                            $sub_counter = $this->Mench_ledger->fetch(array(
                                'x__type' => $x__type3,
                                'x__privacy IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                            ), array(), 0, 0, array(), 'COUNT(x__id) as totals');

                        }

                    }

                    $level2_total += $sub_counter[0]['totals'];
                    $return_array[$x__type3] = intval($sub_counter[0]['totals']);

                }

                $level1_total += $level2_total;
                $return_array[$x__type2] = intval($level2_total);

            }

            $return_array[$x__type1] = intval($level1_total);

        }
        return view__json(array(
            'status' => 1,
            'return_array' => $return_array,
            'miscstats' => $miscstats,
        ));
    }

}