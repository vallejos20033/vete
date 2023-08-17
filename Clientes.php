<?php
$arrayClientes = [];
global $arrayClientes;
  

class Clientes{

    private $nombre;
    private $apellido;
    private $cuit;
    private $telefono;
    private $direccion;
    private $iva;
    private $localidad;
    public function __construct($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cuit = $cuit; 
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->iva = $iva;
        $this->localidad = $localidad;
    }



        public function getnombre(){
            return $this->nombre;
        }

     
        public function getapellido(){
            return $this->apellido;
        }

        public function getCuit(){
            return $this->cuit; 
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getIva(){
            return $this->iva;
        }

        public function getLocalidad(){
            return $this->localidad;
        }






}

function menuClientes(){
     echo "---------------------\n";
    echo "0)- VOLVER AL MENU DE INICIO \n";
    echo "1)- TOTAL CLIENTES \n";
    echo "2)- AGREGAR CLIENTE \n";
    echo "3)- ELIMINAR CLIENTES \n";
    echo "4)- BUSCAR CLIENTES \n";

    $opción = readline();

    switch($opción){
        case "0":
            echo "Volviendo al menu inicial\n";
  //          menuInicio();

        case "1":
            mostrarClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
            break;
           
        case "2":
            echo "AGREGAR CLIENTES". PHP_EOL;
            agregarClientes( $nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
            break; 
          
        case "3":
            echo "QUE NOMBRE DE CLIENTE DESEA ELIMINAR?  \n";
            $nombre = readline();
            echo "EL CLIENTE $nombre FUÉ ELIMINADO CON ÉXITO \n";  
            eliminarClientes = $;
            menuClientes($arrayClientes);
            break;
              
            
            class Clientes{
            
                private $nombre;
                private $apellido;
                private $cuit;
                private $telefono;
                private $direccion;
                private $iva;
                private $localidad;
                public function __construct($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad){
            
                    $this->nombre = $nombre;
                    $this->apellido = $apellido;
                    $this->cuit = $cuit; 
                    $this->telefono = $telefono;
                    $this->direccion = $direccion;
                    $this->iva = $iva;
                    $this->localidad = $localidad;
                }
            
            
            
                    public function getnombre(){
                        return $this->nombre;
                    }
            
                 
                    public function getapellido(){
                        return $this->apellido;
                    }
            
                    public function getCuit(){
                        return $this->cuit; 
                    }
            
                    public function getTelefono(){
                        return $this->telefono;
                    }
            
                    public function getDireccion(){
                        return $this->direccion;
                    }
            
                    public function getIva(){
                        return $this->iva;
                    }
            
                    public function getLocalidad(){
                        return $this->localidad;
                    }
            
            
            
            
            
            
            }
            
            function menuClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad){
                
            
            
                echo "MENÚ CLIENTES \n";
                echo "---------------------\n";
                echo "0)- VOLVER AL MENU DE INICIO \n";
                echo "1)- TOTAL CLIENTES \n";
                echo "2)- AGREGAR CLIENTE \n";
                echo "3)- ELIMINAR CLIENTES \n";
                echo "4)- BUSCAR CLIENTES \n";
            
                $opción = readline();
            
                switch($opción){
                    case "0":
                        echo "Volviendo al menu inicial\n";
                        menuInicio($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
            
                    case "1":
                        mostrarClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
                        break;
                       
                    case "2":
                        echo "AGREGAR CLIENTES". PHP_EOL;
                        agregarClientes( $nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
                        break; 
                      
                    case "3":
                        echo "QUE NOMBRE DE CLIENTE DESEA ELIMINAR?  \n";
                        $nombre = readline();
                        echo "EL CLIENTE $nombre FUÉ ELIMINADO CON ÉXITO \n";  
                        eliminarCliente($nombre, $apellido);
                        menuClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);    
                        break; 
            
                    default:
                    echo "Opción inválida, por favor seleccione una de las opciones mostradas \n";
                    echo "_________________________________" .PHP_EOL;
                    menuClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
                    break;    
                }
            
            
            }
            
            
            
            function agregarClientes($arrayClientes){
            
                global $arrayClientes;
               
            
                do{
            
                echo "Ingrese el nombre del cliente para ser agregado: \n";
                $nombre = readline();
                echo "El nombre ingresado es: " . ($nombre) . PHP_EOL;
            
                echo "Ingrese el apellido: \n";
                $apellido = readline();
                echo "El apellido ingresado es: " . ($apellido) .  PHP_EOL;
            
                echo "Ingrese el cuit: \n";
                $cuit = readline();
                echo "El cuit ingresado es: " . ($cuit) .  PHP_EOL;
            
                echo "Ingrese el telefono: \n";
                $telefono = readline();
                echo "El telefono ingresado es: " . ($telefono) .  PHP_EOL;
            
                echo "Ingrese direccion: \n";
                $direccion = readline();
                echo "La direccion ingresada es: " . ($direccion) .  PHP_EOL;
            
                echo "Ingrese el iva: \n";
                $iva = readline();
                echo " Es: " . ($iva) .  PHP_EOL;
            
                echo "Ingrese el localidad: \n";
                $localidad = readline();
                echo "La localidad ingresada es: " . ($localidad) .  PHP_EOL;
            
            
                echo "Desea guardar datos del cliente? \n";
                $arrayClientes= readline();
            
                echo "------------------------------" . PHP_EOL;
            
                $arrayClientes[] =new Clientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
            
                echo "¿Desea agregar un nuevo cliente? \n";
                $continuar = readline();
                } while ($continuar=='s' || $continuar=='S');    
            
            
                var_dump($arrayClientes);
                
                
                
            
                $ultimoClientes = end($arrayClientes);
                
                echo "Nombre: " . $ultimoClientes->getnombre() . "\n";
                echo "Apellido: " . $ultimoClientes->getapellido() . "\n";
                echo "Cuit: " . $ultimoClientes->getCuit() . "\n";
                echo "Telefono: " . $ultimoClientes->getTelefono() . "\n";
                echo "El cliente fue cargado con éxito!! \n ";
                echo "La cantidad total de clientes es: " . count($arrayClientes) . PHP_EOL;
                
                menuPosteriorClientes();
            
            }
            
            function menuPosteriorClientes ($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad){
                    
                global $arrayClientes;
             
            
                echo "¿Desea agregar otro cliente?". "\n"; 
                echo "S/N" . "\n";
            
                $opcion = readline();
            
                    switch($opcion){
                case "s":
                    agregarClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
                    break;
                case "n":
                    menuInicio($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
                    break; 
                default:
                    echo "tecla incorrecta, por favor ingresa n/s";
                    menuPosteriorClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);    
                    break;
            }          
            }

            menuClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);    
            break; 

        default:
        echo "Opción inválida, por favor seleccione una de las opciones mostradas \n";
        echo "_________________________________" .PHP_EOL;
        menuClientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);
        break;    
    }


}
?>