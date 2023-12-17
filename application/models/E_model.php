<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class E_model extends CI_Model
{

    /*
     *
     * Member related database functions
     *
     * */

    function __construct()
    {
        parent::__construct();
    }




    function activate_subscription($e__id, $x__website = 0){


        //Remove from Anonymous:
        foreach($this->X_model->fetch(array(
            'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__up IN (' . join(',', $this->config->item('n___32540')) . ')' => null, //Unsubscribers
            'x__down' => $e__id,
        )) as $unsubscriber_x){
            $this->X_model->update($unsubscriber_x['x__id'], array(
                'x__access' => 6173,
            ), $e__id, 10673 /* IDEA NOTES Unpublished */);
        }
        //Remove is_anonymous session:
        $session_data = $this->session->all_userdata();
        $session_data['is_anonymous'] = 0;
        $this->session->set_userdata($session_data);


        //Add to Subscriber:
        $this->X_model->create(array(
            'x__up' => 4430, //Subscriber
            'x__type' => 4230,
            'x__creator' => $e__id,
            'x__down' => $e__id,
            'x__website' => $x__website,
        ));



    }


    function activate_session($e, $update_session = false, $is_cookie = false){

        //PROFILE
        $session_data = array(
            'session_up' => $e,
            'session_up_ids' => array(),
            'session_superpowers_unlocked' => array(),
        );

        //Make sure they also belong to this website's members:
        $this->E_model->regular_add_e(website_setting(0), $e['e__id']);


        //Check & Adjust their subscription, IF needed:
        //Remove their subscribe:
        $resubscribed = 0;
        foreach($this->X_model->fetch(array(
            'x__up IN (' . join(',', $this->config->item('n___29648')) . ')' => null, //Unsubscribers
            'x__down' => $e['e__id'],
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
        )) as $unsubscribe){
            $resubscribed += $this->X_model->update($unsubscribe['x__id'], array(
                'x__access' => 6173, //Transaction Removed
            ), $e['e__id'], 31064 /* Login Resubscribe */);
        }
        if($resubscribed > 0){
            //Add Back to Subscribers:
            $this->X_model->create(array(
                'x__type' => 4230,
                'x__up' => 4430, //Active Member
                'x__creator' => $e['e__id'],
                'x__down' => $e['e__id'],
            ));
        }



        if(!$update_session){

            if(!$is_cookie){

                //Create Cookie:
                $cookie_time = time();
                $cookie_val = $e['e__id'].'ABCEFG'.$cookie_time.'ABCEFG'.view_e__hash($e['e__id'].$cookie_time);
                setcookie('auth_cookie', $cookie_val, ($cookie_time + ( 86400 * view_memory(6404,14031))), "/");

            }

            //Append stats variables:
            $session_data['session_page_count'] = 0;

            $this->X_model->create(array(
                'x__creator' => $e['e__id'],
                'x__type' => ( $is_cookie ? 14032 /* COOKIE SIGN */ : 7564 /* MEMBER SIGN */ ),
            ));

        }




        //Fetch Platform Defaults:
        $platform_theme = array();
        foreach($this->X_model->fetch(array(
            'x__up IN (' . join(',', $this->config->item('n___14926')) . ')' => null, //Website Theme Items
            'x__down' => 6404, //Platform Default
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
        ), array(), 0) as $x) {
            array_push($platform_theme, intval($x['x__up']));
        }

        //Fetch Website Defaults:
        $website_theme = array();
        foreach($this->X_model->fetch(array(
            'x__up IN (' . join(',', $this->config->item('n___14926')) . ')' => null, //Website Theme Items
            'x__down' => website_setting(0), //Website ID
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
        ), array(), 0) as $x) {
            array_push($website_theme, intval($x['x__up']));
        }


        //Fetch User Defaults:
        $user_theme = array();
        foreach($this->X_model->fetch(array(
            'x__down' => $e['e__id'], //This follower source
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            'e__access IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
        ), array('x__up'), 0) as $e_up){

            //Push to followings IDs:
            array_push($session_data['session_up_ids'], intval($e_up['e__id']));

            //Website Theme Items?
            if(in_array($e_up['e__id'], $this->config->item('n___14926'))){
                array_push($user_theme, intval($e_up['e__id']));
            }

            //Superpower?
            if(in_array($e_up['e__id'], $this->config->item('n___10957'))){

                //It's unlocked!
                array_push($session_data['session_superpowers_unlocked'], intval($e_up['e__id']));
            }
        }


        //Determine Defaults if missing any of the CUSTOM UI
        foreach($this->config->item('e___13890') as $e__id => $m){

            //Set Default:
            $session_data['session_custom_ui_'.$e__id] = 0;

            //First try to find User Theme, if any:
            if(!$session_data['session_custom_ui_'.$e__id]){
                foreach($this->config->item('e___'.$e__id) as $e__id2 => $m2){
                    if(in_array($e__id2, $user_theme )){
                        $session_data['session_custom_ui_'.$e__id] = $e__id2;
                        break;
                    }
                }
            }

            //Then try to find Website Theme, if any:
            if(!$session_data['session_custom_ui_'.$e__id]){
                foreach($this->config->item('e___'.$e__id) as $e__id2 => $m2){
                    if(in_array($e__id2, $website_theme )){
                        $session_data['session_custom_ui_'.$e__id] = $e__id2;
                        break;
                    }
                }
            }


            //Finally try Platform Theme:
            if(!$session_data['session_custom_ui_'.$e__id]){
                //First try to find Website Default, if any:
                foreach($this->config->item('e___'.$e__id) as $e__id2 => $m2){
                    if(in_array($e__id2, $platform_theme )){
                        $session_data['session_custom_ui_'.$e__id] = $e__id2;
                        break;
                    }
                }
            }
        }


        //SESSION
        $this->session->set_userdata($session_data);


        //Resubscribe IF they are Permanently Unsubscribed:
        /*
        $unsubscribed_time = null;
        foreach($this->X_model->fetch(array(
            'x__up IN (' . join(',', $this->config->item('n___31057')) . ')' => null, //Permanently Unsubscribed
            'x__down' => $e['e__id'], //This follower source
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
        ), array(), 0) as $unsubscribed){
            $unsubscribed_time = $unsubscribed['x__time'];
            $this->X_model->update($unsubscribed['x__id'], array(
                'x__access' => 6173,
            ), $e['e__id'], 31064); //Resubscribe
        }
        if($unsubscribed_time){
            //Add to subscribed again:
            $this->X_model->create(array(
                'x__type' => 4230,
                'x__up' => 4430, //Active Member
                'x__creator' => $e['e__id'],
                'x__down' => $e['e__id'],
            ));
            $this->session->set_flashdata('flash_message', '<div class="alert alert-info" role="alert"><span class="icon-block"><i class="fas fa-user-check"></i></span>Welcome Back! You Have Been Re-Subscribed :)</div>');
        }
        */

        return $e;

    }


    function regular_add_e($x__up, $x__down, $x__message = null) {
        //Add if link not already there:
        if(!count($this->X_model->fetch(array(
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__up' => $x__up,
            'x__down' => $x__down,
            'x__message' => $x__message,
        )))){
            $this->X_model->create(array(
                'x__creator' => $x__down, //Belongs to this Member
                'x__type' => 4230,
                'x__message' => $x__message,
                'x__up' => $x__up,
                'x__down' => $x__down,
            ));
        }
    }

    function scissor_e($x__up, $sub_id){

        $all_results = $this->X_model->fetch(array(
            'x__up' => $x__up,
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            'e__access IN (' . join(',', $this->config->item('n___7357')) . ')' => null, //PUBLIC/OWNER
        ), array('x__down'), 0, 0, array('x__weight' => 'ASC', 'e__title' => 'ASC'));

        //Remove if not in the secondary group:
        foreach($all_results as $key => $primary_list){
            if(!count($this->X_model->fetch(array(
                'x__up' => $sub_id,
                'x__down' => $primary_list['e__id'],
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC/OWNER
            ), array(), 0))){
                unset($all_results[$key]);
            }
        }

        //Return matching results:
        return $all_results;

    }

    function scissor_i($x__up, $sub_id){

        $all_results = $this->X_model->fetch(array(
            'x__up' => $x__up,
            'x__type IN (' . join(',', $this->config->item('n___33602')) . ')' => null, //Idea/Source Links Active
            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            'i__access IN (' . join(',', $this->config->item('n___31871')) . ')' => null, //ACTIVE
        ), array('x__right'), 0, 0, array('x__weight' => 'ASC'));

        //Remove if not in the secondary group:
        foreach($all_results as $key => $primary_list){
            if(!count($this->X_model->fetch(array(
                'x__up' => $sub_id,
                'x__right' => $primary_list['i__id'],
                'x__type IN (' . join(',', $this->config->item('n___33602')) . ')' => null, //Idea/Source Links Active
                'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
            )))){
                unset($all_results[$key]);
            }
        }

        //Return matching results:
        return $all_results;

    }



    function add_member($full_name, $email = null, $phone_number = null, $image_url = null, $x__website = 0, $importing_full_names = false){

        //Set website if not set:
        if(!$x__website){
            $x__website = website_setting(0);
        }

        //All good, create new source:
        $added_e = $this->E_model->verify_create($full_name, 0, ( $image_url ? $image_url : random_cover(12279) ));
        if(!$added_e['status']){
            //We had an error, return it:
            return $added_e;
        } elseif($email && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            return array(
                'status' => 0,
                'message' => 'Invalid Email',
            );
        } elseif($phone_number && (!intval($phone_number) || strlen($phone_number)<7)){
            return array(
                'status' => 0,
                'message' => 'Invalid Phone',
            );
        }

        //Add email?
        if($email){
            $this->X_model->create(array(
                'x__type' => 4230,
                'x__message' => trim(strtolower($email)),
                'x__up' => 3288, //Email
                'x__creator' => $added_e['new_e']['e__id'],
                'x__down' => $added_e['new_e']['e__id'],
                'x__website' => $x__website,
            ));
        }

        //Add Number?
        if($phone_number){
            $this->X_model->create(array(
                'x__up' => 4783, //Phone
                'x__type' => 4230,
                'x__message' => $phone_number,
                'x__creator' => $added_e['new_e']['e__id'],
                'x__down' => $added_e['new_e']['e__id'],
                'x__website' => $x__website,
            ));
        }

        if($email || $phone_number){

            $this->E_model->activate_subscription( $added_e['new_e']['e__id'], $x__website );

        } else {

            //Add to anonymous:
            $this->X_model->create(array(
                'x__up' => 14938, //Anonymous Login
                'x__type' => 4230,
                'x__creator' => $added_e['new_e']['e__id'],
                'x__down' => $added_e['new_e']['e__id'],
                'x__website' => $x__website,
            ));

            //Assign session key:
            $session_data = $this->session->all_userdata();
            $session_data['is_anonymous'] = 1;
            $this->session->set_userdata($session_data);

        }


        //Add member to Domain Member Group(s):
        $this->E_model->regular_add_e($x__website, $added_e['new_e']['e__id']);


        if($importing_full_names){

            //Also create legal name link:
            $this->X_model->create(array(
                'x__up' => 30198, //Full Name
                'x__type' => 4230,
                'x__message' => $full_name,
                'x__creator' => $added_e['new_e']['e__id'],
                'x__down' => $added_e['new_e']['e__id'],
                'x__website' => $x__website,
            ));

        } else {

            //Send Welcome Email if any:
            if($phone_number || $email){
                $e___14929 = $this->config->item('e___14929'); //Welcome Email Templates
                if(isset($e___14929[$x__website]['m__message']) && strlen($e___14929[$x__website]['m__message'])){
                    $this->X_model->send_dm($added_e['new_e']['e__id'], 'Welcome to '.$e___14929[$x__website]['m__title'], $e___14929[$x__website]['m__message']);
                }
            }

            //Update Algolia:
            update_algolia(12274,  $added_e['new_e']['e__id']);

            //Assign session & log login transaction:
            $this->E_model->activate_session($added_e['new_e']);

        }

        //Return Member:
        return array(
            'status' => 1,
            'e' => $added_e['new_e'],
        );

    }


    function create($add_fields, $x__creator = 14068)
    {

        //What is required to create a new Idea?
        if (detect_missing_columns($add_fields, array('e__title'), $x__creator)) {
            return false;
        }

        if (!isset($add_fields['e__access']) || intval($add_fields['e__access']) < 1) {
            $add_fields['e__access'] = 6181; //PUBLIC SOURCE
        }

        //Generate Handle:
        $add_fields['e__handle'] = generate_handle(12274, $add_fields['e__title']);

        //Lets now add:
        $this->db->insert('table__e', $add_fields);

        //Fetch inserted id:
        if (!isset($add_fields['e__id'])) {
            $add_fields['e__id'] = $this->db->insert_id();
        }

        if ($add_fields['e__id'] > 0) {

            //Generate new references:

            //Log transaction new source:
            $this->X_model->create(array(
                'x__creator' => ($x__creator > 0 ? $x__creator : $add_fields['e__id']),
                'x__down' => $add_fields['e__id'],
                'x__type' => 4251, //New Source Created
                'x__message' => $add_fields['e__title'],
            ));

            //Log transaction new Idea hashtag:
            $this->X_model->create(array(
                'x__creator' => $x__creator,
                'x__right' => $add_fields['i__id'],
                'x__message' => $add_fields['i__hashtag'],
                'x__type' => 42169, //Source Generated Handle
            ));

            //Fetch to return the complete source data:
            $es = $this->E_model->fetch(array(
                'e__id' => $add_fields['e__id'],
            ));

            if($external_sync){
                //Update Algolia:
                update_algolia(12274, $add_fields['e__id']);
            }

            return $es[0];

        } else {

            //Ooopsi, something went wrong!
            $this->X_model->create(array(
                'x__up' => $x__creator,
                'x__message' => 'create() failed to create a new source',
                'x__type' => 4246, //Platform Bug Reports
                'x__creator' => $x__creator,
                'x__metadata' => $add_fields,
            ));
            return false;

        }
    }

    function fetch($query_filters = array(), $limit = 0, $limit_offset = 0, $order_columns = array('e__title' => 'ASC'), $select = '*', $group_by = null)
    {

        //Fetch the target sources:
        $this->db->select($select);
        $this->db->from('table__e');
        foreach($query_filters as $key => $value) {
            if (!is_null($value)) {
                $this->db->where($key, $value);
            } else {
                $this->db->where($key);
            }
        }
        if ($group_by) {
            $this->db->group_by($group_by);
        }
        foreach($order_columns as $key => $value) {
            $this->db->order_by($key, $value);
        }
        if ($limit > 0) {
            $this->db->limit($limit, $limit_offset);
        }

        $q = $this->db->get();
        return $q->result_array();
    }

    function fetch_recursive($direction, $e__id, $include_any_e = array(), $exclude_all_e= array(), $hard_level = 3, $hard_limit = 100, $s__level = 0){

        if(!in_array($direction, $this->config->item('n___11028'))){
            //Invalid direction:
            return false;
        }

        $flat_items = array();
        $s__level++;

        if($direction==12274){
            //Downwards:
            $order_columns = array('x__weight' => 'ASC', 'e__title' => 'ASC');
            $join_objects = array('x__down');
            $query_filters = array(
                'x__up' => $e__id,
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            );
        } elseif($direction==11030){
            //Upwards:
            $order_columns = array('x__weight' => 'ASC', 'e__title' => 'ASC');
            $join_objects = array('x__up');
            $query_filters = array(
                'x__down' => $e__id,
                'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            );
        }


        foreach($this->X_model->fetch($query_filters, $join_objects, 0, 0, $order_columns) as $e_down) {

            //Filter Sources, if needed:
            $qualified_e = true;
            if(count($include_any_e) && !count($this->X_model->fetch(array(
                    'x__up IN (' . join(',', $include_any_e) . ')' => null,
                    'x__down' => $e_down['e__id'],
                    'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                    'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                )))){
                //Must include all sources, skip:
                $qualified_e = false;
            }
            if(count($exclude_all_e) && count($this->X_model->fetch(array(
                    'x__up IN (' . join(',', $exclude_all_e) . ')' => null,
                    'x__down' => $e_down['e__id'],
                    'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                    'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                )))){
                //Must exclude all sources, skip:
                $qualified_e = false;
            }


            //Is this a new matching source?
            if($qualified_e && !isset($flat_items[$e_down['e__id']])){
                $e_down['s__level'] = $s__level;
                $e_down['s__count'] = count($flat_items)+1;
                $flat_items[$e_down['e__id']] = $e_down;
            }

            //Do we have more followers?
            if($s__level>=$hard_level || count($flat_items)>=$hard_limit){
                break;
            }

            foreach($this->E_model->fetch_recursive($direction, $e_down['e__id'], $include_any_e, $exclude_all_e, $hard_level, $hard_limit, $s__level) as $e_recursive_down){
                if(!isset($flat_items[$e_recursive_down['e__id']])){
                    $e_recursive_down['s__count'] = count($flat_items)+1;
                    $flat_items[$e_recursive_down['e__id']] = $e_recursive_down;
                }
            }
        }

        return $flat_items;
    }

    function update($id, $update_columns, $external_sync = false, $x__creator = 0, $x__type = 0)
    {

        $id = intval($id);
        if (count($update_columns)==0) {
            return false;
        }

        //Fetch current source filed values so we can compare later on after we've updated it:
        if($x__creator > 0){
            $before_data = $this->E_model->fetch(array('e__id' => $id));
        }

        //Update:
        $this->db->where('e__id', $id);
        $this->db->update('table__e', $update_columns);
        $affected_rows = $this->db->affected_rows();

        //Do we need to do any additional work?
        if ($affected_rows > 0 && $x__creator > 0) {

            if($external_sync){
                //Sync algolia:
                update_algolia(12274, $id);
            }

            //Log modification transaction for every field changed:
            foreach($update_columns as $key => $value) {

                if ($before_data[0][$key]==$value){
                    //Nothing changed:
                    continue;
                }

                //FYI: Unlike Ideas, we cannot log following/follower source relations since the follower source slot is previously taken...

                if($x__type){

                    $x__message = update_description($before_data[0][$key], $value);

                } elseif($key=='e__handle') {

                    $x__type = 41983; //Source Handle Update
                    $x__message = update_description($before_data[0][$key], $value);

                } elseif($key=='e__title') {

                    $x__type = 10646; //Source Title Update
                    $x__message = update_description($before_data[0][$key], $value);

                } elseif($key=='e__access') {

                    if(in_array($value, $this->config->item('n___7358') /* ACTIVE */)){
                        $x__type = 10654; //Source Status Updated
                    } else {
                        $x__type = 6178; //Source Deleted
                    }
                    $e___6177 = $this->config->item('e___6177'); //Source Status
                    $x__message = view_db_field($key) . ' updated from [' . $e___6177[$before_data[0][$key]]['m__title'] . '] to [' . $e___6177[$value]['m__title'] . ']';

                } elseif($key=='e__cover') {

                    $x__type = 10653; //Member Updated Icon
                    $x__message = view_db_field($key) . ' updated from [' . $before_data[0][$key] . '] to [' . $value . ']';

                } else {

                    //Should not log updates since not specifically programmed:
                    continue;

                }

                //Value has changed, log transaction:
                $this->X_model->create(array(
                    'x__creator' => ($x__creator > 0 ? $x__creator : $id),
                    'x__type' => $x__type,
                    'x__down' => $id,
                    'x__message' => $x__message,
                    'x__metadata' => array(
                        'e__id' => $id,
                        'field' => $key,
                        'before' => $before_data[0][$key],
                        'after' => $value,
                    ),
                ));

            }

        } elseif($affected_rows < 1){

            //This should not happen:
            $this->X_model->create(array(
                'x__down' => $id,
                'x__type' => 4246, //Platform Bug Reports
                'x__creator' => $x__creator,
                'x__message' => 'update() Failed to update',
                'x__metadata' => array(
                    'input' => $update_columns,
                ),
            ));

        }

        return $affected_rows;
    }


    function radio_set($e_up_bucket_id, $set_e_down_id, $x__creator)
    {

        /*
         * Treats an source follower group as a drop down menu where:
         *
         *  $e_up_bucket_id is the followings of the drop down
         *  $x__creator is the member source ID that one of the followers of $e_up_bucket_id should be assigned (like a drop down)
         *  $set_e_down_id is the new value to be assigned, which could also be null (meaning just delete all current values)
         *
         * This function is helpful to manage things like Member communication levels
         *
         * */


        //Fetch all the follower sources for $e_up_bucket_id and make sure they match $set_e_down_id
        $followers = $this->config->item('n___' . $e_up_bucket_id);
        if ($e_up_bucket_id < 1) {
            return false;
        } elseif (!$followers) {
            return false;
        } elseif ($set_e_down_id > 0 && !in_array($set_e_down_id, $followers)) {
            return false;
        }

        //First delete existing following/follower transactions for this drop down:
        $previously_assigned = ($set_e_down_id < 1);
        $updated_x__id = 0;
        foreach($this->X_model->fetch(array(
            'x__down' => $x__creator,
            'x__up IN (' . join(',', $followers) . ')' => null, //Current followers
            'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
        ), array(), view_memory(6404,11064)) as $x) {

            if (!$previously_assigned && $x['x__up']==$set_e_down_id) {
                $previously_assigned = true;
            } else {
                //Delete assignment:
                $updated_x__id = $x['x__id'];

                //Do not log update transaction here as we would log it further below:
                $this->X_model->update($x['x__id'], array(
                    'x__access' => 6173, //Transaction Deleted
                ), $x__creator, 6224 /* Member Account Updated */);
            }

        }


        //Make sure $set_e_down_id belongs to followings if set (Could be null which means delete all)
        if (!$previously_assigned) {
            //Let's go ahead and add desired source as parent:
            $this->X_model->create(array(
                'x__creator' => $x__creator,
                'x__down' => $x__creator,
                'x__up' => $set_e_down_id,
                'x__type' => 4230,
                'x__reference' => $updated_x__id,
            ));
        }

    }

    function remove_duplicate_links($e__id){

        //A function that scans source followings links and removes duplicates

        $current_up = array();
        $duplicates_removed = 0;

        //Check followings to see if there are duplicates:
        foreach($this->X_model->fetch(array(
            'x__down' => $e__id,
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            'e__access IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
        ), array('x__up'), 0, 0, array('x__up' => 'ASC', 'x__id' => 'ASC')) as $x) {

            //Does this match any in the list so far?
            $duplicate_found = false;
            foreach($current_up as $up){
                if($up['x__up']==$x['x__up'] && $up['x__type']==$x['x__type'] && $up['x__access']==$x['x__access'] && $up['x__message']==$x['x__message']){
                    $duplicate_found = true;
                    break;
                }
            }

            if($duplicate_found){
                //Remove it:
                $duplicates_removed++;
                $this->X_model->update($x['x__id'], array(
                    'x__access' => 6173,
                ), $x['x__creator'], 29331); //Duplicate Link Removed
            } else {
                //Add it to main list:
                array_push($current_up, array(
                    'x__up' => $x['x__up'],
                    'x__type' => $x['x__type'],
                    'x__access' => $x['x__access'],
                    'x__message' => $x['x__message'],
                ));
            }

        }

        return $duplicates_removed;

    }


    function remove($e__id, $x__creator = 0, $migrate_s__id = 0){

        //Fetch all SOURCE LINKS:
        $x_adjusted = 0;

        if($migrate_s__id > 0){

            //Validate this migration ID:
            $es = $this->E_model->fetch(array(
                'e__id' => $migrate_s__id,
                'e__access IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
            ));

            if(count($es)){

                //Migrate Transactions:
                foreach($this->X_model->fetch(array( //Idea Transactions
                    '(x__up = '.$e__id.' OR x__down = '.$e__id.' OR x__creator = '.$e__id.')' => null,
                ), array(), 0) as $x){

                    //Make sure not duplicate, if so, delete:
                    $update_filter = array();
                    $filters = array(
                        'x__id !=' => $x['x__id'],
                        'x__access' => $x['x__access'],
                        'x__type' => $x['x__type'],
                        'x__reference' => $x['x__reference'],
                        //'LOWER(x__message)' => strtolower($x['x__message']),

                        'x__right' => $x['x__right'],
                        'x__left' => $x['x__left'],
                    );
                    if($x['x__up']==$e__id){
                        $filters['x__up'] = $migrate_s__id;
                        $update_filter['x__up'] = $migrate_s__id;
                    }
                    if($x['x__down']==$e__id){
                        $filters['x__down'] = $migrate_s__id;
                        $update_filter['x__down'] = $migrate_s__id;
                    }
                    if($x['x__creator']==$e__id){
                        $filters['x__creator'] = $migrate_s__id;
                        $update_filter['x__creator'] = $migrate_s__id;
                    }

                    if(0 && count($this->X_model->fetch($filters))){

                        //There is a duplicate of this, no point to migrate! Just Remove:
                        $this->X_model->update($x['x__id'], array(
                            'x__access' => 6173,
                        ), $x__creator, 31784 /* Source Link Migrated */);

                    } else {

                        //Always Migrate for now...
                        $x_adjusted += $this->X_model->update($x['x__id'], $update_filter, $x__creator, 31784 /* Source Link Migrated */);

                    }





                    //Migrate this transaction:
                    if($x['x__up']==$e__id){
                        $x_adjusted += $this->X_model->update($x['x__id'], array(
                            'x__up' => $migrate_s__id,
                        ));
                    }

                    if($x['x__down']==$e__id){
                        $x_adjusted += $this->X_model->update($x['x__id'], array(
                            'x__down' => $migrate_s__id,
                        ));
                    }

                    if($x['x__creator']==$e__id){
                        $x_adjusted += $this->X_model->update($x['x__id'], array(
                            'x__creator' => $migrate_s__id,
                        ));
                    }

                }

                //Clean Duplicates:
                $this->E_model->remove_duplicate_links($migrate_s__id);

            }

        } else {

            //REMOVE TRANSACTIONS
            foreach($this->X_model->fetch(array(
                'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                'x__type !=' => 10673, //Member Transaction Unpublished
                '(x__down = ' . $e__id . ' OR x__up = ' . $e__id . ' OR x__creator = ' . $e__id . ')' => null,
            ), array(), 0) as $adjust_tr){
                //Delete this transaction:
                $x_adjusted += $this->X_model->update($adjust_tr['x__id'], array(
                    'x__access' => 6173, //Transaction Deleted
                ), $x__creator, 10673 /* Member Transaction Unpublished */);
            }

        }

        return $x_adjusted;
    }

    function add_e($e__id){

        $member_e = superpower_unlocked();
        if(!$member_e){
            return false;
        }

        //Assign to Creator:
        $this->X_model->create(array(
            'x__type' => 4230,
            'x__creator' => $member_e['e__id'],
            'x__up' => $member_e['e__id'],
            'x__down' => $e__id,
        ));

        //Review source later:
        if(!superpower_unlocked(13422)){

            //Add Pending Review:
            $this->X_model->create(array(
                'x__type' => 4230,
                'x__creator' => $member_e['e__id'],
                'x__up' => 12775, //PENDING REVIEW
                'x__down' => $e__id,
            ));

            //SOURCE PENDING MODERATION TYPE:
            $this->X_model->create(array(
                'x__type' => 7504, //SOURCE PENDING MODERATION
                'x__creator' => $member_e['e__id'],
                'x__up' => 12775, //PENDING REVIEW
                'x__down' => $e__id,
            ));

        }

    }


    function mass_update($e__id, $action_e__id, $action_command1, $action_command2, $x__creator)
    {

        //Alert: Has a twin function called i_mass_update()

        boost_power();


        if(!in_array($action_e__id, $this->config->item('n___4997'))) {

            return array(
                'status' => 0,
                'message' => 'Unknown mass action',
            );

        } elseif($action_e__id != 5943 && $action_e__id != 12318 && strlen(trim($action_command1)) < 1){

            return array(
                'status' => 0,
                'message' => 'Missing primary command',
            );

        } elseif(in_array($action_e__id, array(5981, 5982, 12928, 12930, 11956, 13441, 26149)) && !view_valid_handle_e($action_command1)){

            return array(
                'status' => 0,
                'message' => 'Unknown Source. Format must be: @SourceHandle',
            );

        } elseif(in_array($action_e__id, array(11956)) && !view_valid_handle_e($action_command2)){

            return array(
                'status' => 0,
                'message' => 'Unknown Source. Format must be: @SourceHandle',
            );

        }





        //Basic input validation done, let's continue...
        $applied_success = 0; //To be populated...

        //Fetch all followers:
        $followers = $this->X_model->fetch(array(
            'x__up' => $e__id,
            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
            'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
            'e__access IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
        ), array('x__down'), 0);


        //Process request:
        foreach($followers as $x) {

            //Logic here must match items in e_mass_actions config variable

            //Take command-specific action:
            if ($action_e__id==4998) { //Add Prefix String

                $this->E_model->update($x['e__id'], array(
                    'e__title' => $action_command1 . $x['e__title'],
                ), true, $x__creator);

                $applied_success++;

            } elseif ($action_e__id==4999) { //Add Postfix String

                $this->E_model->update($x['e__id'], array(
                    'e__title' => $x['e__title'] . $action_command1,
                ), true, $x__creator);

                $applied_success++;


            } elseif (in_array($action_e__id, array(26149)) && view_valid_handle_e($action_command1)) {

                //Go through all followings of this source:
                foreach($this->E_model->fetch(array(
                    'LOWER(e__handle)' => strtolower(view_valid_handle_e($action_command1)),
                )) as $e){

                    //Go through all followings and add the ones missing:
                    foreach($this->X_model->fetch(array(
                        'x__up' => $e['e__id'],
                        'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                        'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        'e__access IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
                    ), array('x__down'), 0, 0) as $e__up){

                        //Add if not added as the follower:
                        if(!count($this->X_model->fetch(array(
                            'x__up' => $e__up['e__id'],
                            'x__down' => $x['e__id'],
                            'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                            'x__access IN (' . join(',', $this->config->item('n___7359')) . ')' => null, //PUBLIC
                        )))){

                            //Must be added:
                            $this->X_model->create(array(
                                'x__creator' => $x__creator,
                                'x__up' => $e__up['e__id'],
                                'x__down' => $x['e__id'],
                                'x__type' => 4230,
                                'x__message' => $e__up['x__message'],
                            ));

                            $applied_success++;
                        }
                    }
                }

            } elseif (in_array($action_e__id, array(5981, 5982, 12928, 12930, 11956, 13441)) && view_valid_handle_e($action_command1)) { //Add/Delete/Migrate followings source

                //What member searched for:
                foreach($this->E_model->fetch(array(
                    'LOWER(e__handle)' => strtolower(view_valid_handle_e($action_command1)),
                )) as $e){

                    //See if follower source has searched followings source:
                    $down_up_e = $this->X_model->fetch(array(
                        'x__type IN (' . join(',', $this->config->item('n___32292')) . ')' => null, //SOURCE LINKS
                        'x__down' => $x['e__id'], //This follower source
                        'x__up' => $e['e__id'],
                        'x__access IN (' . join(',', $this->config->item('n___7360')) . ')' => null, //ACTIVE
                    ));

                    if((in_array($action_e__id, array(5981, 13441)) && count($down_up_e)==0) || ($action_e__id==12928 && view_e_covers(12273, $x['e__id'],0, false) > 0) || ($action_e__id==12930 && !view_e_covers(12273, $x['e__id'],0, false))){

                        $add_fields = array(
                            'x__creator' => $x__creator,
                            'x__type' => 4230,
                            'x__down' => $x['e__id'], //This follower source
                            'x__up' => $e['e__id'],
                        );

                        if($action_e__id==13441){
                            //Copy message only if moving:
                            $add_fields['x__message'] = $x['x__message'];
                        }

                        //Following Member Addition
                        $this->X_model->create($add_fields);

                        $applied_success++;

                        if($action_e__id==13441){
                            //Since we're migrating we should remove from here:
                            $this->X_model->update($x['x__id'], array(
                                'x__access' => 6173, //Transaction Deleted
                            ), $x__creator, 10673 /* Member Transaction Unpublished  */);
                        }

                    } elseif(in_array($action_e__id, array(5982, 11956)) && count($down_up_e) > 0){

                        if($action_e__id==5982){

                            //Following Member Removal
                            foreach($down_up_e as $delete_tr){
                                $this->X_model->update($delete_tr['x__id'], array(
                                    'x__access' => 6173, //Transaction Deleted
                                ), $x__creator, 10673 /* Member Transaction Unpublished  */);
                                $applied_success++;
                            }

                        } elseif($action_e__id==11956 && view_valid_handle_e($action_command2)) {

                            foreach($this->E_model->fetch(array(
                                'LOWER(e__handle)' => strtolower(view_valid_handle_e($action_command2)),
                            )) as $e){
                                //Add as a followings because it meets the condition
                                $this->X_model->create(array(
                                    'x__creator' => $x__creator,
                                    'x__type' => 4230,
                                    'x__down' => $x['e__id'], //This follower source
                                    'x__up' => $e['e__id'],
                                ));
                                $applied_success++;
                            }
                        }
                    }
                }

            } elseif ($action_e__id==5943) { //Member Mass Update Member Icon

                $this->E_model->update($x['e__id'], array(
                    'e__cover' => $action_command1,
                ), true, $x__creator);

                $applied_success++;

            } elseif ($action_e__id==12318 && !strlen($x['e__cover'])) { //Member Mass Update Member Icon

                $this->E_model->update($x['e__id'], array(
                    'e__cover' => $action_command1,
                ), true, $x__creator);

                $applied_success++;

            } elseif ($action_e__id==5000 && substr_count(strtolower($x['e__title']), strtolower($action_command1)) > 0) { //Replace Member Matching Name

                $this->E_model->update($x['e__id'], array(
                    'e__title' => str_ireplace($action_command1, $action_command2, $x['e__title']),
                ), true, $x__creator);

                $applied_success++;

            } elseif ($action_e__id==10625 && substr_count($x['e__cover'], $action_command1) > 0) { //Replace Member Matching Icon

                $this->E_model->update($x['e__id'], array(
                    'e__cover' => str_replace($action_command1, $action_command2, $x['e__cover']),
                ), true, $x__creator);

                $applied_success++;

            } elseif ($action_e__id==5001 && substr_count($x['x__message'], $action_command1) > 0) { //Replace Transaction Matching String

                $new_message = str_replace($action_command1, $action_command2, $x['x__message']);

                $this->X_model->update($x['x__id'], array(
                    'x__message' => $new_message,
                ), $x__creator, 10657 /* SOURCE LINK CONTENT UPDATE  */);

                $applied_success++;

            } elseif ($action_e__id==26093) { //Replace Transaction Matching String

                $this->X_model->update($x['x__id'], array(
                    'x__message' => $action_command1,
                ), $x__creator, 10657 /* SOURCE LINK CONTENT UPDATE  */);

                $applied_success++;

            } elseif ($action_e__id==5003 && ($action_command1=='*' || $x['e__access']==$action_command1) && in_array($action_command2, $this->config->item('n___6177'))) {

                //Being deleted? Remove as well if that's the case:
                if(!in_array($action_command2, $this->config->item('n___7358'))){
                    $this->E_model->remove($x['e__id'], $x__creator);
                }

                //Update Matching Member Status:
                $this->E_model->update($x['e__id'], array(
                    'e__access' => $action_command2,
                ), true, $x__creator);

                $applied_success++;

            } elseif ($action_e__id==5865 && ($action_command1=='*' || $x['x__access']==$action_command1) && in_array($action_command2, $this->config->item('n___6186') /* Transaction Status */)) { //Update Matching Transaction Status

                $this->X_model->update($x['x__id'], array(
                    'x__access' => $action_command2,
                ), $x__creator, ( in_array($action_command2, $this->config->item('n___7360') /* ACTIVE */) ? 10656 /* Member Transaction Updated Status */ : 10673 /* Member Transaction Unpublished */ ));

                $applied_success++;

            }
        }

        //Log mass source edit transaction:
        $this->X_model->create(array(
            'x__creator' => $x__creator,
            'x__type' => $action_e__id,
            'x__down' => $e__id,
            'x__metadata' => array(
                'payload' => $_POST,
                'e_total' => count($followers),
                'e_updated' => $applied_success,
                'command1' => $action_command1,
                'command2' => $action_command2,
            ),
        ));

        //Return results:
        return array(
            'status' => 1,
            'message' => $applied_success . ' of ' . count($followers) . ' sources updated',
        );

    }


    function verify_create($e__title, $x__creator = 0, $e__cover = null){

        //Validate Title
        $validate_e__title = validate_e__title($e__title);
        if(!$validate_e__title['status']){
            return $validate_e__title;
        }

        //Create
        $focus_e = $this->E_model->create(array(
            'e__title' => $validate_e__title['e__title_clean'],
            'e__cover' => $e__cover,
        ), $x__creator);

        //Return success:
        return array(
            'status' => 1,
            'new_e' => $focus_e,
        );

    }

}