<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
?>
<table border="solid 1px">
<?php for($i=1; $i < $datos[0]; $i++ ): ?>    
    <tr>
<?php for($j=1; $j < $datos[1]; $j++): ?>        
        <td></td>
<?php endfor; ?>
    </tr>
<?php  endfor; ?>
</table>