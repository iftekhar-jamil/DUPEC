<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <style>
        body{

        }
        div{
            border: 1px solid darkred;
        }
        #mainDiv{
            background-color: gray;
            width: 80%;
            margin: 0px auto;
            min-height: 600px;
        }
        #mainContent{
            height: 400px;
            background-color: pink;
        }
        #banner{
            background-color: #9c27b0;
            width:100%;
            background-size:cover;
            height: 150px;
        }
        #footer{
            height: 50px;
        }
        #leftNav{
            width: 20%;
            float: left;
            height: 100%;
        }
        #content{
            width: 60%;
            float: left;
            height: 100%;
            border-width: 1px 0px 1px 1px;
        }
        #rightNav{
            width: 20%;
            float: right;
            height: 100%;
        }
        #clear{
            clear: both;
        }
        .menuItem{
            padding-top: 20px;
            padding-left: 20px;
            padding-bottom: 24px;
        }

        /* divide css*/
        #linkPart{
            float: top;
            width: 100%;
            height: 70%;
            background-color: blueviolet;
        }

        #imgPart{
            float: top;
            width: 100%;
            height: 30%;
            background-color: dodgerblue;
        }

        #imgPart img{
            margin: 5px;
            width: 100%;
            height: 100%;
        }


        #example-link a {
            padding-left: 15px;

            text-decoration: none;


        }
    </style>
</head>
<body id="mainDiv">
<div>
    <div id="banner"></div>
    <div id="mainContent">
        <div id="leftNav">
            <div class="menuItem">Home</div>
            <div class="menuItem">Line breaks</div>
            <div class="menuItem">tags</div>
            <div class="menuItem">table</div>
            <div class="menuItem">forms</div>
            <div class="menuItem">Lists</div>
        </div>
        <div id="content">dfd</div>
        <div id="rightnav">dfddf</div>

    </div>

</div>
<div id="example-link">
    <a href="#">Link to journal article</a>
</div>
<div id="footer">c</div>
</body>
</html>