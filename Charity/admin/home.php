<h1 class="text-light">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="bg-light">
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-light elevation-1"><i class="fas fa-book-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Donations Today</span>
                <span class="info-box-number text-right">
                  <?php 
                    $donation = $conn->query("SELECT sum(amount) as total FROM donations where date(date_created) = '".date('Y-m-d')."' ")->fetch_assoc()['total'];
                    echo number_format($donation);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-blog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Published Blogs/Posts</span>
                <span class="info-box-number text-right">
                  <?php 
                    $blogs = $conn->query("SELECT id FROM `blogs` where status = '1' ")->num_rows;
                    echo number_format($blogs);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar-day"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Upcoming Events</span>
                <span class="info-box-number text-right">
                <?php 
                    $event = $conn->query("SELECT id FROM `events` where date(schedule) >= '".date('Y-m-d')."' ")->num_rows;
                    echo number_format($event);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
