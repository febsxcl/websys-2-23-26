<?php 
include 'server.php';
if(!isset($_COOKIE['Username'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 30px 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            padding: 30px;
            margin-top: 20px;
        }
        label {
            color: #667eea;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 10px;
            display: block;
        }
        .text.primary {
            color: #764ba2;
            font-weight: 700;
            font-size: 18px;
        }
        .table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        .table-dark {
            background: linear-gradient(135deg, #2d3561 0%, #3d4a7f 100%) !important;
            color: white;
        }
        .table-dark th {
            background: linear-gradient(135deg, #1a1f3a 0%, #2d3561 100%);
            color: white;
            font-weight: 600;
            border: none;
        }
        .table-dark td {
            border-color: rgba(255, 255, 255, 0.1);
            color: #f0f0f0;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }
        .table-striped tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .header-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            padding: 25px 30px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .user-label {
            color: #667eea;
            font-weight: 600;
            font-size: 14px;
            margin: 0;
        }
        .username-display {
            color: #764ba2;
            font-weight: 700;
            font-size: 18px;
            margin: 0;
        }
        .btn-logout {
            background: #764ba2;
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .btn-logout:hover {
            background: #653a85;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }
    </style>
<body>
    <div class="header-section">
        <div class="user-info">
            <div>
                <p class="user-label">Logged in as</p>
                <p class="username-display"><?php echo $_COOKIE['Username']; ?></p>
            </div>
        </div>
        <form action="server.php" method="POST" style="margin: 0;">
            <button type="submit" name="Logout" class="btn-logout">Logout</button>
        </form>
    </div>
    <div class="container">
        <?php
        if($update==true):
    ?>
    <form action="server.php" method="POST">
        <div class="form-group contrainer">
            <input type="text" name="ID" class="form-control" value="<?php echo $row['ID']; ?>">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $row['Username']; ?>" placeholder="Enter Username">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['Name']; ?>" placeholder="Enter Username">
            <div class="form-group d-flex justify-content-end">
                <button type="Submit" name="cancel-edit" class="btn btn-primary">Cancel</button>
                <button type="Submit" name="update" class="btn btn-success">Update</button>
            </div>
            </input>
        </input>
        </input>
        </div>
    </form>
    <?php endif ?>

    <table class="table table-striped container table-dark">
    <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Name</th>
    <th>Password</th>
    <th colspan = "2" class = "text-center"> Action</th>
    </tr>
    <?php 
	while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['Username']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Password']; ?></td>
    <td class = "text-center"> <a href = "index.php?edit=<?php echo $row ['ID'];?>" class='btn btn-primary'>Edit</td>
    <td class = "text-center"> <a href = "server.php?del=<?php echo $row ['ID'];?>" class='btn btn-danger'>Delete</td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>