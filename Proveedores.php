<?php
public function gestionarProveedores() {
        while (true) {
            echo "Gestionar Proveedores:\n";
            echo "1. Agregar Proveedor\n";
            echo "2. Modificar Proveedor\n";
            echo "3. Borrar Proveedor\n";
            echo "4. Volver al Menú Principal\n";
            
            $choice = readline("Seleccione una opción (1-4): ");
            switch ($choice) {
                case '1':
                    $this->agregarProveedor();
                    break;
                case '2':
                    $this->modificarProveedor();
                    break;
                case '3':
                    $this->borrarProveedor();
                    break;
                case '4':
                    return;
                default:
                    echo "Opción inválida.\n";
            }
        }
    }
    public function agregarProveedor() {
        // Lógica para agregar un proveedor
        echo "Proveedor agregado exitosamente.\n";
    }

    public function modificarProveedor() {
        // Lógica para modificar un proveedor
        echo "Proveedor modificado exitosamente.\n";
    }

    public function borrarProveedor() {
        // Lógica para borrar un proveedor
        echo "Proveedor borrado exitosamente.\n";
    }
}
?>