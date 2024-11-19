<?php
class Usuario {
    public $nombre, $contrasena, $email, $telefono, $direccion;

    // Constructor privado para evitar creación directa
    public function __toString() {
        $salida = $this->nombre. "<br>" .$this->contrasena . "<br>" .$this->email. "<br>" .$this->telefono. "<br>". $this->direccion;
        return $salida;
     }

    // Métodos getter
    public function getNombre() { return $this->nombre; }
    public function getContrasena() { return $this->contrasena; }
    public function getEmail() { return $this->email; }
    public function getTelefono() { return $this->telefono; }
    public function getDireccion() { return $this->direccion; }

}
    // Clase interna Builder
    class UsuarioBuilder {
        private $nombre;
        private $Contrasena;
        private $email;
        private $telefono;
        private $direccion;

        // Método para establecer nombre
        public function setNombre($nombre) {
            $this->nombre = $nombre;
            return $this;
        }

        // Métodos para otros atributos
        public function setContrasena($contrasena) {
            $this->Contrasena = $contrasena;
            return $this;
        }

        public function setEmail($email) {
            $this->email = $email;
            return $this;
        }

        public function setTelefono($telefono) {
            $this->telefono = $telefono;
            return $this;
        }
        public function setDireccion($direccion) {
            $this->direccion = $direccion;
            return $this;
        }

        // Método para construir el objeto final
        public function build() {
            $usuario = new Usuario();
            $usuario->nombre = $this->nombre;
            $usuario->contrasena = $this->Contrasena;
            $usuario->email = $this->email;
            $usuario->telefono = $this->telefono;
            $usuario->direccion = $this->direccion;
            return $usuario;
        }

    
    }
    Class Encuesta{
        public $valorinicial, $ds, $email, $telefono, $direccion;
    }
?>