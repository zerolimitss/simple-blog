<div class="blog-post">
    <h2 class="blog-post-title"><?=$post['title']?></h2>
    <img src="/images/<?=$post['image']?>" alt="">
    <p class="blog-post-meta"><?=date("d-m-Y", $post['time_stamp'])?></p>
    <div class="text">
        <?=$post['text']?>
    </div>
</div><!-- /.blog-post -->
