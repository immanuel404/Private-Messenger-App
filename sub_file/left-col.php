    
    <div id="left-col-container">
        <div style="cursor:pointer" onclick="document.getElementById('new-message').style.display='block';" class="white-back">
            <p align="center">Click to Select New Message</p>
        </div>
    
<?php

    $q = 'SELECT DISTINCT `reciever_name`, `sender_name` FROM `messages` WHERE `sender_name` = "'.$_SESSION['username'].'" OR `reciever_name` = "'.$_SESSION['username'].'" ORDER BY date_time DESC ';
    $r = mysqli_query($con, $q);
    
    if($r){
        if(mysqli_num_rows($r) > 0) {

            $counter = 0;
            $added_user = array();

            while($row = mysqli_fetch_assoc($r)) {
                $sender_name = $row['sender_name'];
                $reciever_name = $row['reciever_name'];

                if($_SESSION['username'] == $sender_name) {
                    if(in_array($reciever_name, $added_user)) {

                    } else {
                        ?>
                            <div class="grey-back">
                                <img src="images/profil.png" class="image" />
                                <?php echo '<a href="?user='.$reciever_name.'">'.$reciever_name.'</a>'; ?>
                            </div>
                        <?php
                        $added_user = array($counter => $reciever_name);
                        $counter++;
                    }

                } elseif($_SESSION['username'] == $reciever_name) {
                        if(in_array($sender_name, $added_user)) {
    
                        } else {
                            ?>
                                <div class="grey-back">
                                    <img src="images/profile.png" class="image" />
                                    <?php echo '<a href="?user='.$sender_name.'">'.$sender_name.'</a>'; ?>
                                </div>
                            <?php

                            $added_user = array($counter => $sender_name);
                            $counter++;
                        }
    
                    }

                }
            } else {
            echo "no user";
            }
        } else {
        echo $q;
    }


?>


</div>