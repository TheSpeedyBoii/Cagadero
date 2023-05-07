<?php
    class Usuario{
        private $conexion;

        public function __construct($conexion){
            $this->conexion = $conexion;
        }

    public function agregarUsuario($nombre, $correo, $contrasena){
        $stmt = $this->conexion->prepare("INSERT INTO tbl_usuarios(name_user, mail_user, pass_user) VALUES(?,?,?)");
        $stmt->bind_param("sss", $nombre, $correo, $contrasena);
        $stmt->execute();
        $stmt->close();
    }
}
?>