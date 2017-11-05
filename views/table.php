<table border="1">
    <tr>
        <td>id</td>
        <td>Updated</td>
        <td>Title</td>
        <td>Image</td>
        <td></td>
    </tr>
    <?foreach($all as $item):?>
        <tr>
            <td><?=$item['id']?></td>
            <td><?=date("d-m-Y", $item['time_stamp'])?></td>
            <td><?=$item['title']?></td>
            <td><img src="/images/<?=$item['image']?>" style="width: 200px"></td>
            <td>
                <span><a href="/edit/id/<?=$item['id']?>">edit</a></span><br>
                <span><a href="/delete/id/<?=$item['id']?>">delete</a></span>
            </td>
        </tr>
    <?endforeach;?>
</table>
<br>
