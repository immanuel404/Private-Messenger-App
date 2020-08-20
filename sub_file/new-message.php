
<div id="new-message">
    <p class="m-header">New Message</p>
    <p class="m-body">

        <Form align="center" method="post">
            <input style="width:90%" type="text" list="user" onkeyup="check_in_db()" class="message-input" placeholder="user_name" id="user_name" name="user_name" />
            <datalist id="user"></datalist>
            
            <br></br>
            <textarea class="message-input" name="message" placeholder="write your message here"></textarea>
            <input style="background:lightblue;border-radius:4px;" type="submit" value="send" id="send" name="send" />
            <button type="text" onclick="document.getElementById('new-message').style.display='none';">Cancel</button>
        </form>
    </p>
    <p class="m-footer"></p>


    <?php
        require_once("connection.php");
        
        if(isset($_POST['send'])){
            $sender_name = $_SESSION['username'];
            $reciever_name = $_POST['user_name'];
            $message =$_POST['message'];
            $date = date("Y-m_d h:i:sa");

            $q = 'INSERT INTO `messages`(`sender_name`, `reciever_name`, `message_text`, `date_time`) VALUES("'.$sender_name.'", 
            "'.$reciever_name.'", "'.$message.'", "'.$date.'")';
            $r = mysqli_query($con, $q);
            if($r){
                header("location:index.php?user=".$reciever_name);
            } else {
                echo "connection error";
            }
        }
    ?>
</div>


<script src="sub_file/jquery-3.5.1.min.js"></script>

<script>
function check_in_db(
    var user_name = document.getElementById('user_name').val();
    $.post("sub_file/check_in_db.php",
    {
        user: user_name;
    },
    function(data, status){
        // alert(data);
        if(data == '<option value="no user">'){
            document.getElementById('send').disabled = true;
        } else {
            document.getElementById('send').disabled = false;
        }
        document.getElementById('user').innerHTML = data;
    }
    );
);
</script>