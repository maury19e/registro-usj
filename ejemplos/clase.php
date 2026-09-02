<?php
class persona{
    private string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function saludar(){
        return "Hola,soy $this->nombre y tengo $this->edad años.";
    }
    public function dentrode(int $años):int {
        return $this->edad + $años;
    }

}
$p=new persona("Juan",30);
echo $p->saludar();
echo "\n";
echo "Dentro de 5 años tendré {$p->dentrode(5)} años";