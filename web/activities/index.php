<!DOCTYPE html>
<html>
    <head>
        <title>ACTIVITIES</title>
        <?php $f->js('/assets/js/jquery-3.3.1.min.js') ?>
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
                    <td><input name="title"><label class="error" for="title"></label></td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td><textarea name="content"></textarea><label class="error" for="content"></label></td>
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
    <style>
        .error {
            display: block;
            color: red;
        }
    </style>
    <script>
        $(function() {
            var tableBody = $('#table_body');
            $.getJSON('<?php echo $f->url('/api/activities') ?>')
                .done(function(response) {
                    if (!response.code) {
                        var data = response.data;
                        var url = '<?php echo $f->url('/activities') ?>';
                        $.each(data, function(i, item) {
                            var tr = $('<tr/>');
                            tr.append('<td>' + item.id + '</td>');
                            tr.append('<td>' + item.title + '</td>');
                            tr.append('<td><a href="' + url + '/' + item.id + '">view</a></td>');

                            tableBody.append(tr);
                        });
                    } else {
                        alert('Error: ' + response.message);
                    }
            });
            
            $('#form').submit(function(event) {
                event.preventDefault();
                
                var data = {};
                var form = $(this);
                form.find('[name]').each(function() {
                    var item = $(this);
                    data[item.attr('name')] = item.val();
                });
                form.find('label').text(null);
                
                $.ajax({
                    url: '<?php echo $f->url('/api/activities') ?>',
                    type: 'POST',
                    data: JSON.stringify(data),
                    contentType: 'application/json'
                }).done(function(response) {
                    if (!response.code) {
                        alert('Success!');
                    } else if (response.data) {
                        $.each(response.data, function(key, value) {
                            var label = form.find('label[for=' + key + ']');
                            label.text(value);
                        });
                    } else {
                        alert('Error: ' + response.message);
                    }
                });
            });
        });
    </script>
</html>
