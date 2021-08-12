<?php

require "../../../admin/modules/link_builder.php";

$link_builder = new link_builder();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Partnering</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
    <body class="bg-dark">
        <div class="container mt-5">
            <form>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Configure your links</h5>
                        </div>
                        <div class="card-body">
                            <div class="card border-dark">
                                <div class="card-header">
                                    <h5>Add a link &quest;</h5>
                                </div>
                                <div class="card-body">
                                    <label class="form-label" for="input_link_hyperlinks">Add a link</label>
                                    <input class="form-control" type="text" name="input_link_hyperlinks" id="input_link_hyperlinks">
                                    <div class="form-text">The link will be visible in the Front-End</div>
                                    <button class="col-4 btn btn-success" type="button" name="add_button_hyperlinks">Add&excl;</button>
                                </div>
                                <div>
                                    <?php
                                        //$link_builder->getLinks();
                                        foreach ($link_builder)
                                    ?>
                                </div>
                            </div>
                            <div class="card mt-3 border-success">
                                <div class="card-header">
                                    <h5>Your links</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Link
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Added-Date
                                                    </th>
                                                    <th>
                                                        Delete
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        ex-link
                                                    </td>
                                                    <td>
                                                        ex-Name
                                                    </td>
                                                    <td>
                                                        ex-Date
                                                    </td>
                                                    <td>
                                                        <button class="col-12 btn btn-danger" name="delete_button_hyperlinks">Delete</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>