<style>
    .img-thumb {
        width:13.5vw !important;
        height:31.5vh !important;
        object-fit:cover;
        object-position:center top;
        min-width: 180px;
    }
    .schedule-holder {
        position: absolute;
        padding: 5px 15px;
        top: 43%;
        font-size: 1.5em;
        font-weight: 700;
        background-color: #21252970 !important;
    }
    .read-holder{
        position: absolute;
        bottom:3px;
        left:-1px;
    }
</style>
<section class="py-5">
    <div class="container">
        <h3 class='text-center'>Upcoming Events</h3>
        <hr>

    <div class="w-100 row row-cols-1 row-cols-sm-1 row-cols-lg-3 row-cols-md-3 gx-3">
        <?php 
        $events = $conn->query("SELECT * FROM events where date(schedule) >= '".date("Y-m-d")."' order by date(schedule) asc ");
        while($row = $events->fetch_array()):
        ?>
        <div class="col">
            <div class="card d-flex">
                <span class="schedule-holder bg-dark"><?php echo date("M d") ?></span>
                <img src="<?php echo validate_image($row['img_path']) ?>" alt="<?php echo $row['img_path'] ?>" class="img-top img-thumb">
                <div class="card-body position-relative">
                    <div class="container-fluid">
                        <h4><b><?php echo $row['title'] ?></b></h4>
                        <hr>
                        <small class="truncate-5"><b><?php echo $row['description'] ?></b></small>
                    </div>
                    <div class="w-100 d-flex justify-content-end mt-1 read-holder" align="bottom">
                        <a href="javascript:void(0)" class="read_more btn btn-flat btn-sm btn-info" data-id="<?php echo $row['id'] ?>"><b>Read More</b></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    </div>
</section>
<script>
    $(function(){
        $('.read_more').click(function(){
            uni_modal("<i class='fa fa-calendar-day'></i> Upcoming Event",'view_event.php?id='+$(this).attr('data-id'))
        })
    })
</script>