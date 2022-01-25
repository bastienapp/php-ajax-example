<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form" action="postdata.php" method="post">
        <label>
            <input name="todo" type="text" />
        </label>
        <input type="submit" value="Send">
    </form>
    <script>
        const form = document.getElementById('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let formData = new FormData(form);

            fetch('postdata.php', {
                method: 'post',
                body: formData,
            })
            .then(response => response.json())
            .then(data => alert(JSON.stringify(data)));
        });
    </script>
</body>
</html>