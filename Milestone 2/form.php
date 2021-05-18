Name: <input type="text" name="name" value="<?php echo $name;?>">

Email: <input type="text" name="email" value="<?php echo $email;?>">

ProductInterests:<?php if(isset($_POST["submit"])){
                 echo $_POST["product"]."<br>";
                 }
                 else{
                                  ?

Birthday:<?php require "../class.datepicker.php"; $db=new datepicker(); $db->firstDayOfWeek = 1;  $db->dateFormat = "m d Y"; ?>

Message: <textarea name="Message" rows="4"><?php echo $comment;?></textarea>

