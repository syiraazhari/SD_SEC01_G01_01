<nav class="navbar navbar-expand-lg navbar-dark bg-navy">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="<?php echo base_url ?>">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                <?php echo $_settings->info('short_name') ?>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>causes.php">Causes</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=events">Events</a></li>
                        <?php 
                        $cat_qry = $conn->query("SELECT * FROM topics where status = 1  limit 3");
                        $count_cats =$conn->query("SELECT * FROM topics where status = 1 ")->num_rows;
                        while($crow = $cat_qry->fetch_assoc()):
                        ?>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=articles&t=<?php echo md5($crow['id']) ?>"><?php echo $crow['name'] ?></a></li>
                        <?php endwhile; ?>
                        <?php if($count_cats > 3): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url ?>?p=view_topics">All Topics</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url ?>?p=about">About</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
                <button class="btn btn-flat btn-primary" type="button" id="donation">Donation Now</button>
                <form class="form-inline ml-4 mr-2 pl-2" id="search-form">
                  <div class="input-group">
                    <input class="form-control form-control-sm form " type="search" placeholder="Search" aria-label="Search" name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"  aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-success btn-sm m-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })

    $('#search-form').submit(function(e){
      e.preventDefault()
      var sTxt = $('[name="search"]').val()
      if(sTxt != '')
        location.href = './?p=search&search='+sTxt;
    })
    $('#donation').click(function(){
      uni_modal('Donation','donate.php')
    })
  })
</script>