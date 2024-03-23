<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sticky Header</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    .header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 10px;
    }
    .content {
        padding-top: 80px; /* Adjust this value based on the header height */
    }
    
    img{
        width: 70px;
        margin-right: 10px;
    }
    .green{
        color: #2ace5e;
        font-size: 2em;
        font-weight: 700;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
    }
    .white{
        color: white;
        font-size: 2em;
        font-weight: 700;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
    }
    a{
        text-decoration: none;
    }
    @media screen and (max-width: 768px) {
        .container {
            padding: 10px;
        }
        .content {
            padding-top: 100px; /* Adjust this value based on the header height */
        }
    }
</style>
</head>
<body>
<a href="jobs.nordpak.org">
<div class="header">
  <img src="headLogo.png" alt="hirenowLogo" >  <p class="green">H<p class="white">ire</p></p> <p class="green">N<p class="white">ow</p></p>
</div></a>


</body>
</html>
