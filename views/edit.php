<form action="/save/id/<?=$post['id']?>" method="post" id="formEdit" enctype="multipart/form-data">
    Title:
    <input type="text" name="title" value="<?=$post['title']?>"><br><br>
    Text:
    <textarea name="text" id="" cols="30" rows="10"><?=$post['text']?></textarea><br><br>
    File:
    <?if(!empty($post['image'])):?>
        <div class="file">
            <img src="/images/<?=$post['image']?>" alt="" style="width: 100px">
            <a href="/image/id/<?=$post['id']?>" class="deleteImage">Delete image</a><br><br>
        </div>
    <?endif;?>
    <input type="file" name="image" id="file"><br><br>
    <input type="submit" value="Send"><br><br>
</form>