<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="<?php echo base_url('admin_home') ?>" title="Go to Home" class="tip-bottom"><i
                    class="icon-home"></i> Home</a>
            <a href="<?php echo base_url('admin_messages') ?>" class="tip-bottom" ><i
                        class="icon-home"></i> Messages list</a>  </div>
    </div>
    <!--End-breadcrumbs-->
    <table class="table">
        <tbody>
        <tr>
            <td><b>Name</b></td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td><b>Phone</b></td>
            <td><?php echo $phone ?></td>
        </tr>
        <tr>
            <td><b>Web Site</b></td>
            <td><?php echo $website ?></td>
        </tr>
        <tr>
            <td><b>Message</b></td>
            <td><?php echo $message ?></td>
        </tr>
        <tr>
            <td><b>Date received</b></td>
            <td><?php echo $date_received ?></td>
        </tr>
        <tr>
            <td><b>User ip:</b></td>
            <td><?php echo $ip_sent_from ?></td>
        </tr>
        </tbody>
    </table>

</div>

<!--end-main-container-part-->


