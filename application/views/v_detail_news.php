<?php foreach($news_detail as $row);?>

 <!-- Page Content -->
<div id="container">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php echo base_url('news'); ?>">news</a></li>
            <li><?php echo $row->news_title; ?></li>
        </ul>
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1> -->
                
                <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $row->news_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Admin</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row->createdate; ?></p>
                    <hr>
                    <img class="img-responsive" style="margin-right:20px; margin-bottom:20px;" src="<?php echo base_url('assets/images/news/').$row->news_image; ?>" alt="">
                    <?php echo $row->news_desc; ?>
                <!-- Pager -->
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Categories Well -->
                <!-- <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        /.col-lg-6
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                 <!--    </div> -->
                    <!-- /.row -->
             <!--    </div> --> 

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->
        <hr>
            <div class="blog-recm">
                Recomended For You :
            </div>
        <hr>
        <div class="row">
            <div class="owl-carousel similiar_product slim-blog">
            <?php foreach ($news as $rpr) { ?>
                <div class="product-thumb clearfix">
                    <div class="thumbnail">
                        <a style="display:block;" href="<?php echo base_url('news/detail/').$rpr->news_id; ?>">
                          <?php if($rpr->news_image == '') { ?>
                            <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/no-image.png')?>">
                          <?php }else { ?>
                              <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/news/').$rpr->news_image; ?>">
                          <?php } ?>
                          </a><br>
                        <div class="caption">
                                
                              <p class="title"><br><br><br><strong><?php echo $rpr->news_title; ?></strong></p>
                                <?php
                                    $news_long = $rpr->news_desc ;
                                    if (strlen($news_long) > 100)
                                    $news_long = substr($news_long, 0, 120) . '..';
                                echo $news_long;
                                ?> 
                              <a href="<?php echo base_url('news/detail/').$rpr->news_id; ?>" class="f-gotham-medium ">Read More</a>  
                 
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
    <!-- /.container -->