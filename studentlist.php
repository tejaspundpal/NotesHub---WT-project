<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Karla&display=swap');

        .list-title {
            color: white;
            text-align: center;
            line-height: 5rem;
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            font-family: 'Karla', sans-serif;
            color: #444;
            background-color: #fff;
            border: 1px solid #ddd;
            text-align: left;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 3rem;
        }

        th,
        td {
            padding: 12px;
        }

        th {
            background-color: #eee;
            font-weight: bold;
            text-transform: uppercase;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody td {
            border-top: 1px solid #ddd;
        }

        @media (max-width: 600px) {

            th,
            td {
                padding: 8px;
            }
        }
    </style>
</head>

<body style="background-color: #e8e8e8;">
    <h1 class="list-title" style="color: black;">List of Registered Students</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>PRN</th>
                <th>Mobile No</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';

            $selectquery = "SELECT * FROM user";
            $query = mysqli_query($conn, $selectquery);
            $num = mysqli_num_rows($query);

            //   echo $num;
            

            // echo $res[0];
            while ($res = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $res['name']; ?>
                    </td>
                    <td>
                        <?php echo $res['prn']; ?>
                    </td>
                    <td>
                        <?php echo $res['number']; ?>
                    </td>
                    <td>
                        <a style="color:#444;" href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>