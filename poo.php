<!-- Estrutura Classes -->
<!-- Sintaxe para criar uma classe -->
<!-- Class, seguida do nome da classe e um par de chaves ("{}") -->
<?php
class MinhaClasse
{
    //Propriedades e métodos da Classe vem aqui
}
?>
<!-- Intanciada e guarda variavel usando a palavra chave new -->

$obj = new MinhaClasse:

<!-- Visualizar conteúdo da classe, usamos var_dump() -->

<!-- Exemplo completo de class e instancia de Objeto recebendo valor mini -->

<?php
class MinhaClass
{
    //Propriedades e métodos da classse vem aqui
}
$obj = new MinhaClass;
var_dump($obj);
?>
<!-- // Definindo as Propriedades da classe -->
<!-- // Usamos as propriedades, que são variáveis especificas a classe -->
<!-- Funcionalidade particulares que os objetos serão capazes de executar, são definidas dentro das classes na forma de metodos -->

<?php
class MinhaClass{
    public $prop1 = "Sou um propriedade de classe!";

}
$prop1 = new MinhaClass;
var_dump($prop1);

?>

<!-- Para ver o valor da propriedade -->
<!-- Echo $obj->prop1 -->
<!-- o uso da flecha (->) e um construtor de POO -->

<?php
class MinhaClass{
    public $obj = "Sou uma propriedade de classe";
}
$obj = new MinhaClass;
var_dump($sql);
?>

<?php
class MinhaClass {
    public $prop1 = "Sou ima propriedade de classe!";
    public function setProperty($newval){
        $this ->prop1 = $newval;
    }
    public function getProperty(){
        return $this ->prop1 . "<br />";
    }
}
$obj = new MinhaClasse;
echo $obj->getProperty(); //Lê o valor da propriedade
$obj->setProperty("Sou um novo valor da propriedade!"); // Atribui um novo valor
echo $obj->getProperty();// Lê o valor novamente para mostrar a mudança
?>

<!-- Usando Construtores e Destruidores -->

<!-- O método construtor de uma classe sempre é executando quando um objeto da classe é instanciado. É um tipo especial de função do PHP. Normalmente o programador utiliza. -->
<?php 
class MinhaClasse{
    public $prop1 = "Sou uma propriedade de class";
    public function __construct(){

        echo 'A class "' , __CLASS__ ,'"Foi instanciada <br/>';
    }
    public function setProperty ($newval)
{
    $this->prop1 = $newval;
}
public function getProperty (){
    return $this->prop1 . "<br/>";
}
}

// Cria um novo objeto
$obj = new MinhaClass;
// Mostra o valor de $prop1
echo $obj->getProperty();
// Mostra uma mensagem no final do arquivo

echo"Fim do arquivo. <br/>";

// __CLASS__ retorna o nome da classe na qual foi usado, função quando um objeto for destruido

?>