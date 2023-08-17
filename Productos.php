<?php
class ProductManager {
    private $products = array();

    // Agregar un producto
    public function agregarProducto($nombre, $tipo) {
        $producto = array('nombre' => $nombre, 'tipo' => $tipo);
        $this->products[] = $producto;
    }

    // Modificar un producto por índice
    public function modificarProducto($indice, $nombre, $tipo) {
        if (isset($this->products[$indice])) {
            $this->products[$indice]['nombre'] = $nombre;
            $this->products[$indice]['tipo'] = $tipo;
        }
    }

    // Eliminar un producto por índice
    public function eliminarProducto($indice) {
        if (isset($this->products[$indice])) {
            unset($this->products[$indice]);
            $this->products = array_values($this->products); // Reindexar el array
        }
    }

    // Mostrar todos los productos
    public function mostrarProductos() {
        foreach ($this->products as $indice => $producto) {
            echo "Producto $indice: Nombre: {$producto['nombre']}, Tipo: {$producto['tipo']}\n";
        }
    }
}

// Uso de la clase ProductManager
$manager = new ProductManager();

$manager->agregarProducto('Vaca', 'Ganadería');
$manager->agregarProducto('Oveja', 'Ganadería');
$manager->agregarProducto('Panel solar', 'Electrificación');

$manager->mostrarProductos();

$manager->modificarProducto(0, 'Nueva Vaca', 'Ganadería');

$manager->mostrarProductos();

$manager->eliminarProducto(1);

$manager->mostrarProductos();

?>






