<a href="<?= base_url('/add') ?>">add</a>
<table border="1">
<tr>
    <th>title</th>
    <th>isbn number</th>
    <th>no. of copies</th>
    <th>book author</th>
    <th>action</th>
</tr>
<?php foreach($bk as $b): ?>
    <tr>
        <td><?= $b['title'] ?></td>
        <td><?= $b['isbn_no'] ?></td>
        <td><?= $b['copies'] ?></td>
        <td><?= $b['author'] ?></td>
        <td>
            <a href="/edit/<?= $b['book_id']?>">edit</a>
            <a href="/delete/<?= $b['book_id']?>">delete</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>