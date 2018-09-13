<!DOCTYPE html>
<html>
    <head>
        <title>ACTIVITIES</title>
        <?php $f->js('/assets/jquery-3.3.1.min.js') ?>
    </head>
    <body>
        <p>This is ACTIVITY page</p>
        <form id="form">
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <table>
                <tr>
                    <td>ID</td>
                    <td><?php echo $id ?></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input id="title" name="title"></td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td><textarea id="content" name="content"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="button_delete" type="button">Delete</button>
                        <button>Save</button>
                    </td>
                </tr>
            </table>
        </form>
        <p>Click <a href="<?php echo $f->url('/') ?>">here</a> to go to HOME page.</p>
        <p>Click <a href="<?php echo $f->url('/activities') ?>">here</a> to go to ACTIVITIES page.</p>
    </body>
    <script>
        $(function() {
            $.getJSON(
                '<?php echo $f->url('/api/activities/' . $id) ?>'
            ).done(function(response) {
                var data = response.data;
                var titleField = $('#title');
                titleField.val(data.title);

                var contentField = $('#content');
                contentField.val(data.content);
            });
            
            $('#form').submit(function(event) {
                event.preventDefault();
                
                var data = {};
                var form = $(this);
                form.find('[name]').each(function() {
                    var item = $(this);
                    data[item.attr('name')] = item.val();
                });
                
                $.ajax({
                    url: '<?php echo $f->url('/api/activities/' . $id) ?>',
                    type: 'PUT',
                    data: JSON.stringify(data),
                    contentType: 'application/json'
                }).done(function(response) {
                    if (!response.code) {
                        alert('Success!');
                    } else {
                        alert('Fail!');
                    }
                });
            });
            
            $('#button_delete').click(function() {
                $.ajax({
                    url: '<?php echo $f->url('/api/activities/' . $id) ?>',
                    type: 'DELETE'
                }).done(function(response) {
                    if (!response.code) {
                        alert('Success!');
                    } else {
                        alert('Fail!');
                    }
                });
            });
        });
    </script>
</html>
