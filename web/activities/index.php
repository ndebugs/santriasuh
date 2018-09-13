<!DOCTYPE html>
<html>
    <head>
        <title>ACTIVITIES</title>
        <?php $f->js('/assets/jquery-3.3.1.min.js') ?>
    </head>
    <body>
        <p>This is ACTIVITIES page</p>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table_body">
                
            </tbody>
        </table>
        
        <form id="form">
            <table>
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
                        <button>Add</button>
                    </td>
                </tr>
            </table>
        </form>
        <p>Click <a href="<?php echo $f->url('/') ?>">here</a> to go to HOME page.</p>
    </body>
    <script>
        $(function() {
            var tableBody = $('#table_body');
            $.getJSON('<?php echo $f->url('/api/activities') ?>')
                .done(function(response) {
                    var data = response.data;
                    var url = '<?php echo $f->url('/activities') ?>';
                    $.each(data, function(i, item) {
                        var tr = $('<tr/>');
                        tr.append('<td>' + item.id + '</td>');
                        tr.append('<td>' + item.title + '</td>');
                        tr.append('<td><a href="' + url + '/' + item.id + '">view</a></td>');
                        
                        tableBody.append(tr);
                    });
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
                    url: '<?php echo $f->url('/api/activities') ?>',
                    type: 'POST',
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
        });
    </script>
</html>
