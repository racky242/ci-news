<table border="1">
    <tr>
        <th>title</th>
        <th>slug</th>
        <th>body</th>
    </tr>
<?php foreach($nw as $n): ?>
    <tr>
        <td><?= $n['title'] ?></td>
        <td><?= $n['slug'] ?></td>
        <td><?= $n['body'] ?></td>
    </tr>
<?php endforeach; ?>
</table>