<?php


foreach(array('i__id','e__id','exclude_e','include_e') as $input){
    if(!isset($_GET[$input])){
        $_GET[$input] = '';
    }
}

//Show Titles:
if(strlen($_GET['i__id'])){
    $is = $this->I_model->fetch(array(
        'i__id IN (' . $_GET['i__id'] . ')' => null,
        'i__type IN (' . join(',', $this->config->item('n___7356')) . ')' => null, //ACTIVE
    ));
    if(count($is)){
        echo '<h2><a href="/i/i_go/'.$is[0]['i__id'].'"><u>'.$is[0]['i__title'].'</u></a></h2>';
    }
}
if(strlen($_GET['e__id'])){
    $es = $this->E_model->fetch(array(
        'e__id IN (' . $_GET['e__id'] . ')' => null,
        'e__type IN (' . join(',', $this->config->item('n___7358')) . ')' => null, //ACTIVE
    ));
    if(count($es)){
        echo '<h2><a href="/@'.$es[0]['e__id'].'"><u>'.$es[0]['e__title'].'</u></a></h2>';
    }
}

$message_list = message_list($_GET['i__id'], $_GET['e__id'], $_GET['exclude_e'], $_GET['include_e']);


echo '<form action="" method="GET">';

echo '<table class="table table-sm maxout"><tr>';

//ANY IDEA
echo '<td><div style="padding-right:5px;">';
echo '<span class="mini-header">Ideas:</span>';
echo '<input type="text" name="i__id" placeholder="idea1id,idea2id" value="' . $_GET['i__id'] . '" class="form-control border">';
echo '</div></td>';

echo '<td><span class="mini-header">Sources:</span><input type="text" name="e__id" value="' . $_GET['e__id'] . '" class="form-control border"></td>';

echo '</tr><tr>';

echo '<td><div style="padding-right:5px;">';
echo '<span class="mini-header">Includes Profile:</span>';
echo '<input type="text" name="include_e" placeholder="idea1id,idea2id" value="' . $_GET['include_e'] . '" class="form-control border">';
echo '</div></td>';

echo '<td><span class="mini-header">Excludes Profile:</span><input type="text" name="exclude_e" value="' . $_GET['exclude_e'] . '" class="form-control border"></td>';

echo '</tr></table>';

echo '<input type="submit" class="btn btn-6255" value="Apply Filters" />';

echo '&nbsp;&nbsp;<a href="javascript:void(0);" onclick="$(\'.subscriber_data\').toggleClass(\'hidden\');">'.$message_list['unique_users_count'].' Unique Recipients = '.$message_list['email_count'].' Emails + '.$message_list['phone_count'].' SMS</a>';

echo '</form>';


echo '<textarea class="mono-space subscriber_data hidden" style="background-color:#FFFFFF; color:#000 !important; padding:3px; font-size:0.8em; height:218px; width: 100%; border-radius: 10px;">'.$message_list['full_list'].'</textarea>';
echo '<textarea class="mono-space subscriber_data hidden" style="background-color:#FFFFFF; color:#000 !important; padding:3px; font-size:0.8em; height:218px; width: 100%; border-radius: 10px;">'.$message_list['email_list'].'</textarea>';


echo '<div style="padding: 55px 10px 13px;">';
echo '<div style="padding: 10px 0;"><input type="text" class="form-control white-border" id="message_subject" placeholder="Subject" onkeyup="countChar()" value="'.( isset($_GET['message_subject']) ? $_GET['message_subject'] : '' ).'" /></div>';
echo '<textarea class="form-control white-border" id="message_text" placeholder="Body" onkeyup="countChar()">'.( isset($_GET['message_text']) ? $_GET['message_text'] : '' ).'</textarea>';
echo '<div id="charNum"></div>';
echo '<div style="padding:10px 0;">TIP: SMS Messages must be less than 160 Characters and NOT include new lines or Emojis.</div>';
echo '</div>';

echo '<div id="send_message_btn"><a class="btn btn-6255" href="javascript:void(0);"  onclick="send_message();">Send Message to '.$message_list['unique_users_count'].' <i class="fas fa-arrow-right"></i></a></div>';

echo '<div id="message_result"></div>';

echo '<div></div>';

?>

<script type="text/javascript">

    $(document).ready(function(){
        countChar();
    });

    function countChar() {
        $('#charNum').html(( $('#message_subject').val().length + $('#message_text').val().length + 2 /* For the [: ] that connects the subject to body in SMS */ )+'/<?= view_memory(6404,27891) ?> Characters (Subject + Text)');
    }

    var is_processing = false;
    function send_message(){

        if(is_processing){
            alert('currently processing... be patient :)');
            return false;
        }

        is_processing = true;

        //Make sure there is a message:
        if(!$('#message_text').val().length){
            alert('You must enter a message before sending...');
            return false;
        }

        $('#message_result').html('<span class="icon-block"><i class="far fa-yin-yang fa-spin"></i></span> Sending Messages...');

        $.post("/x/x_send_message", {
            i__id: '<?= $_GET['i__id'] ?>',
            e__id: '<?= $_GET['e__id'] ?>',
            exclude_e: '<?= $_GET['exclude_e'] ?>',
            include_e: '<?= $_GET['include_e'] ?>',
            message_subject: $('#message_subject').val(),
            message_text: $('#message_text').val(),
        }, function (data) {

            if (data.status) {
                //Hide button:
                $('#send_message_btn').addClass('hidden');
                $('#message_result').html(data.message);
            } else {
                //Show error:
                is_processing = false; //Allow resubmissions
                $('#message_result').html('ERROR: '+data.message);
            }

        });

    }

</script>