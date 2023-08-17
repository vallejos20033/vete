<?php
class Menu {
    private $clientes = array();
    private $proveedores = array();
    private $productos = array();
    private $stock = array();

    public function show() {
        while (true) {
            echo "Menú:\n";
            echo "1. Gestionar Clientes\n";
            echo "2. Gestionar Proveedores\n";
            echo "3. Ver Stock\n";
            echo "4. Salir\n";
            
            $choice = readline("Seleccione una opción (1-4): ");
            switch ($choice) {
                case '1':
                    $this->gestionarClientes();
                    break;
                case '2':
                    $this->gestionarProveedores();
                    break;
                case '3':
                    $this->verStock();
                    break;
                case '4':
                    echo "¡Hasta luego!\n";
                    exit;
                default:
                    echo "Opción inválida.\n";
            }
        }
    }
}