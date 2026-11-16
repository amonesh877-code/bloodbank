<!DOCTYPE html>
<html>
<head>

<style>
button{ width:120px; height:70px; background:#d32f2f; color:black; border:none; margin:15px; font-size:22px; border-radius:10px; cursor:pointer;

button:hover{
background:darkred;
}
</style>

<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="content">

<div style="text-align:center; margin-top:30px;">

<button onclick="window.location.href='search.php?blood=A%2B'">A+</button>
<button onclick="window.location.href='search.php?blood=A-'">A-</button>
<button onclick="window.location.href='search.php?blood=B%2B'">B+</button>
<button onclick="window.location.href='search.php?blood=B-'">B-</button>

<br><br>

<button onclick="window.location.href='search.php?blood=O%2B'">O+</button>
<button onclick="window.location.href='search.php?blood=O-'">O-</button>
<button onclick="window.location.href='search.php?blood=AB%2B'">AB+</button>
<button onclick="window.location.href='search.php?blood=AB-'">AB-</button>


</body>
</html>