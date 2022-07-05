<?php 

    foreach ($generico as $gen){
        echo "<tr>";
            echo "<td>".$gen[$campoId]."</td>";
            echo "<td>".$gen[$campoNombre]."</td>";
            //Boton de editar
                        
            echo "<td> <a href='".getUrl("Generico", "Generico", "getUpdate",array("tabla"=>$tabla, "campo"=>$campo, "id"=>$gen[$campoId]))."'> <button class='btn_search w3-button w3-blue w3-round-large'>Editar</button></a></td>";
            ?>
            <!-- Boton de Eliminar -->
            <td> <a href='<?php echo getUrl("Generico","Generico","getDelete", array("tabla"=>$tabla, "campo"=>$campo, "id"=>$gen[$campoId]))?>'>
                <button class='btn_search w3-button w3-red w3-round-large'>Eliminar</button></a></td>
            </tr>

<?php }
?>
        </tbody>
    </table>
</div>

<br><br><br><br><br><br>