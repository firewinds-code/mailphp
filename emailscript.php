<!-- email script 1 -->
<?php
if(isset($_POST['send'])) {
    $fromemail = $_POST['fromemail'];
    $toemail = $_POST['toemail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $send = mail($fromemail,$toemail,$subject,$message);
    if($send){
        echo "Message Send";
    }
    else{
        echo "Message Not Send"; 
    }
}
?>

<!-- Email script 2 -->
<?php
    $to="";     //kisko bhjna h mail
    $from = "";     //noreply@ekta email id
    $fromname = "";     //kis nam se bhjna h 
    $Sub="";
    $mes="";
    $header='From:'.$fromname.'<'.$from.'>';
    $send = mail($to,$subject,$message,$header);
    if($send){
        echo "Message Send";
    }
    else{
        echo "Message Not Send"; 
    }

?>