function confirmar_eliminar(clave)
{if(confirm ("¿Estas seguro de que desea eliminar el registro?"))
    {   window.location.href='eliminar_producto.php?Id_producto='+clave;
    }
    else
    {
        window.location.href='productos.php';
    }
}  
function confirmar_elimina(clave)
{if(confirm ("¿Estas seguro de que desea eliminar el registro?"))
    {   window.location.href='eliminar_cliente.php?Id_cte='+clave;
    }
    else
    {
        window.location.href='clientes.php';
    }
}     
function confirmar_elimin(clave)
{if(confirm ("¿Estas seguro de que desea eliminar el registro?"))
    {   window.location.href='eliminar_empleado.php?Id_empleado='+clave;
    }
    else
    {
        window.location.href='empleados.php';
    }
} 
function confirmar_elimi(clave)
{if(confirm ("¿Estas seguro de que desea eliminar el registro?"))
    {   window.location.href='eliminar_venta.php?Id_venta='+clave;
    }
    else
    {
        window.location.href='Ventas.php';
    }
} 
