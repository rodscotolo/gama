<?php 
$numero = 1;
$count = 0;
?>

<table align="center">
<?php foreach ($leads as $lead): ?>
  <tr>
      <td>
        <?php echo($numero . ' - ');  
        echo $lead->email;
        ?><br/>
    </td>
    <td>
      <?php echo $lead->nome; ?><br/>
  </td>
  <td>
    <?php echo $lead->ip; ?><br/>
</td>
</tr>

<?php 
++$numero;
++$count;
?>
<?php endforeach; ?>

</table>

