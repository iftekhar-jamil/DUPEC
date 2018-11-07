
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        #mainDiv{


            margin: 0px auto;
            min-height: 900px;
            color: #53151f;
        }

        #banner{
            padding-top: 40px;
            color: white;
            font-size: 50px;
            background-color: #333e67;

            width:100%;
            background-size:cover;
            height: 150px;

        }

        #mainContent{
            height: 800px;

        }

        #leftNav{
            color: #a3a3a3;
            background-color: #364773;
            float: left;
            width: 15%;
            height: 100%;
            background-size: contain;

            /*background-color: darkred;*/
        }

        #leftNav span,a{
            text-align: center;
            text-decoration: none;
            color: #bcc9bc;
        }

        #content{
            padding-left: 20px;
            float: left;
            width: 85%;
            height: 100%;
            background-color: #aaaaaa;
        }

        #content h2{
            text-align: center;
        }
        #footer{
            width: 100%;
            height: 50px;
            background-color: black;
        }

        #btn {

            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px 4px 2px;
            cursor: pointer;
        }
        .approve{
            background-color: #1c9715;
        }
        .cancel{
            background-color: #7a1b28;
        }
        th,td{
            text-align: center;
            padding-bottom: 4px;
        }
        table{

            width: 90%;
            font-size: 16px;

        }
        #p1{
            margin-left: 30px;
        }

        #aprvd{
            background-color: #00CC00;
            text-align: center;
            color: white;
            height: 10%;
        }

        #rmvd{
            background-color: darkred;
            text-align: center;
            color: white;
        }

    </style>
</head>
<body id="mainDiv">
<div>
    <div id="banner">
        <p align="left" id="p1">Inventory Management System</p>

    </div>

    <div id="mainContent">
        <div id="leftNav">
            <span><a href="#"><h3>Home</h3></a>
                <a href="#"><h3>Users </h3></a></span>

        </div>
        <div id="content">


            <h2>Users request</h2><br>
            <table border="1" cellpadding="5" >
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>University</th>
                    <th>Department</th>
                    <th> Designation </th>
                    <th> Action</th>

                </tr>
                <?php foreach ($req as $request): ?>
                    <tr>
                        <td><?php echo $request['name'] ?></td>
                        <td><?php echo $request['email'] ?></td>
                        <td><?php echo $request['university'] ?></td>
                        <td><?php echo $request['department'] ?></td>
                        <td><?php echo $request['designation'] ?></td>
                        <td>
                            <form method="post" action="<?php echo base_url();?>/admin/authenticate">
                                <input type="submit" name="action" value="Approve" id="btn" class="approve"/>
                                <input type="submit" name="action" value="Cancel" id="btn" class="cancel"/>
                                <input type="hidden" name="email" value="<?php echo $request['email']; ?>"/>
                            </form>
                        </td>
                    </tr>

                <?php endforeach;?>

            </table>



        </div>


    </div>
</div>

<div id="footer"></div>
</div>


</body>
</html>