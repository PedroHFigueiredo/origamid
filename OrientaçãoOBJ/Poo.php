

/*Estruturando Classes*/
/*sintaxe para criar uma classe*/ 
/*Class, seguida do nome da classe e um par de chaves ( "{}" ):*/
<?php
class MinhaClass
{
  // Propriedades e métodos da Classe vem aqui 
}
?>

/*Instanciada e guarda variável usando a palavra chave new:*/
 $obj = new MinhaClass;

 /*Visualizar conteúdo da classe, usamos var_dump():*/
 
 /*Exemplo completo de class e instancia de Objeto recebendo valor minhaclass.php*/
 <?php
class MinhaClass
{
  // As propriedades e métodos da Classe vem aqui 
}
$obj = new MinhaClass;
var_dump($obj);
?>

/*Definindo as Propriedades da Classe*/
/*Usamos as propriedades, que são variáveis específicas à classe.*/

Funcionalidades particulares que os objetos serão capazes de executar,
 são definidas dentro das classes na forma de métodos.
 
<?php
class MinhaClass
{
  public $prop1 = "Sou um propriedade de classe!";
}
$obj = new MinhaClass;
var_dump($obj);
?>
/*Para ver o valor da propriedade*/
/*echo $obj->prop1;*/
/*O uso da flecha (->) é um construto da POO*/

<?php
class MinhaClass
{
  public $prop1 = "Sou um propriedade de classe!";
}
$obj = new MinhaClass;
echo $obj->prop1; // Mostra a saída/conteúdo da propriedade 
?>



/*Definindo Métodos de Classe*/
/*Métodos são funções específicas das classes*/
<?php
class MinhaClass
{
  public $prop1 = "Sou um propriedade de classe!";
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
$obj = new MinhaClass;
echo $obj->prop1;
?>

/* "this"permite que os objetos referenciem-se usando $this.
Quando estiver dentro de um método, use $this da mesma 
forma que você usaria o nome do objeto fora da classe.*/

<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
$obj = new MinhaClass;
echo $obj->getProperty(); // Lê o valor da propriedade 
$obj->setProperty("Sou um novo valor da propriedade!"); // Atribui um novo valor 
echo $obj->getProperty(); // Lê o valor novamente para mostrar a mudança 
?>


/*O poder da orientção objeto mostra-se ao usar múltiplas
 instâncias da mesma classe.*/



<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
// Create two objects 
$obj = new MinhaClass;
$obj2 = new MnhaClass;
// Mostra o valor de $prop1 de ambos os objetos 
echo $obj->getProperty();
echo $obj2->getProperty();
// Atribui novos valores para ambos os objetos 
$obj->setProperty("Sou um novo valor de propriedade!");
$obj2->setProperty("Pertenço à segunda instância!");
// Mostra o valor de $prop1 de ambos os objetos 
echo $obj->getProperty();
echo $obj2->getProperty();

?>

/*Usando Construtores e Destruidores

O método construtor de uma classe sempre é executando
 quando um objeto da classe é instanciado. É um tipo 
 especial de função do PHP. Normalmente o programador 
 utiliza o método construtor para inicializar os atributos
  de um objeto, como por exemplo: Estabelecer conexão 
  com um banco de dados, abertura de um arquivo que será 
  utilizado para escrita*/
<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
// Cria um novo objeto 
$obj = new MinhaClass;
// Mostra o valor de $prop1 
echo $obj->getProperty();
// Mostra uma mensagem ao final do arquivo 
echo "Fim do arquivo.<br />";
?>
/*_CLASS__ retorna o nome da classe na qual foi usada,
função quando um objeto for destruído*/

Chamar uma função quando um objeto for destruído, 

O método __destruct() está disponível. 
Ele é útil para finalizar as tarefas da classe 
(encerrar uma conexão com a base de dados, por exemplo).

<?php
class Pessoa
{
  function __construct($nome)
 {
   echo "Olá ".$nome." Tudo bem?";
 }
}
?>

<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
// Cria um novo objeto 
$obj = new MinhaClass;
// Mostra o valor de $prop1 
echo $obj->getProperty();
// Mostra uma mensagem ao final do arquivo 
echo "Fim do arquivo.<br />";
?>

/*
O método __destruct() funciona como um finalizador
e, é executado ao finalizarmos um objeto, ou seja, 
quando o objeto é desalocado da memória, quando atribuímos
NULL ao objeto, quando usamos a função unset() no objeto,
ou também quando o programa é fechado.
*/
<?php
function __destruct()
{
echo 'Objeto finalizado';
}
?>

/*Mostre uma mensagem quando um objeto for destruído 
usando o método mágico __destruct() na class MinhaClass:*/

<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
// Cria um novo objeto 
$obj = new MinhaClass;
// Mostra o valor de $prop1 
echo $obj->getProperty();
// Mostra uma mensagem ao final do arquivo 
echo "Fim do arquivo.<br />";
?>

/*método __toString(), tentar mostrar um objeto como 
uma string resulta em um erro fatal. Tente mostrar um
 objeto, usando echo, sem o método*/
<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
// Cria um novo objeto 
$obj = new MinhaClass;
// Mostra o objeto como uma string 
echo $obj;
// Destrói o objeto 
unset($obj);
// Mostra uma mensagem ao final do arquivo 
echo "Fim do arquivo.<br />";
?>

/*Usando Herança de Classe*/
/*Classes podem herdar métodos e 
propriedades de outra classe usando
 a palavra chave extends*/

