<head>
    <style>
        body{
            background-color: rgb(255, 254, 34);
        }
        table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
  width left: 50%;
  width right: 50%;
  width: 40%;
  height: auto;
  margin: 15% auto 15% auto;
  padding: 1px;
  background-color: rgb(255, 255, 255);
  
}
    </style>
</head>
<table>
    <tr>
        <td><b>FIRST NAME</b></td>
        <td><b>LAST NAME</b></td>
        <td><b>TOTAL</b></td>
    </tr>
    <?php foreach($list as $lv):?>
    <tr>
        <td><?php echo $lv->plug_customer_name?></td>
        <td><?php echo $lv->plug_customer_last_name?></td>
        <td><?php echo $lv->sum?></td>
    </tr>
    <?php endforeach?>
</table>