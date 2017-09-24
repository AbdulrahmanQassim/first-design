<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/ts.css">
    <title>Curriculum Vitae</title>
    <style>
        body {
          margin: 0;
            padding: 0;
            font-family: "Ubuntu Mono derivative Powerline";
        }
        table{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            border: 1px;
        }
        table tr th{
            padding: 10px;
        }
        table tr td{
            background-color: lightseagreen;
            padding: 10px;
        }
    </style>

</head>
<body>
<h1 class="class">Curriculum Vitae</h1>
<form class="nav">
    <input type="submit" value="Home">
    <input type="submit" value="Skills">
    <input type="submit" value="About">
    <input type="submit" value="My Picture">
    <input type="text" value="search"  >

</form>

<h2 class="name">ABDULRAHMAN QASSIM KHALID
<button type="button" onclick="alert('Abdulrahman Qassim\n' +
 'from Baghdad\n'+
'graduated from Computer Engineering Technology\n'+
'Communications Networks of Computer department')">Read Me!</button></h2>


<h2 class="img">
    <img src="pic/picture.jpg" alt="my picture"  ></h2>
<hr style="align-content: center">
<h2 class="skill">MY SKILLS</h2>

<h2 class="imgg"><img src="pic/cc.png">
    <img src="pic/download.png">
    <img src="pic/matlab.jpg">
    <img src="pic/autocad.png">
    <img src="pic/tracer.jpg">
    <img src="pic/cc.png">
    <img src="pic/css.png">
    </h2>
<br>
<hr>
<h3 align="center"><bold>From this table you can know a ratio to my skills </bold></h3>
<h2 class="phhp">
    <?php
$tasks =[
    ['Skill'=>'C++','Ratio'=>"50%"],
    ['Skill'=>'Matlab','Ratio'=>"80%"],
    ['Skill'=>'Cisco','Ratio'=>"60%"],
    ['Skill'=>'Css','Ratio'=>"40%"],
    ['Skill'=>'Html','Ratio'=>"60%"],
    ['Skill'=>'AutoCad','Ratio'=>"50%"]
]
?>
<table border="1">
    <tr style="background-color: cyan;color: black;">
        <th>Skill</th>
        <th>Ratio</th>
    </tr>
    <?php foreach ($tasks as $item): ?>
        <tr>
            <td><?php echo $item['Skill']; ?></td>
            <td><?php echo $item['Ratio']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</h2>


<div class="about">
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consectetur doloremque doloribus, facilis fugiat
        fugit hic incidunt iure laboriosam magni nulla possimus provident quam, quas, quidem sit unde vitae voluptates!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab amet animi, doloribus eveniet, facere harum
        maiores, neque nostrum possimus recusandae sapiente sunt. Maxime molestiae placeat sit suscipit veniam
        voluptatum.
    </p>
</div>

<h3 class="copy">Copyright 2017</h3>

</body>
</html>