 <?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function __toString()
  {
      echo "Usando o método toString: ";
      return $this->getProperty();
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
class MinhaOutraClass extends MinhaClass
{
  public function newMethod()
  {
      echo "De um novo método na classe " . __CLASS__ . ".<br />";
  }
}
// Cria um novo objeto 
$newobj = new MinhaOutraClass;
// Usa o método da nova classe 
echo $newobj->newMethod();
// Usa um método da classe pai 
echo $newobj->getProperty();
?>

/*Sobrescrevendo Métodos e Propriedades Herdadas*/ 
/*Alterar uma propriedade ou o comportamento de um 
método existente na nova classe*/

<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function __toString()
  {
      echo "Usando o método toString: ";
      return $this->getProperty();
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
class MinhaOutraClass extends MinhaClass
{
  public function __construct()
  {
      echo "Um novo construtor em " . __CLASS__ . ".<br />";
  }
  public function newMethod()
  {
      echo "De um novo método na classe " . __CLASS__ . ".<br />";
  }
}
// Cria um novo objeto 
$newobj = new MinhaOutraClass;
// Usa o método da nova classe 
echo $newobj->newMethod();
// Usa um método da classe pai 
echo $newobj->getProperty();
?>
/*Preservando Funcionalidades Originais de um Método
 Enquanto Sobrescreve o Mesmo*/
 funcionalidade a um método e, ao mesmo tempo,
manter a funcionalidade do método original intacta, 
use a palavra chave parent juntamente ao operador de 
resolução de escopo (::):

 <?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function __toString()
  {
      echo "Usando o método toString: ";
      return $this->getProperty();
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
class MinhaOutraClass extends MinhaClass
{
  public function __construct()
  {
      parent::__construct(); // Invoca o construtor da classe pai 
      echo "Um novo construtor em " . __CLASS__ . ".<br />";
  }
  public function newMethod()
  {
      echo "De um novo método na classe " . __CLASS__ . ".<br />";
  }
}
// Cria um novo objeto 
$newobj = new MinhaOutraClass;
// Usa o método da nova classe 
echo $newobj->newMethod();
// Usa um método da classe pai 
echo $newobj->getProperty();
?>

/*Atribuindo Visbilidade a Propriedades e Métodos*/

controle adicional sobre objetos, métodos e 
propriedades, atribuímos visibilidades a eles.
Essa visibilidade controla como e de onde as 
propriedades podem ser acessadas. Há três 
palavras chaves para visibilidade: public, 
protected, e private. Em adição à sua visibilidade,
 um método ou propriedade pode ser declarado como 
 static, o que permite que sejam acessados sem uma 
 instanciação da classe.

 /*Métodos e Propriedades Públicas*/

Todos os métodos e propriedades que usamos, 
até agora, eram públicos. Isso significa que
 eles podem ser acessados de qualquer lugar, 
 tanto dentro quanto fora da classe.

/*Métodos e Propriedades Protegidas*/

Quando uma propriedades ou método é declarada 
com protected, ela só pode ser acessada dentro 
dela própria ou por uma classe descendente 
(classes que estendem a classe que contem o 
método protegido).

Declare o método getProperty() como protegido,
na classe MinhaClass, e tente acessá-lo diretamente
fora da classe:

  <?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function __toString()
  {
      echo "Usando o método toString: ";
      return $this->getProperty();
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  protected function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
class MinhaOutraClass extends MinhaClass
{
  public function __construct()
  {
      parent::__construct();
      echo "Um novo construtor em " . __CLASS__ . ".<br />";
  }
  public function newMethod()
  {
      echo "De um novo método na classe " . __CLASS__ . ".<br />";
  }
}
// Cria um novo objeto 
$newobj = new MinhaOutraClass;
// Tentativa de invocar um método protegido fora da classe 
echo $newobj->getProperty();
?>

/*Métodos e Propriedades Privadas*/

/*propriedade ou método declarado com private é 
acessível somente dentro da classe que os define.
Isso significa que mesmo se uma classe estender a 
classe que define uma propriedade privada, aquela 
propriedade (ou método) não será acessível na classe
 filha.

Demonstrar isso, declare getProperty()
como privada dentro da classe MinhaClass, e tente 
invocar callProtected() da classe
MinhaOutraClass:

<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function __toString()
  {
      echo "Usando o método toString: ";
      return $this->getProperty();
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  private function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
class MinhaOutraClass extends MinhaClass
{
  public function __construct()
  {
      parent::__construct();
      echo "Um novo construtor em " . __CLASS__ . ".<br />";
  }
  public function newMethod()
  {
      echo "De um novo método na classe " . __CLASS__ . ".<br />";
  }
  public function callProtected()
  {
      return $this->getProperty();
  }
}
// Cria um novo objeto 
$newobj = new MinhaOutraClass;
// Usa um método da classe pai 
echo $newobj->callProtected();
?>
/*Métodos e Propriedades Estáticas*/ 

/*Para demonstrar isso, adicione uma propriedade 
estática chamada $count e um método estático
chamado plusOne() à classe MinhaClass.*/ 

/*propriedade estática chamada $count e um método
 estático chamado plusOne() à classe MinhaClass.
<?php
class MinhaClass
{
  public $prop1 = "Sou uma propriedade de classe!";
  public static $count = 0;
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
  public function __toString()
  {
      echo "Usando o método toString: ";
      return $this->getProperty();
  }
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
  private function getProperty()
  {
      return $this->prop1 . "<br />";
  }
  public static function plusOne()
  {
      return "O valor é " . ++self::$count . ".<br />";
  }
}
class MinhaOutraClass extends MinhaClass
{
  public function __construct()
  {
      parent::__construct();
      echo "Um novo construtor em " . __CLASS__ . ".<br />";
  }
  public function newMethod()
  {
      echo "De um novo método na classe " . __CLASS__ . ".<br />";
  }
  public function callProtected()
  {
      return $this->getProperty();
  }
}
do
{
  // Invoca o método plusOne sem instanciar a classe MinhaClass 
  echo MinhaClass::plusOne();
} while ( MinhaClass::$count < 10 );
?>