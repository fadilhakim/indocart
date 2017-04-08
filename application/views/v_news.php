 <!-- Page Content -->
<div id="container">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php echo base_url('news'); ?>">Event & News</a></li>
        </ul>
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1> -->
                <?php foreach ($news as $e) { ?>
                
                <!-- First Blog Post -->
                    <h2>
                        <a style="color:#000;" href="<?php echo base_url('news/detail/').$e->news_id; ?>"><?php echo $e->news_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Admin</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $e->createdate; ?></p>
                    <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <img class="img-responsive" src="<?php echo base_url('assets/images/news/').$e->news_image; ?>" alt="">
                            </div>
                        </div>
                    <hr>
                    <?php
                        $news_long = $e->news_desc ;
                        if (strlen($news_long) > 100)
                        $news_long = substr($news_long, 0, 420) . '..';
                    echo $news_long;
                     ?> <br><br>
                    <a class="btn btn-primary" style="background-color:#d30102; border:1px solid #d30102;" href="<?php echo base_url('news/detail/').$e->news_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                 <?php } ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Popular News</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php foreach ($news as $n) { ?>
                                <li style="">
                                    <a style="font-size:18px; line-height:30px;" href="<?php echo base_url('news/detail/').$n->news_id; ?>"><?php echo $n->news_title; ?></a><br>
                                    <span><i class="glyphicon glyphicon-time"></i> Posted on : <?php echo date ("D, M d",strtotime($n->createdate)); ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>
    </div>
</div>
    <!-- /.container -->