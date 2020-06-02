<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="text-center">
    <h1>Daily Tasks</h1>
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action="/saveTask">
                <input type="text" class="form-control" name="task" placeholder="Enter your task here"/>
                </br>
                <input type="submit" class="btn- btn-primary" value="SAVE">
                <input type="button" class="btn- btn-warning" value="CLEAR">
                </form>

                <table class="table table-dark">
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    <tr>
                    <td>1</td>
                    <td>I have to learn Laravel Today</td>
                    <td>Not yet</td>                   
                    </tr>
                </table>
            
            </div>
        </div>
    </div>
    </div>
</body>
</html>