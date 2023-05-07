<?php
    class Usuario
    {
        private $conn;
    
        public function __construct($conn)
        {
            $this->conn = $conn;
        }
    
        // ... otros métodos de la clase ...
    
        public function existeCorreo($correo)
        {
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM tbl_usuarios WHERE mail_user = ?");
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();
    
            return $count > 0;
        }
    }
?>