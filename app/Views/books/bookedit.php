<?php if(!isset($bk)): ?>
<form action="<?= base_url('/save') ?>" method="post">
    <table>
        <tr>
            <td>title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>book isbn</td>
            <td><input type="text" name="isbn_no"></td>
        </tr>
        <tr>
            <td>no. of copies</td>
            <td><input type="text" name="copies"></td>
        </tr>

        <tr>
            <td>author</td>
            <td><input type="text" name="author"></td>
        </tr>
    </table>
    <input type="submit" name="add" value="add">
</form>

<?php else: ?>
<form action="<?= base_url('/update') ?>" method="post">
    <table>
        <input type="hidden" name="book_id" value="<?= $bk['book_id'] ?>">
        <tr>
            <td>title</td>
            <td><input type="text" name="title" value="<?= $bk['title'] ?>"></td>
        </tr>
        <tr>
            <td>book isbn</td>
            <td><input type="text" name="isbn_no" value="<?= $bk['isbn_no'] ?>"></td>
        </tr>
        <tr>
            <td>no. of copies</td>
            <td><input type="text" name="copies" value="<?= $bk['copies'] ?>"></td>
        </tr>

        <tr>
            <td>author</td>
            <td><input type="text" name="author" value="<?= $bk['author'] ?>"></td>
        </tr>
    </table>
    <input type="submit" name="update" value="update">
</form>
<?php endif; ?>