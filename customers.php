<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');


// Instanciar un cliente
$customer = new Customer();

// Obtener un cliente
$customers = $customer->getCustomers();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
        <title> Ver Clientes </title>
    </head>
    <body>
        <div class="container mt-4">
            <div class="btn-group" role="group">
                <a class="btn btn-primary" href="customers.php">Customers</a>
                <a class="btn btn-secondary" href="transactions.php">Transactions</a>
            </div>
            <hr>
            <h2>Clientes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID del cliente</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($customers as $c): ?>
                        <tr>
                            <td><?php echo $c->id; ?></td>
                            <td><?php echo $c->first_name; ?> <?php echo $c->last_name; ?></td>
                            <td><?php echo $c->email; ?></td>
                            <td><?php echo $c->created_at; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <p><a href="index.php">Regresar</a></p>
        </div>
    </body>
</html>
