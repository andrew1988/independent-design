<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="<?php echo base_url('admin_home') ?>" title="Go to Home" class="tip-bottom"><i
                        class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->
    <?php
    //unread messages
    echo '<table class="table" >
            <thead >
                <tr >
                   <th scope = "col" >#</th>
                   <th scope = "col" > Name</th >
                   <th scope = "col" > Email</th >
                   <th scope = "col" > Date received</th >
                   <th scope = "col" > Actions</th >
                </tr >
            </thead >';
    $i=1;
    foreach ($unreadMessages as $unreadMessage) {
         echo '
            <tbody >
                <tr >
                    <th scope = "row" ><a href="'.base_url('admin_read_message/'.$unreadMessage["id"]).'">'. $i .'</a></th >
                    <td ><a href="'.base_url('admin_read_message/'.$unreadMessage["id"]).'"><b>'.$unreadMessage["name"].'</b></a></td >
                    <td ><a href="'.base_url('admin_read_message/'.$unreadMessage["id"]).'">'.$unreadMessage["email"].'</a></td >
                    <td >'.$unreadMessage["date_received"].'</td >
                    <td style="text-align: center;"><a href="'.base_url('admin_delete_message/'.$unreadMessage["id"]).' "type="button" class="btn btn-danger btn-sm">Delete</a></td>
                </tr >
             ';
        $i++;
    }
    echo '</tbody> </table >';

    //read messages
    echo '<table class="table" >
            <thead >
                <tr >
                   <th scope = "col" >#</th>
                   <th scope = "col" > Name</th >
                   <th scope = "col" > Email</th >
                   <th scope = "col" > Date received</th >
                   <th scope = "col" > Actions</th >
                </tr >
            </thead >';
    $i=1;
    foreach ($readMessages as $readMessage) {
        echo '
            <tbody >
                <tr >
                    <th scope = "row" ><a href="'.base_url('admin_read_message/'.$readMessage["id"]).'">'. $i .'</a></th >
                    <td ><a href="'.base_url('admin_read_message/'.$readMessage["id"]).'">'.$readMessage["name"].'</a></td >
                    <td ><a href="'.base_url('admin_read_message/'.$readMessage["id"]).'">'.$readMessage["email"].'</a></td >
                    <td >'.$readMessage["date_received"].'</td >
                    <td style="text-align: center;"><a href="'.base_url('admin_delete_message/'.$readMessage["id"]).'" type="button" class="btn btn-danger btn-sm">Delete</a></td>
                </tr >
             ';
        $i++;
    }
    echo '</tbody> </table >';


    ?>

</div>

<!--end-main-container-part-->


