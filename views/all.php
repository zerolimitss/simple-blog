<?foreach($all as $item):?>
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="/show/id/<?=$item['id']?>"><?=$item['title']?></a></h2>
        <p class="blog-post-meta"><?=date("d-m-Y", $item['time_stamp'])?></p>
        <img src="/images/<?=$item['image']?>" alt="">
        <div class="text">
            <?=$item['text']?>
        </div>
    </div><!-- /.blog-post -->
<?endforeach;?>