<?php

require("connect.php");




$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

        $sql1 = mysqli_query($conn,"SELECT * FROM users WHERE u_id='".$row["u_id"]."'");
        $user = mysqli_fetch_array($sql1, MYSQLI_ASSOC);


        echo'


        <div class="box">

        <span class="u_name">'.ucfirst($user["f_name"]).' '.ucfirst($user["l_name"]) .'</span> <span class="time"> 12/10/2020</span>
        <br><br>
        <p class="content">
        '.$row["p_content"].'
        </p>';

        if($row['p_location']!=""){
            echo'
            <div class="mapouter"><div class="gmap_canvas"><iframe style="width:100%;" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q='.$row['p_location'].'&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style>.mapouter{position:relative;text-align:right;height:200px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:100%;}</style></div>
            ';
        }
        
        echo'<div style="margin-bottom:20px;margin-top:2%;">
            <i class="far fa-heart"></i>
            <i class="far fa-comment-dots"></i>
        </div>
        
        <form method="POST" action="#" id="cmt2">
            <div class="form-group" style="display:inline;"><input class="form-control" id="email" name="comment" type="text" placeholder="Comments" style="width:90%;display:inline-block;"></div>
            <input name="u_id" value="1" style="display: none;">
            <div class="form-group float-right"><button class="btn btn btn-outline-primary cmt_btn" id="2"><span class="mbri-success"></span> Post</button></div>
        </form>
        
                <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Nerul%20Mumbai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div> -->
        </div>

        ';


    

    }
}



?>