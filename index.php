<!DOCTYPE html>
<html>
<head>
<title>Blood Bank</title>
<style>
        body{
            margin:0;
            padding:0;
            font-family:Arial, sans-serif;
            background:#f3f3f3;
        }

        .main{
            width:100%;
            text-align:center;
            padding:30px 0 50px;
        }

        .title{
            font-size:60px;
            font-weight:bold;
            color:#c40000;
            margin-top:10px;
            text-align:center;
        }

        .title span{
            font-size:70px;
            margin-right:15px;
            text-align:center;
        }

        .subtitle{
            color:#666;
            font-size:28px;
            margin-top:25px;
            margin-bottom:40px;
        }

        .line{
            width:80%;
            height:2px;
            background:#f2b8b8;
            margin:20px auto;
            position:relative;
        }

        .line::before{
            content:"";
            position:absolute;
            left:120px;
            top:-12px;
            width:120px;
            height:25px;
            border-bottom:3px solid #e57373;
            transform:skewX(-40deg);
        }

        .cards{
            width:90%;
            margin:auto;
            display:grid;
            grid-template-columns:repeat(4, 1fr);
            gap:25px;
        }

        .card{
            background:white;
            border-radius:15px;
            box-shadow:0px 3px 12px rgba(0,0,0,0.15);
            padding:20px;
        }

        .box{
            border-radius:12px;
            overflow:hidden;
        }

        .top{
            background:linear-gradient(to bottom, #ff2b2b, #d40000);
            color:white;
            font-size:55px;
            font-weight:bold;
            padding:20px 0;
        }

        .middle{
            background:#e60000;
            color:white;
            font-size:28px;
            font-weight:bold;
            padding:15px 0;
            border-top:1px solid rgba(255,255,255,0.5);
        }

        .bottom{
            color:white;
            font-size:24px;
            font-weight:bold;
            padding:12px 0;
        }

        .green{
            background:#38a322;
        }

        .orange{
            background:#f28c00;
        }

        .red{
            background:#d62828;
        }

        .button-area{
            margin-top:50px;
        }

        .btn{
            background:linear-gradient(to bottom, #ff2b2b, #c40000);
            color:white;
            border:none;
            padding:20px 60px;
            font-size:30px;
            font-weight:bold;
            border-radius:12px;
            cursor:pointer;
            box-shadow:0px 5px 12px rgba(0,0,0,0.2);
        }

        .btn:hover{
            background:linear-gradient(to bottom, #e60000, #990000);
        }

        @media(max-width:1000px){
            .cards{
                grid-template-columns:repeat(2,1fr);
            }
        }

        @media(max-width:600px){
            .cards{
                grid-template-columns:1fr;
            }

            .title{
                font-size:40px;
            }
        }
</style>

<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="menu">

<h2>🩸Blood Bank</h2>

<a href="blood.php">🩸Blood</a>
<a href="donor.php">New Donor</a>
<a href="donor_records.php">Donor Records</a>
<a href="reports.php">Reports</a>
<a href="#">Close</a>

</div>

<div class="content">

<h1>🩸Blood Bank Management System</h1>

<div style="text-align:center; margin-top:40px;">

<button onclick="window.location.href='search.php?blood=A%2B'" class="btn">A+</button>
<button onclick="window.location.href='search.php?blood=A-'" class="btn">A-</button>
<button onclick="window.location.href='search.php?blood=B%2B'" class="btn">B+</button>
<button onclick="window.location.href='search.php?blood=B-'" class="btn">B-</button>

<br><br>

<button onclick="window.location.href='search.php?blood=O%2B'" class="btn">O+</button>
<button onclick="window.location.href='search.php?blood=O-'" class="btn">O-</button>
<button onclick="window.location.href='search.php?blood=AB%2B'" class="btn">AB+</button>
<button onclick="window.location.href='search.php?blood=AB-'" class="btn">AB-</button>

<br><br>

<button onclick="window.location.href='view_requests.php'" class="btn">
🚨 View Emergency Requests
</button>

<button onclick="window.location.href='expiry_status.php'" class="btn">
🩸 Blood Expiry Status
</button>

</div>

<a class="btn" href="institute.php">Institution</a>
<a class="btn" href="personal.php">Personal</a>

</div>

</body>
</html>