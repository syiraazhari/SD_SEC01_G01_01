<?php 
require_once('config.php');
$qry = $conn->query("SELECT * from `events` where id = '{$_GET['id']}' ");
if($qry->num_rows > 0){
    foreach($qry->fetch_assoc() as $k => $v){
        $$k=$v;
    }
}
?>
<style>
    .img-thum{
        height:15vh;
        object-fit:cover;
        object-position:center top;
    }
    .schedule {
        position: absolute;
        padding: 5px 15px;
        bottom: 0;
        left: 66%;
        font-size: 1.5em;
        font-weight: 700;
        background-color: #212529e0 !important;
        width: auto;
        height: auto;
    }
    #uni_modal .modal-content>.modal-footer{
        display:none !important;
    }
    #uni_modal .modal-content>.modal-body{
        padding:unset !important;
    }
</style>
<div class="container-fluid py-2 px-3">
    <div class="row bg-dark position-relative">
    <center><img src="<?php echo validate_image($img_path) ?>" class="img-thumb" alt="$img_path"></center>
    <span class="schedule"><?php echo date("M d" ,strtotime($schedule)) ?></span>
    </div>
    <h3 class="text-center"><b><?php echo $title ?></b></h3>
    <hr>
    <span><b>Schedule:</b> <?php echo date("M d, Y" ,strtotime($schedule)) ?></span>
    <p><?php echo $description ?></p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>