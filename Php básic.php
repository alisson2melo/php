//PHP é uma linguagem de script de código aberto amplamente usada

/*
Os scripts PHP são executados no servidor
*\

//O código PHP é executado no servidor e o resultado é retornado ao navegador como HTML simples. a extensão de arquivo é ".php"

*/PHP pode gerar conteúdo de página dinâmica

O PHP pode criar, abrir, ler, gravar, excluir e fechar arquivos no servidor

PHP pode coletar dados de formulário

PHP pode enviar e receber cookies

PHP pode adicionar, excluir, modificar dados em seu banco de dados

PHP pode ser usado para controlar o acesso do usuário

PHP pode criptografar dados

Com o PHP, você não está limitado a gerar HTML. Você pode gerar imagens, arquivos PDF e até filmes em Flash. Você também pode gerar qualquer texto, como XHTML e XML. */

//Abaixo temos um exemplo simples de script escrito em PHP (scripts PHP seguem esse padrão para gerar um texto na página web)

<?php
    echo  "Hello world";
?>

<?php
    echo "Meu texto php para uma página HTML";
?>

//A instrução "echo" é para enviar dados para a tela



//Criação (declaração) de variáveis ​​PHP

//Variáveis ​​são para armazenar informações

//No PHP, uma variável começa com o sinal $, seguido pelo nome da variável

<?php
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
?>

*/Após a execução das instruções acima, a variável '$txt' conterá o valor "Hello world!",

a variável '$x' conterá o valor 5

e a variável '$y' conterá o valor 10.5 /*

//O PHP não tem comando para declarar uma variável. Ele é criado no momento em que você atribui um valor a ele pela primeira vez.

*/Regras para variáveis ​​PHP:

Uma variável começa com o sinal $, seguido pelo nome da variável
O nome de uma variável deve começar com uma letra ou o caractere sublinhado
O nome de uma variável não pode começar com um número
Um nome de variável pode conter apenas caracteres alfanuméricos e sublinhados (Az, 0-9 e _)
Os nomes das variáveis ​​diferenciam maiúsculas de minúsculas ( $age e $AGE são duas variáveis ​​diferentes)*/

*/O PHP instrução 'echo' é freqüentemente usada para enviar dados para a tela.

O exemplo a seguir mostrará como produzir um texto com uma variável*/

<?php
    $txt = "W3Schools.com";
    echo "I love $txt!";
?>

//or

<?php
    $txt = "W3Schools.com";
    echo "I love " . $txt . "!";
?>

//Resultado produzido: 'I love W3Schools.com!'

//Este exemplo produzirá uma soma de duas variáveis

<?php
    $x = 5;
    $y = 4;
    echo $x + $y; //Return "9"
?>


*/PHP é uma linguagem fracamente tipada

No exemplo acima, observe que não precisamos dizer ao PHP qual tipo de dados é a variável.

O PHP associa automaticamente um tipo de dados à variável, dependendo de seu valor.
Como os tipos de dados não são definidos estritamente,
você pode fazer coisas como adicionar uma string a um inteiro sem causar um erro.*/




*/Escopo das Variáveis ​​PHP

No PHP, as variáveis ​​podem ser declaradas em qualquer lugar no script.

O escopo de uma variável é a parte do script onde a variável pode ser referenciada / usada.

PHP tem três escopos de variáveis ​​diferentes:

local

global

estático*/


//Uma variável declarada fora de uma função tem um ESCOPO GLOBAL e só pode ser acessada fora de uma função

//Variável com escopo global

<!DOCTYPE html>
<html>

<body>

    <?php
        $x = 5; // global scope

        function myTest()
        {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        echo "<p>Variable x outside function is: $x</p>";
    ?>

</body>

</html>


//Uma variável declarada dentro de uma função tem um LOCAL SCOPE e só pode ser acessada dentro dessa função

//Uma variável com escopo local

<!DOCTYPE html>
<html>

<body>

    <?php
        function myTest()
        {
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";
    ?>

</body>

</html>


//Resumo: variáveis de escopo local só podem ser acessadas dentro da função que foi declarada,
escopo global variáveis declaradas fora de uma função podem ser usadas em 'qualquer lugar'

//Você pode ter variáveis ​​locais com o mesmo nome em funções diferentes,
porque as variáveis ​​locais só são reconhecidas pela função na qual são declaradas



*/A palavra-chave global é usada para acessar uma variável global de dentro de uma função.

Para fazer isso, use a palavra - chave 'global' antes das variáveis ​​(dentro da função)*/

<!DOCTYPE html>
<html>

<body>

    <?php
        //declarando as variáveis
        $x = 5;
        $y = 10;

        function myTest()
        {
            //Usando o 'global' antes das variáveis dentro da função  
            global $x, $y;
            $y = $x + $y; // Definindo um novo valor para variável '$y'
        }

        myTest();  // run function
        echo $y; // output the new value for variable $y
    ?>

</body>

</html>


*/O PHP também armazena todas as variáveis ​​globais em um array chamado '$GLOBALS[index]'
O 'index' contém o nome da variável.
Este array também é acessível a partir de funções e pode ser usado para atualizar variáveis ​​globais diretamente/*

//ARRAY é uma estrutura de dados que contém um grupo de elementos

<?php
    $x = 5;
    $y = 10;

    function myTest()
    {
        //Array $GLOBALS armazenando as variáveis
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y; // outputs 15
?>


*/Normalmente, quando uma função é concluída / executada,
todas as suas variáveis ​​são excluídas
No entanto, às vezes queremos que uma variável local NÃO seja excluída
Precisamos disso para um novo trabalho.

Para fazer isso, use a palavra - chave 'static'ao declarar a variável pela primeira vez/*

<!DOCTYPE html>
<html>

<body>

    <?php
        function myTest() //Definindo uma função
        {
            //Definindo o que essa função fará quando chamada
            static $x = 0;
            echo $x;
            $x++;
        }
        //A variável '$x' de valor 0 permanecerá mesmo após a soma '$x++'
        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();
    ?>

</body>

</html>


//Então, cada vez que a função é chamada,
essa variável ainda terá as informações que continha da última vez que a função foi chamada.

//Observação: a variável ainda é local para a função





//Mais detalhes sobre 'echo' e 'print' para obter saída (output) para uma página

*/As diferenças são pequenas:
'echo' não tem valor de retorno enquanto 'print' tem valor de retorno 1, portanto, pode ser usado em expressões.
'echo' pode ter vários parâmetros (embora esse uso seja raro),
enquanto 'print' pode ter um argumento.
'echo' é ligeiramente mais rápido do que 'print'/*

*/A declaração 'echo' pode ser usada com ou sem parênteses: echo ou echo().

Texto de exibição

O exemplo a seguir mostra como gerar texto com o comando echo (observe que o texto pode conter marcação HTML)/*

<!DOCTYPE html>
<html>

<body>

    <?php
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    ?>

</body>

</html>


*/Variáveis ​​de exibição

O exemplo a seguir mostra como gerar texto e variáveis ​​com a instrução echo/*

<!DOCTYPE html>
<html>

<body>

    <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h2>" . $txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;
    ?>

</body>

</html>

//A declaração 'print' pode ser usada com ou sem parênteses: print ou print()

<!DOCTYPE html>
<html>

<body>

    <?php
        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";
    ?>

</body>

</html>

//Variáveis de exibição

<!DOCTYPE html>
<html>

<body>

    <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        print "<h2>" . $txt1 . "</h2>";
        print "Study PHP at " . $txt2 . "<br>";
        print $x + $y;
    ?>

</body>

</html>

*/Variáveis ​​podem armazenar dados de diferentes tipos, e diferentes tipos de dados podem fazer coisas diferentes.

PHP suporta os seguintes tipos de dados

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
/*

*/Uma string é uma sequência de caracteres, como "Olá, mundo!".

Uma string pode ser qualquer texto entre aspas. Você pode usar aspas simples ou duplas/*

<?php
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>"; //Quebra de linha em HTML
    echo $y;
?>

*/Um tipo de dados inteiro é um número não decimal entre -2.147.483.648 e 2.147.483.647.

Regras para inteiros:

Um número inteiro deve ter pelo menos um dígito
Um número inteiro não deve ter uma vírgula decimal
Um número inteiro pode ser positivo ou negativo
Os inteiros podem ser especificados em: notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2)
No exemplo a seguir, '$x' é um número inteiro. A função PHP 'var_dump ()' retorna o tipo de dados e o valor/*

<?php
    $x = 5985;
    var_dump($x);
    //Result: int(5985)
?>

*/Um float (número de ponto flutuante) é um número com uma vírgula decimal ou um número em forma exponencial.

No exemplo a seguir, '$x' é um float. A função PHP 'var_dump ()' retorna o tipo de dados e o valor/*

<?php
    $x = 10.365; //number decimal (or float)
    var_dump($x);
    //result: float(10.365)
?>

//Um booleano representa dois estados possíveis: TRUE ou FALSE

$x = true;
$y = false;

//Os booleanos costumam ser usados ​​em testes condicionais

*/Uma matriz armazena vários valores em uma única variável.

No exemplo a seguir, '$cars' é um array. A função PHP 'var_dump ()' retorna o tipo de dados e o valor/*

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    /*result: array(3) {
        [0]=>
        string(5) "Volvo"
        [1]=>
        string(3) "BMW"
        [2]=>
        string(6) "Toyota"
    }*/
?>

/*Classes e objetos são os dois aspectos principais da programação orientada a objetos.

Uma classe é um modelo para objetos e um objeto é uma instância de uma classe.

Quando os objetos individuais são criados, eles herdam todas as propriedades e comportamentos da classe,
mas cada objeto terá valores diferentes para as propriedades.

Vamos supor que temos uma classe chamada Car. Um carro pode ter propriedades como modelo, cor, etc.

Podemos definir variáveis ​​como $ modelo, $ cor e assim por diante, para conter os valores dessas propriedades.

Quando os objetos individuais (Volvo, BMW, Toyota, etc.) são criados,

eles herdam todas as propriedades e comportamentos da classe,

mas cada objeto terá valores diferentes para as propriedades.

Se você criar uma 'function __construct ()', o PHP irá automaticamente chamar esta função quando você criar um objeto de uma classe */

<?php
    class Car //"Modelo"
    {
        //Variáveis para conter os valores das propriedades da classe
        public $color;
        public $model;
        //Função para chamar os valores
        public function __construct($color, $model)
        {
            //Valores das propriedades da classe criada
            $this->color = $color;
            $this->model = $model;
        }
        public function message() //função para neste caso, exibir os valores na tela (chamar elas)
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    //Criando variáveis para definir os valores das propriedades da classe criada, e depois exibir na tela
    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
?>

/*Nulo é um tipo de dado especial que pode ter apenas um valor: NULL.

Uma variável do tipo de dados NULL é uma variável que não possui nenhum valor atribuído a ela.

Dica: Se uma variável for criada sem um valor, ela será automaticamente atribuída a um valor NULL.

As variáveis ​​também podem ser esvaziadas definindo o valor como NULL */


<?php
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    //result: NULL
?>

/*O tipo de 'resource' especial não é um tipo de dados real.

É o armazenamento de uma referência a funções e recursos externos ao PHP.

Um exemplo comum de uso do tipo de dados de recurso é uma chamada de banco de dados. */



//Funções String PHP

//strlen () - Retorna o comprimento de uma string

//Ele conta as aspas e letra por letra dentro das aspas

<?php
    echo strlen("Hello world!"); // outputs 12
?>

//str_word_count () - Conta as palavras em uma string

<?php
    echo str_word_count("Hello world!"); // outputs 2
?>

//strrev () - Reverte uma string

<?php
    echo strrev("Hello world!"); // outputs !dlrow olleH
?>

//strpos () - Pesquisar um texto dentro de uma string

/*A função strpos() PHP procura um texto específico dentro de uma string. Se uma correspondência for encontrada,
a função retorna a posição do caractere da primeira correspondência.
Se nenhuma correspondência for encontrada, ele retornará FALSE */

//a posição do primeiro caractere em uma string é 0 (não 1)

//Pesquise o texto "mundo" na string "Olá, mundo!"
<?php
    echo strpos("Hello world!", "world"); // outputs 6
?>

//str_replace () - Substituir texto dentro de uma string

//A str_replace()função PHP substitui alguns caracteres por alguns outros caracteres em uma string

//Substitua o texto "world" por "Dolly"
<?php
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>




//Números em PHP

/*Uma coisa a se notar sobre o PHP é que ele fornece conversão automática de tipo de dados.

Portanto, se você atribuir um valor inteiro a uma variável, o tipo dessa variável será automaticamente um inteiro.
Então, se você atribuir uma string à mesma variável, o tipo mudará para uma string.

Essa conversão automática às vezes pode quebrar seu código */

//Inteiros em PHP

/*2, 256, -256, 10358, -179567 são todos inteiros.

Um inteiro é um número sem nenhuma parte decimal.

Um tipo de dados inteiro é um número não decimal entre -2147483648 e 2147483647 em sistemas de 32 bits e entre -9223372036854775808 e 9223372036854775807 em sistemas de 64 bits.
Um valor maior (ou menor) que esse,
será armazenado como float, pois excede o limite de um inteiro.

Nota: Outra coisa importante a saber é que mesmo se 4 * 2,5 for 10, o resultado é armazenado como float,
porque um dos operandos é um float (2,5). */

/*Aqui estão algumas regras para inteiros:

Um número inteiro deve ter pelo menos um dígito

Um número inteiro NÃO deve ter uma vírgula decimal

Um número inteiro pode ser positivo ou negativo

Os inteiros podem ser especificados em três formatos: decimal (baseado em 10), hexadecimal (baseado em 16 - prefixado com 0x) ou octal (baseado em 8 - prefixado com 0)

PHP tem as seguintes constantes predefinidas para inteiros:

PHP_INT_MAX - O maior número inteiro suportado

PHP_INT_MIN - O menor inteiro suportado

PHP_INT_SIZE - O tamanho de um inteiro em bytes

PHP tem as seguintes funções para verificar se o tipo de uma variável é inteiro:

is_int ()

is_integer () - alias de is_int ()

is_long () - alias de is_int () */



//Verifique se o tipo de uma variável é inteiro:
<!doctype html>
<html>

<body>
    <?php
        //Check if the type of a variable is integer
        $x = 5985;
        var_dump(is_int($x)); //result: bool(true)

        $x = 59.85;
        var_dump(is_int($x)); //result: bool(false)
    ?>
</body>

</html>


//PHP float

/*Um float é um número com uma vírgula decimal ou um número na forma exponencial.

2,0, 256,4, 10,358, 7,64E + 5, 5,56E-5 são todos flutuantes.

O tipo de dados float geralmente pode armazenar um valor de até 1,7976931348623E + 308 (dependente da plataforma)
e tem uma precisão máxima de 14 dígitos */

/*O PHP tem as seguintes constantes predefinidas para flutuações (do PHP 7.2):

PHP_FLOAT_MAX - O maior número de ponto flutuante representável

PHP_FLOAT_MIN - O menor número de ponto flutuante positivo representável

- PHP_FLOAT_MAX - O menor número de ponto flutuante negativo representável

PHP_FLOAT_DIG - O número de dígitos decimais que podem ser arredondados para float e vice-versa sem perda de precisão

PHP_FLOAT_EPSILON - O menor número positivo x representável, de modo que x + 1,0! = 1,0

PHP tem as seguintes funções para verificar se o tipo de uma variável é flutuante:

is_float ()

is_double () - alias de is_float () */


//Verifique se um tipo de uma variável é flutuante (float):

<!DOCTYPE html>
<html>

<body>

    <?php
    // Check if the type of a variable is float 
    $x = 10.365;
    var_dump(is_float($x)); //result: bool(true)
    ?>

</body>

</html>


//PHP infinity

/*Um valor numérico maior que PHP_FLOAT_MAX é considerado infinito.

PHP tem as seguintes funções para verificar se um valor numérico é finito ou infinito:

is_finite ()

is_infinite ()

No entanto, a função PHP var_dump () retorna o tipo de dados e o valor */

//Verifique se um valor numérico é finito ou infinito

<!DOCTYPE html>
<html>

<body>

    <?php
    // Check if a numeric value is finite or infinite 
    $x = 1.9e411;
    var_dump($x); //result: float(INF)
    ?>

</body>

</html>


//PHP NAN

/*NaN significa Não é um número.

NaN é usado para operações matemáticas impossíveis.

PHP tem as seguintes funções para verificar se um valor não é um número:

is_nan ()

No entanto, a função PHP var_dump () retorna o tipo de dados e o valor */

//Cálculo inválido retornará um valor NaN

<!DOCTYPE html>
<html>

<body>

    <?php
    // Invalid calculation of arc cosine
    $x = acos(8);
    var_dump($x); //result: float(NAN)
    ?>

</body>

</html>


//Strings numéricos em PHP

/*A função PHP is_numeric () pode ser usada para descobrir se uma variável é numérica.
A função retorna verdadeiro se a variável for um número ou falso se for uma string numérica */


//Verifique se a variável é numérica

<!DOCTYPE html>
<html>

<body>

    <?php
    // Check if the variable is numeric   
    $x = 5985;
    var_dump(is_numeric($x)); //result: bool(true)

    echo "<br>";

    $x = "5985";
    var_dump(is_numeric($x)); //result: bool(true)

    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x)); //result: bool(true)

    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x)); //result: bool(false)
    ?>

</body>

</html>

//Nota: A partir do PHP 7.0: A função is_numeric () retornará FALSE para strings numéricas na forma hexadecimal
(por exemplo, 0xf4c3b00c),
pois elas não são mais consideradas como strings numéricas


//PHP Casting Strings e Floats to Integers

/*Às vezes, você precisa converter um valor numérico em outro tipo de dados.

As funções (int), (inteiro) ou intval () são freqüentemente usadas para converter um valor em um inteiro */

//Converta float e string em inteiro


<!DOCTYPE html>
<html>

<body>

    <?php
    // Cast float to int 
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast; //result: 23465

    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast; //result: 23465
    ?>

</body>

</html>


//PHP math

//Função PHP pi ()

//A função pi () retorna o valor de PI

<!DOCTYPE html>
<html>

<body>

    <?php
    echo (pi()); //return: 3.1415926535898
    ?>

</body>

</html>

/*Funções PHP min () e max ()
As funções min() e max() podem ser usadas para encontrar o valor mais baixo ou mais alto em uma lista de argumentos */

<!DOCTYPE html>
<html>

<body>

    <?php
    echo (min(0, 150, 30, 20, -8, -200) . "<br>"); //return -200
    echo (max(0, 150, 30, 20, -8, -200)); //return 150
    ?>

</body>

</html>

/*Função PHP abs ()

A abs() função retorna o valor absoluto (positivo) de um número */

<!DOCTYPE html>
<html>

<body>

    <?php
    echo (abs(-6.7)); //return 6.7
    ?>

</body>

</html>

/*Função PHP sqrt ()

A sqrt() função retorna a raiz quadrada de um número */

<!DOCTYPE html>
<html>

<body>

    <?php
    echo (sqrt(64) . "<br>"); // return 8
    echo (sqrt(0) . "<br>"); // return 0
    echo (sqrt(1) . "<br>"); // return 1
    echo (sqrt(9)); // return 3
    ?>

</body>

</html>

/*Função PHP round ()

A round() função arredonda um número de ponto flutuante (ou decimal) para o número inteiro mais próximo */

<!DOCTYPE html>
<html>

<body>

    <?php
    echo (round(0.60) . "<br>"); // return 1
    echo (round(0.50) . "<br>"); // return 1
    echo (round(0.49) . "<br>"); // return 0
    echo (round(-4.40) . "<br>"); // return -4
    echo (round(-4.60)); // return -5
    ?>

</body>

</html>

/*Números aleatórios

A rand() função gera um número aleatório */

<!DOCTYPE html>
<html>

<body>

    <?php
    echo (rand()); //return 332210167
    ?>

</body>

</html>

/*Para obter mais controle sobre o número aleatório, você pode adicionar os valores mínimo
e máximo opcionais parâmetros para especificar o inteiro mais baixo e o inteiro mais alto a ser retornado.

Por exemplo, se você quiser um número inteiro aleatório entre 10 e 100 (inclusive), use rand(10, 100) */

<!DOCTYPE html>
<html>

<body>

    <?php
    echo (rand(10, 100)); //return 97
    ?>

</body>

</html>

//Constantes PHP

//As constantes são como variáveis, exceto que, uma vez definidas, não podem ser alteradas ou indefinidas

/*Uma constante é um identificador (nome) para um valor simples. O valor não pode ser alterado durante o script.

Um nome de constante válido começa com uma letra ou sublinhado (sem o sinal $ antes do nome da constante).

Nota: Ao contrário das variáveis, as constantes são automaticamente globais em todo o script. */

//Para criar uma constante, use a função define()

//Sintaxe

define(name, value, case-insensitive)

/*Parâmetros:

noma : especifica o nome da constante
value : especifica o valor da constante
case-insensitive : especifica se o nome da constante deve ser indiferente a maiúsculas e minúsculas.
O padrão é falso */

//Crie uma constante com um nome que diferencia maiúsculas de minúsculas

<!DOCTYPE html>
<html>

<body>

    <?php
    // case-sensitive constant name
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;
    ?>

</body>

</html>

//Crie uma constante com um nome que não diferencia maiúsculas de minúsculas :

<!DOCTYPE html>
<html>

<body>

    <?php
    // case-insensitive constant name
    define("GREETING", "Welcome to W3Schools.com!", true);
    echo greeting;
    ?>

</body>

</html>

/*Matrizes constantes de PHP

No PHP7, você pode criar uma constante Array usando a função define(). */

//Crie uma constante com Array

<!DOCTYPE html>
<html>

<body>

    <?php
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0]; //return Alfa Romero
    ?>

</body>

</html>

/*Constantes são globais

As constantes são automaticamente globais e podem ser usadas em todo o script */

//Este exemplo usa uma constante dentro de uma função, mesmo se for definida fora da função

<!DOCTYPE html>
<html>

<body>

    <?php
    define("GREETING", "Welcome to W3Schools.com!"); //Constante definida fora da função

    function myTest()
    {
        echo GREETING; //Constante chamada dentro da função "myTest()"
    }

    myTest();
    ?>

</body>

</html>


/*Operadores PHP

Operadores são usados ​​para realizar operações em variáveis ​​e valores.

O PHP divide os operadores nos seguintes grupos:

Operadores aritméticos

Operadores de atribuição

Operadores de comparação

Operadores de incremento / decremento

Operadores lógicos

Operadores de string

Operadores de matriz

Operadores de atribuição condicional */


//Os operadores aritméticos PHP são usados ​​com valores numéricos para realizar operações aritméticas comuns,
como adição, subtração,
multiplicação etc.

/*+ Addition $x + $y Sum of $x and $y

- Subtraction $x - $y Difference of $x and $y

* Multiplication $x * $y Product of $x and $y

/ Division $x / $y Quotient of $x and $y

% Modulus $x % $y Remainder of $x divided by $y

** Exponentiation $x ** $y Result of raising $x to the $y'th power */



/*Os operadores de atribuição PHP são usados ​​com valores numéricos para gravar um valor em uma variável.

O operador de atribuição básico em PHP é "=".

Isso significa que o operando esquerdo é definido com o valor da expressão de atribuição à direita */

/* x = y x = y The left operand gets set to the value of the expression on the right

x += y x = x + y Addition

x -= y x = x - y Subtraction

x *= y x = x * y Multiplication

x /= y x = x / y Division

x %= y x = x % y Modulus */




/* Os operadores de comparação PHP são usados ​​para comparar dois valores (número ou string */

/* == Equal $x == $y Returns true if $x is equal to $y

=== Identical $x === $y Returns true if $x is equal to $y, and they are of the same type

!= Not equal $x != $y Returns true if $x is not equal to $y

<> Not equal $x <> $y Returns true if $x is not equal to $y

!== Not identical $x !== $y Returns true if $x is not equal to $y, or they are not of the same type

> Greater than $x > $y Returns true if $x is greater than $y

< Less than $x < $y Returns true if $x is less than $y>= Greater than or equal to $x >= $y Returns true if $x is greater than or equal to $y

<= Less than or equal to $x <=$y Returns true if $x is less than or equal to $y <=> Spaceship $x <=> $y Returns an integer less than, equal to, or greater than zero,

depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7. */


/*Os operadores de incremento do PHP são usados ​​para incrementar o valor de uma variável.

Os operadores de decremento do PHP são usados ​​para diminuir o valor de uma variável */

/* ++$x Pre-increment Increments $x by one, then returns $x

$x++ Post-increment Returns $x, then increments $x by one

--$x Pre-decrement Decrements $x by one, then returns $x

$x-- Post-decrement Returns $x, then decrements $x by one */




//Os operadores lógicos do PHP são usados ​​para combinar declarações condicionais.

/* and And $x and $y True if both $x and $y are true

or Or $x or $y True if either $x or $y is true

xor Xor $x xor $y True if either $x or $y is true, but not both

&& And $x && $y True if both $x and $y are true

|| Or $x || $y True if either $x or $y is true

! Not !$x True if $x is not true */





//O PHP possui dois operadores que são especialmente projetados para strings.

/* . Concatenation $txt1 . $txt2 Concatenation of $txt1 and $txt2

.= Concatenation assignment $txt1 .= $txt2 Appends $txt2 to $txt1 */



//Os operadores de array PHP são usados ​​para comparar arrays

/* + Union $x + $y Union of $x and $y

== Equality $x == $y Returns true if $x and $y have the same key/value pairs

=== Identity $x === $y Returns true if $x and $y have the same key/value pairs in the same order and of the same types

!= Inequality $x != $y Returns true if $x is not equal to $y

<> Inequality $x <> $y Returns true if $x is not equal to $y

!== Non-identity $x !== $y Returns true if $x is not identical to $y */



//Os operadores de atribuição condicional PHP são usados ​​para definir um valor dependendo das condições

/* ?: Ternary $x = expr1 ? expr2 : expr3
Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE

?? Null coalescing $x = expr1 ?? expr2
Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2. */





/* Instruções PHP if ... else ... elseif

As instruções condicionais são usadas para executar ações diferentes com base em condições diferentes. */

/*Muitas vezes, ao escrever código, você deseja executar ações diferentes para condições diferentes. 
Você pode usar instruções condicionais em seu código para fazer isso.

No PHP, temos as seguintes instruções condicionais:

Declaração if  - executa algum código se uma condição for verdadeira

Instrução if...else  - executa algum código se uma condição for verdadeira e outro código se essa condição for falsa

Declaração if...elseif...else - executa códigos diferentes para mais de duas condições

Declaração switch  - seleciona um de muitos blocos de código a ser executado */


/*A instrução 'if' executa algum código se uma condição for verdadeira.

Sintaxe

if (condition) {
  code to be executed if condition is true;
} 

*/

//Saída "Tenha um bom dia!" se a hora atual (date) for inferior a 20

<!DOCTYPE html>
<html>
    <body>

        <?php
            $t = date("H"); //Defina uma variável para uma condição 

            if ($t < "20") //Defina a condição primeiramente
            {
                echo "Have a good day!"; //Se a condição dada for verdadeira, retorna essa saída
            }
        ?>
    
    </body>
</html>

/*A instrução 'if...else' executa algum código se uma condição for verdadeira 
e outro código se essa condição for falsa.

Sintaxe

if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
} 

*/

//Saída "Tenha um bom dia!" se a hora atual for inferior a 20, e "Tenha uma boa noite!" de outra forma

<!DOCTYPE html>
<html>
    <body>

        <?php
            $t = date("H"); //Defina uma variável

            if ($t < "20") //Definindo a condição
            {
                echo "Have a good day!"; //Caso a condição for verdadeira, retorna essa saída
            } 
            
            else 
            {
                echo "Have a good night!"; //caso contrário, execute essa saída
            }
        ?>
    
    </body>
</html>

/*A instrução 'if...elseif...else' executa códigos diferentes para mais de duas condições.

Sintaxe

if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
} 

*/

/*
Saída "Tenha um bom dia!" se a hora atual for inferior a 10 e "Tenha um bom dia!" 
se a hora atual for inferior a 20. 
Caso contrário, será exibido "Tenha uma boa noite!"
*/

<!DOCTYPE html>
<html>
    <body>

        <?php
        $t = date("H");
        echo "<p>The hour (of the server) is 10h " . $t; 
        echo ", and will give the following message:</p>";

        if ($t < "10h") //Definindo a 1 condição
        {
            echo "Have a good morning!"; //Execute essa saída caso a 1 condição for verdadeira
        } 
        elseif ($t < "20h") //Definindo uma 2 condição
        {
            echo "Have a good day!"; //Execute essa saída caso a 2 condição for verdadeira
        } 
        else 
        {
            echo "Have a good night!"; //Caso nenhuma das condições acima forem verdadeiras, execute esta... 
        }
        ?>
    
    </body>
</html>

//A instrução 'switch' é usada para executar ações diferentes com base em condições diferentes

/* Use a instrução 'switch' para selecionar um dos muitos blocos de código a serem executados .

Sintaxe

switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
} 

*/

/* Funciona assim: primeiro, temos uma única expressão n (geralmente uma variável), que é avaliada uma vez. 
O valor da expressão é então comparado com os valores para cada caso na estrutura. Se houver uma correspondência, 
o bloco de código associado a esse caso é executado. 
Use 'break' para evitar que o código seja executado no próximo caso automaticamente. 
A instrução default é usada se nenhuma correspondência for encontrada. */

<!DOCTYPE html>
<html>
    <body>

        <?php
            $favcolor = "red"; //Definindo uma variável com um valor de string

            switch ($favcolor) { //A instrução começará a comparar o valor dessa variável para cada caso na estrutura
            case "red":
                echo "Your favorite color is red!"; //Caso encontrado, ela executará esse caso
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!"; //Caso não encontrasse, ele executaria esse
            }
        ?>
    
    </body>
</html>


//PHP Loop

/* Freqüentemente, ao escrever código, 
você deseja que o mesmo bloco de código seja executado repetidamente um determinado número de vezes. 
Portanto, em vez de adicionar várias linhas de código quase iguais em um script, podemos usar loops.

Os loops são usados ​​para executar o mesmo bloco de código repetidas vezes, 
desde que uma determinada condição seja verdadeira.

No PHP, temos os seguintes tipos de loop:

while - percorre um bloco de código, desde que a condição especificada seja verdadeira

do...while - faz um loop em um bloco de código uma vez e, em seguida, repete o loop, desde que a condição especificada seja verdadeira

for - percorre um bloco de código um determinado número de vezes

foreach - percorre um bloco de código para cada elemento em uma matriz */




/* O PHP while Loop
O loop 'while' executa um bloco de código, desde que a condição especificada seja verdadeira.

Sintaxe

while (condition is true) {
  code to be executed;
} 

*/

//O exemplo abaixo exibe os números de 1 a 5

<!DOCTYPE html>
<html>
    <body>

        <?php  
            $x = 1; //Inicialize o contador de loop ($x) e defina o valor inicial para 1
            
            while($x <= 5) // Continue o loop enquanto $x for menor ou igual a 5
            {
                echo "The number is: $x <br>";
                $x++; // Aumente o valor do contador de loop em 1 para cada iteração
            } 
        ?>  

    </body>
</html>

//Este exemplo conta até 100 por dezenas:

<!DOCTYPE html>
<html>
    <body>

        <?php  
            $x = 0; // Inicialize o contador de loop ($x) e defina o valor inicial para 0
            
            while($x <= 100) // Continue o loop enquanto $x for menor ou igual a 100
            {
                echo "The number is: $x <br>";
                $x+=10; // Aumente o valor do contador de loop em 10 para cada iteração
            }
        ?>  

    </body>
</html>

/* O PHP faz ... while Loop
O loop 'do...while' sempre executará o bloco de código uma vez, 
verificará a condição e repetirá o loop enquanto a condição especificada for verdadeira.

Sintaxe

do {
  code to be executed;
} while (condition is true); 

*/

/* 
O exemplo abaixo primeiro define uma variável $x para 1 ($x = 1). 
Então, o loop 'do while' escreverá alguma saída e, em seguida, incrementará a variável $x com 1. 
Então a condição é verificada (é $x menor ou igual a 5?), 
E o loop continuará a funcionar enquanto $x é menor ou igual a 5 

*/

<!DOCTYPE html>
<html>
    <body>

        <?php 
            $x = 1; // Definindo uma variável

            do // O loop 'do' escreverá uma saída e em seguida incremetará a variável com 1
            {
                echo "The number is: $x <br>";
                $x++;
            } while ($x <= 5); // Posteriormente a condição é verificada e o loop continuará enquanto $x for <= 5
        ?>

    </body>
</html>


/* Nota: Em um loop 'do...while', a condição é testada APÓS a execução das instruções dentro do loop. 
Isso significa que o loop 'do...while' executará suas instruções pelo menos uma vez, mesmo se a condição for falsa. 
Veja o exemplo abaixo. */

//Este exemplo define a variável $x como 6, executa o loop e a condição é verificada

<!DOCTYPE html>
<html>
    <body>

        <?php 
            $x = 6; //Valor da variável definido com número

            do // Executará o loop com uma saída na tela, e em seguida incrementará a variável com 1
            {
                echo "The number is: $x <br>";
                $x++;
            
            } while ($x <= 5); // Depois irá verificar a condição
            
            // A condição é falsa, portanto a saída é somente "6"
        ?>
            
    </body>
</html>


//O loop 'for' - faz um loop em um bloco de código um número especificado de vezes

/* O loop 'for' é usado quando você sabe com antecedência quantas vezes o script deve ser executado.

Sintaxe

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

Parâmetros:

init counter: inicializa o valor do contador de loop

test counter : avaliado para cada iteração do loop. Se for TRUE, o loop continua. Se for FALSE, o loop termina.

increment counter : aumenta o valor do contador de loop 

*/

//O exemplo abaixo exibe os números de 0 a 10

<!DOCTYPE html>
<html>
    <body>

        <?php  
            for ($x = 0; $x <= 10; $x++) // Inicialize o contador de loop ($x) e defina o valor inicial para 0
            // Continue o loop, desde que $x seja menor ou igual (<=) a 10
            // Aumenta o valor do contador de loop em 1 para cada iteração
            {
                echo "The number is: $x <br>"; // Exibe a saída na tela 
            }
        ?>  

    </body>
</html>

//Este exemplo conta até 100 por dezenas:

<!DOCTYPE html>
<html>
    <body>

        <?php  
            for ($x = 0; $x <= 100; $x+=10) //Inicialize o contador de loop ($x) e defina o valor inicial para 0
            // Continue o loop, desde que $x seja menor ou igual (<=) a 100
            //Aumenta o valor do contador de loop em 10 para cada iteração
            {
                echo "The number is: $x <br>"; //Mostre o valor na tela 
            }
        ?>  

    </body>
</html>


//O loop 'foreach' - faz um loop em um bloco de código para cada elemento em uma matriz

/* O loop 'foreach' funciona apenas em arrays e é usado para percorrer cada par de chave / valor em um array.

Sintaxe

foreach ($array as $value) {
  code to be executed;
}

Para cada iteração de loop, 
o valor do elemento atual do array é atribuído a $value e o ponteiro do array é movido por um, 
até atingir o último elemento do array. 

*/

//O exemplo a seguir produzirá os valores da matriz fornecida ($colors)

<!DOCTYPE html>
<html>
    <body>

        <?php  
            $colors = array("red", "green", "blue", "yellow"); //Definindo uma variável com valores múltiplos (array)

            foreach ($colors as $value) //O loop percorrerá todos os valores da array até o último elemento
            {
                echo "$value <br>"; //Mostre a saída na tela
            }
        ?>  

    </body>
</html>

//O exemplo a seguir produzirá as chaves e os valores da matriz fornecida ($ age)

<!DOCTYPE html>
<html>
    <body>

        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Definindo uma variável com array

            foreach($age as $x => $val) //O loop produzirá todas as chaves e os valores da matriz
            {
                echo "$x = $val<br>"; //Mostre a saída na tela
            }
        ?>

    </body>
</html>


// PHP Break and Continue


//PHP Break

/* A instruição 'break' pode ser usada para sair de um loop.

Este exemplo sai do loop quando x é igual a 4  

*/

<!DOCTYPE html>
<html>
    <body>

        <?php  
            for ($x = 0; $x < 10; $x++) /*Variável definida com valor 0, continue o loop desde $x seja menor que 10 
            e incremente a variável um valor*/
            {
                if ($x == 4) { //Se o valor da variável ser igual a 4, pare o loop
                    break;
            }
                echo "The number is: $x <br>"; //Mostre a saída na tela
            }
        ?>

    </body>
</html>

/* PHP Continue
A instrução 'continue' interrompe uma iteração (no loop), se uma condição especificada ocorrer, 
e continua com a próxima iteração no loop.

Este exemplo pula o valor de 4  

*/

<!DOCTYPE html>
<html>
    <body>

        <?php  
            for ($x = 0; $x < 10; $x++) //Comece com valor da variável 0; continue o loop enquanto $x for menor que 10
            //Incremente a variável um valor a mais
            {
                if ($x == 4) { //Se a variável alcançar o valor 4, pule e continue o loop até o valor 10
                    continue;
            }
                echo "The number is: $x <br>"; //Mostre o loop na tela
            }
        ?>

    </body>
</html>

//Você também pode usar 'break' e 'continue' em loops 'while':

<!DOCTYPE html>
<html>
    <body>

        <?php  
            $x = 0; //Comece com valor 0
            
            while($x < 10) //Continue o loop enquanto o valor de $x for menor que 10 
            {
                if ($x == 4) { //Se o valor de $x atingir 4, pare
                    break;
            }
                echo "The number is: $x <br>"; //Mostre o valor na tela
                $x++; //Incremente um valor a mais para variável
            } 
        ?>  

    </body>
</html>

//Exemplo com 'continue'

<!DOCTYPE html>
<html>
    <body>

        <?php  
            $x = 0; //Comece com valor de 0
            
            while($x < 10) //Continue o loop enquanto o valor de $x for menor que 10
            {
                if ($x == 4) //Se o valor atingir 4, pule incrementando um valor a mais, e continue o loop
                {
                    $x++;
                    continue;
                }
                echo "The number is: $x <br>"; //Mostre os valores na tela 
                $x++; //Incremente um valor a mais para a variável a cada loop
            } 
        ?>  

    </body>
</html>


//Funções PHP

/* O verdadeiro poder do PHP vem de suas funções.

PHP tem mais de 1000 funções integradas e, além disso, você pode criar suas próprias funções personalizadas. 

O PHP possui mais de 1000 funções integradas que podem ser chamadas diretamente, 
a partir de um script, para realizar uma tarefa específica.*/


/* Funções definidas pelo usuário de PHP

Além das funções PHP integradas, é possível criar suas próprias funções.

#Uma função é um bloco de instruções que pode ser usado repetidamente em um programa.

#Uma função não será executada automaticamente quando uma página for carregada.

#Uma função será executada por uma chamada para a função. */


/* Crie uma função definida pelo usuário em PHP

Uma declaração de função definida pelo usuário começa com a palavra function:

Sintaxe

function functionName() {
  code to be executed;
}
Observação: o nome de uma função deve começar com uma letra ou sublinhado. 
Os nomes das funções NÃO diferenciam maiúsculas de minúsculas.

Dica: Dê à função um nome que reflita o que ela faz! */

/*No exemplo abaixo, criamos uma função chamada "writeMsg ()". 
A chave de abertura ({) indica o início do código da função e a chave de fechamento (}) indica o fim da função.
A função exibe "Olá, mundo!". 
Para chamar a função, basta escrever seu nome seguido de colchetes (): */


<!DOCTYPE html>
<html>
    <body>

        <?php
            function writeMsg() //Criando a função com seu nome 'writeMsg'
            {
                echo "Hello world!"; //Neste caso, a função exibirá essa mensagem na tela
            }

            writeMsg(); // Chamando a função
        ?>

    </body>
</html>


/* Argumentos da função PHP

As informações podem ser passadas para funções por meio de argumentos. Um argumento é como uma variável.

Os argumentos são especificados após o nome da função, entre parênteses. 
Você pode adicionar quantos argumentos quiser, apenas separe-os com uma vírgula. */

/* O exemplo a seguir tem uma função com um argumento ($ fname). 
Quando a função familyName () é chamada, também passamos um nome (por exemplo, Jani), 
e o nome é usado dentro da função, que produz vários primeiros nomes diferentes, mas um sobrenome igual: */

<!DOCTYPE html>
<html>
    <body>

        <?php
            function familyName($fname) //Definindo a função com o argumento '$fname'
            {
                echo "$fname Refsnes.<br>"; //O argumento exibirá na tela 'Refsnes' 
            }
            
            //Chamando a função com nomes, e seu argumento aparecerá ao lado
            familyName("Jani");
            familyName("Hege");
            familyName("Stale");
            familyName("Kai Jim");
            familyName("Borge");
        ?>

    </body>
</html>


//O exemplo a seguir tem uma função com dois argumentos ($ fname e $ year):

<!DOCTYPE html>
<html>
    <body>

        <?php
            function familyName($fname, $year) //Definindo uma função com dois argumentos
            {
                echo "$fname Refsnes. Born in $year <br>"; //Definindo o que o argumento exibirá na tela
            }
            //Chamando a função com nomes, e seu argumento aparecerá ao lado
            familyName("Hege","1975");
            familyName("Stale","1978");
            familyName("Kai Jim","1983");
            ?>

        </body>
</html>



/* PHP é uma linguagem fracamente tipada

No exemplo acima, observe que não precisamos dizer ao PHP qual tipo de dados é a variável.

O PHP associa automaticamente um tipo de dados à variável, dependendo de seu valor. 
Como os tipos de dados não são definidos estritamente, 
você pode fazer coisas como adicionar uma string a um inteiro sem causar um erro.

No PHP 7, declarações de tipo foram adicionadas. 
Isso nos dá a opção de especificar o tipo de dados esperado ao declarar uma função e adicionar a declaração 'strict', 
ele lançará um "Erro fatal" se o tipo de dados não corresponder. */


//No exemplo a seguir, tentamos enviar um número e uma string para a função sem usar strict:

<?php
    function addNumbers(int $a, int $b) {
    return $a + $b;
    }
    echo addNumbers(5, "5 days"); 
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>



/* Para especificar strict, precisamos definir 'declare(strict_types=1)'';. 
Deve estar na primeira linha do arquivo PHP.

No exemplo a seguir, tentamos enviar um número e uma string para a função, 
mas aqui adicionamos a strict declaração: */

<?php declare(strict_types=1); // strict requirement

    function addNumbers(int $a, int $b) {
    return $a + $b;
    }
    echo addNumbers(5, "5 days"); 
    // since strict is enabled and "5 days" is not an integer, an error will be thrown
?>

//A declração 'strict' força as coisas a serem usadas da maneira pretendida.


//Valor de argumento padrão do PHP

//O exemplo a seguir mostra como usar um parâmetro padrão. 
Se chamarmos a função setHeight () sem argumentos, ela tomará o valor padrão como argumento:


<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
    <body>

        <?php
            function setHeight(int $minheight = 50) //Definindo a função
            {
                echo "The height is : $minheight <br>"; //Definindo o que a função vai realizar
            }

            setHeight(350);
            setHeight(); //Return 'The height is: 50'
            setHeight(135);
            setHeight(80);
        ?>

    </body>
</html>


/* Funções PHP - Retornando valores

Para permitir que uma função retorne um valor, use a instrução 'return' */

<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
    <body>

        <?php
            function sum(int $x, int $y) //Definindo uma função
            {
                $z = $x + $y; //Definindo o que a função irá realizar quando chamada
                return $z; //Retornar o valor da soma dos valores entre as duas variáveis
            }

            echo "5 + 10 = " . sum(5,10) . "<br>"; //Return "5 + 10 = 15"
            echo "7 + 13 = " . sum(7,13) . "<br>"; //Return "7 + 13 = 20"
            echo "2 + 4 = " . sum(2,4); //Return "2 + 4 = 6"
        ?>

    </body>
</html>


/* Declarações de tipo de retorno PHP

O PHP 7 também suporta declarações de tipo para a instrução 'return'.  
Como com a declaração de tipo para argumentos de função, ao habilitar o requisito estrito, 
ele lançará um "Erro Fatal" em uma incompatibilidade de tipo.

Para declarar um tipo para o retorno da função, 
adicione dois pontos ( :) e o tipo logo antes do ( { ) colchete de abertura ao declarar a função. */

//No exemplo a seguir, especificamos o tipo de retorno para a função:

<?php declare(strict_types=1); // strict requirement
    
    function addNumbers(float $a, float $b) : float //Deinindo uma função e seu tipo de retorno (float)
    {
        return $a + $b; //Retornar a soma dos valores dessas variáveis como tipo 'flutuando'
    }
    echo addNumbers(1.2, 5.2); //Chamando a função
?>


//Você pode especificar um tipo de retorno diferente dos tipos de argumento, 
mas certifique-se de que o retorno seja do tipo correto:

<?php declare(strict_types=1); // strict requirement
    
    function addNumbers(float $a, float $b) : int //Definindo uma função e seu tipo de retorno (int)
    {
        return (int)($a + $b); //Retornar a soma dessas variáveis como tipo 'inteiros'
    }
    echo addNumbers(1.2, 5.2); //Chamando a função
?>

/* Passando Argumentos por Referência

No PHP, os argumentos geralmente são passados ​​por valor, 
o que significa que uma cópia do valor é usada na função 
e a variável que foi passada para a função não pode ser alterada.

Quando um argumento de função é passado por referência, 
as mudanças no argumento também mudam a variável que foi passada. 
Para transformar um argumento de função em uma referência, o operador '&' é usado: */


//Use um argumento de passagem por referência para atualizar uma variável:

<!DOCTYPE html>
<html>
    <body>

        <?php
            function add_five(&$value) //Criando uma função 'add_five' com operador referencial '&' 
                {
                    $value += 5; //Definindo o valor da variável como 'somar igual a 5'
                }

            $num = 2; //Criando outra variável com valor 2
            add_five($num); //Chamando a função (argumento dela) para atualizar a variável '$num'
            echo $num; //Mostrar o resultado na tela 
            //Return '7'
        ?>
    
    </body>
</html>

/* Matrizes PHP

Array = matriz

Uma matriz armazena vários valores em uma única variável: */

<!DOCTYPE html>  
<html> 
    <body>

        <?php //Script PHP
            $cars = array("Volvo", "BMW", "Toyota"); //Criando um array
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; // Escrevendo uma string na tela com os valors da variável
        ?>

    </body>
</html>

/* Se você tiver uma lista de itens (uma lista de nomes de carros, por exemplo), 
armazenar os carros em variáveis ​​únicas pode ser assim:

$cars1 = "Volvo";

$cars2 = "BMW";

$cars3 = "Toyota";

No entanto, e se você quiser percorrer os carros e encontrar um específico? 
E se você não tivesse 3 carros, mas 300?

A solução é criar um array!

Uma matriz pode conter muitos valores sob um único nome 
e você pode acessar os valores referindo-se a um número de índice. */

/* Em PHP, a função 'array()' é usada para criar uma matriz:

array();

No PHP, existem três tipos de matrizes:

Matrizes indexadas - matrizes com um índice numérico

Matrizes associativas - Matrizes com chaves nomeadas

Matrizes multidimensionais - matrizes contendo uma ou mais matrizes */

/* Obtenha o comprimento de uma matriz - a função 'count ()'

A função 'count()' é usada para retornar o comprimento (o número de elementos) de uma matriz: */


<!DOCTYPE html>
<html>
    <body>

        <?php //Script PHP
            $cars = array("Volvo", "BMW", "Toyota"); //Criando um array
            echo count($cars); //Mostrar na tela quantos elementos possue o array da variável '$cars'
               //Return '3' 
        ?>

    </body>
</html>

/* Matrizes indexadas em PHP

Existem duas maneiras de criar matrizes indexadas:

O índice pode ser atribuído automaticamente (o índice sempre começa em 0), assim:

$cars = array("Volvo", "BMW", "Toyota");

ou o índice pode ser atribuído manualmente:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota"; */

// exemplo a seguir cria uma matriz indexada chamada '$cars', 
atribui três elementos a ela e imprime um texto contendo os valores da matriz:

<!DOCTYPE html>
<html>
    <body>

        <?php //Script PHP
            $cars = array("Volvo", "BMW", "Toyota"); //Criando uma variável com array atribuído automaticamente 
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; //Mostrar o texto na tela
            //return 'I like Volvo, BMW and Toyota.'
        ?>

    </body>
</html>

/* Loop por meio de uma matriz indexada

Para percorrer e imprimir todos os valores de uma matriz indexada, você pode usar um loop 'for', como este: */

<!DOCTYPE html>
<html>
    <body>

        <?php //Script PHP
            $cars = array("Volvo", "BMW", "Toyota"); //Criando uma variável com array de 3 elementos
            $arrlength = count($cars); //Criando uma variável para contar quantos elementos têm variável '$cars'

            for($x = 0; $x < $arrlength; $x++) { //Começar com '$x'= 0;'$x' for menor que '$arrlength' continue a soma de 1 a '$x'
            echo $cars[$x]; //Mostre e atribua a variável do loop '$x' para '$cars'
            echo "<br>"; //Mostra o resultado com quebra de linha na tela
            }
            //return 'Volvo, BMW, Toyota'
            //Ele mostrou os elementos da matriz da variável '$cars' na tela
        ?>

    </body>
</html>

/* Matrizes Associativas PHP

Matrizes associativas são matrizes que usam chaves nomeadas que você atribui a elas.

Existem duas maneiras de criar uma matriz associativa: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

ou:

$age['Peter'] = "35";

$age['Ben'] = "37";

$age['Joe'] = "43"; 

*/

//As chaves nomeadas podem então ser usadas em um script:

<!DOCTYPE html>
<html>
    <body>

        <?php 
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Matriz associativa
            echo "Peter is " . $age['Peter'] . " years old."; // Return 'Peter is 35 years old.'
        ?>

    </body>
</html>

/* Loop por meio de uma matriz associativa

Para percorrer e imprimir todos os valores de uma matriz associativa, você pode usar um loop 'foreach', como este: */

<!DOCTYPE html>
<html>
    <body>

        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Matriz associativa

            foreach($age as $x => $x_value) //A variável '$age' como '$x' (chave) e ao lado '$x_value' (valor)
            {
                echo "Key=" . $x . ", Value=" . $x_value; //Mostrar na tela todos os valores do loop
                echo "<br>"; //Com quebra de linha
            }
        ?>

    </body>
</html>



/* Nas páginas anteriores, descrevemos matrizes que são uma única lista de pares de chave / valor.

No entanto, às vezes você deseja armazenar valores com mais de uma chave. Para isso, temos matrizes multidimensionais.

PHP - Arrays multidimensionais

Uma matriz multidimensional é uma matriz que contém uma ou mais matrizes.

O PHP oferece suporte a matrizes multidimensionais com dois, três, quatro, cinco ou mais níveis de profundidade. 
No entanto, matrizes com mais de três níveis de profundidade são difíceis de gerenciar para a maioria das pessoas.

A dimensão de uma matriz indica o número de índices que você precisa para selecionar um elemento.

Para uma matriz bidimensional, você precisa de dois índices para selecionar um elemento

Para uma matriz tridimensional, você precisa de três índices para selecionar um elemento */

PHP - Arrays bidimensionais

Uma matriz bidimensional é uma matriz de matrizes (uma matriz tridimensional é uma matriz de matrizes de matrizes).

Primeiro, dê uma olhada na seguinte tabela:

Name	Stock	Sold

Volvo	22	     18

BMW	    15	     13

Saab	5	     2

Land 
Rover	17	     15

Podemos armazenar os dados da tabela acima em uma matriz bidimensional, como esta:

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

Agora, o array bidimensional '$cars' contém quatro arrays e dois índices: linha e coluna.


//Para obter acesso aos elementos do array '$cars', devemos apontar para os dois índices (linha e coluna):

<!DOCTYPE html>
<html>
    <body>

        <?php
            $cars = array //Array bidimensional (linha e coluna) com quatro arrays
            (
                array("Volvo",22,18), //Ordem: 0 (array), 0 (Volvo), 1 (22), 2 (18)
                
                array("BMW",15,13), //Ordem: 1 (array), 0 (BMW), 1 (15), 2 (13)
                
                array("Saab",5,2), //Ordem: 2 (array), 0 (Saab), 1 (5), 2 (2)
                
                array("Land Rover",17,15) //Ordem: 3 (array), 0 (Land Rover), 1 (17), 2 (15)
            );
            
            echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>"; 
            echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
            echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
            echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
            
            /*Return: 
               Volvo: In stock: 22, sold: 18.
               BMW: In stock: 15, sold: 13.
               Saab: In stock: 5, sold: 2.
               Land Rover: In stock: 17, sold: 15. */
        ?>
        

    </body>
</html>

//Também podemos colocar um loop 'for' dentro de outro loop 'for' para obter os elementos do array '$cars' 
(ainda temos que apontar para os dois índices):

<!DOCTYPE html>
<html>
    <body>

        <?php
            $cars = array //Array bidimensional (linha e coluna) com quatro arrays
            (
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
            );
                
            for ($row = 0; $row < 4; $row++) //Uma linha (row) para cada array, 4 linhas (0, 1, 2, 3)
            {
                echo "<p><b>Row number $row</b></p>";
                echo "<ul>";
                
                for ($col = 0; $col < 3; $col++) //Uma coluna para cada valor dentro dos arrays, 3 colunas (0, 1, 2)
                {
                    echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
            }
        ?>

    </body>
</html>

/* Os elementos em uma matriz podem ser classificados em ordem alfabética ou numérica, decrescente ou crescente.

PHP - Funções de classificação para matrizes

Neste capítulo, veremos as seguintes funções de classificação de array PHP:

sort() - classificar matrizes em ordem crescente

rsort() - classificar matrizes em ordem decrescente

asort() - classificar matrizes associativas em ordem crescente, de acordo com o valor

ksort() - classificar matrizes associativas em ordem crescente, de acordo com a chave

arsort() - classificar matrizes associativas em ordem decrescente, de acordo com o valor

krsort() - classificar matrizes associativas em ordem decrescente, de acordo com a chave
 
*/

//O exemplo a seguir classifica os elementos da matriz '$cars' em ordem alfabética crescente:

<!DOCTYPE html>
<html>
    <body>

        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            sort($cars); //Definir os elementos em ordem alfabética crescente

            $clength = count($cars); //Criando uma variável para contar os elementos do array (0, 1, 2)
            for($x = 0; $x < $clength; $x++) // Começar o loop com '0', se '$x' for menor que ' $clength', continue o loop somando 1 valor a mais
            {
                echo $cars[$x]; //Definir o valor de '$cars' para '$x' e mostrar na tela
                echo "<br>"; //Quebra de linha
            }
        ?>

    </body>
</html>

//O exemplo a seguir classifica os elementos da matriz '$numbers' em ordem numérica crescente:

<!DOCTYPE html>
<html>
    <body>

        <?php
            $numbers = array(4, 6, 2, 22, 11);
            sort($numbers); //Definir os elementos em ordem numérica crescente

            $arrlength = count($numbers);
            for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo "<br>";
            }
        ?>

    </body>
</html>


//O exemplo a seguir classifica os elementos da matriz '$cars' em ordem alfabética decrescente:

<!DOCTYPE html>
<html>
    <body>

        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            rsort($cars); //Definir os elementos em ordem alfabética decrescente

            $clength = count($cars);
            for($x = 0; $x < $clength; $x++) {
            echo $cars[$x];
            echo "<br>";
            }
        ?>

    </body>
</html>

//O exemplo a seguir classifica os elementos da matriz '$numbers' em ordem numérica decrescente:

<!DOCTYPE html>
<html>
    <body>

        <?php
            $numbers = array(4, 6, 2, 22, 11);
            rsort($numbers); //Definir os elementos em ordem numérica decrescente 

            $arrlength = count($numbers);
            for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo "<br>";
            }
        ?>

    </body>
</html>

//O exemplo a seguir classifica uma matriz associativa em ordem crescente, de acordo com o valor:

<!DOCTYPE html>
<html>
    <body>

        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            asort($age); //Definir em ordem crescente o VALOR da matriz associativa

            foreach($age as $x => $x_value) //Definir o valor de '$age' como chave '$x' e valor como '$x_value'
            {
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
        ?>

    </body>
</html>

//O exemplo a seguir classifica uma matriz associativa em ordem crescente, de acordo com a chave:

<!DOCTYPE html>
<html>
    <body>

        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            ksort($age); //Definir em ordem crescente a CHAVE da matriz associativa

            foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
            }
        ?>

    </body>
</html>

//O exemplo a seguir classifica uma matriz associativa em ordem decrescente, de acordo com o valor

<!DOCTYPE html>
<html>
    <body>

        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            arsort($age); //Definir em ordem decrescente o VALOR

            foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
            }
        ?>

    </body>
</html>

//O exemplo a seguir classifica uma matriz associativa em ordem decrescente, de acordo com a chave:

<!DOCTYPE html>
<html>
    <body>

        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            krsort($age); //Definir em ordem decrescente a CHAVE

            foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
            }
        ?>

    </body>
</html>

/*  Variáveis ​​globais de PHP - superglobais

Algumas variáveis ​​predefinidas em PHP são "superglobais", o que significa que estão sempre acessíveis, 
independentemente do escopo - e você pode acessá-las de qualquer função, classe ou arquivo 
sem ter que fazer nada especial.

As variáveis ​​superglobais do PHP são:

$ GLOBALS

$ _SERVER

$ _REQUEST

$ _POST

$ _GET

$ _FILES

$ _ENV

$ _COOKIE

$ _SESSION

*/

/* Variáveis ​​superglobais são variáveis ​​integradas que estão sempre disponíveis em todos os escopos.

PHP '$GLOBALS'

'$GLOBALS' é uma variável superglobal do PHP que é usada para acessar variáveis ​​globais de qualquer lugar no script PHP (também de funções ou métodos).

O PHP armazena todas as variáveis ​​globais em um array chamado '$GLOBALS [ index ]'. 
O 'index' contém o nome da variável. 

*/

//O exemplo abaixo mostra como usar a variável superglobal '$GLOBALS':

<!DOCTYPE html>
<html>
    <body>

        <?php //Script PHP
            //Declarando duas variáveis com valores numéricos
            $x = 75;
            $y = 25; 

            function addition() { //Criando uma função com nome de 'addition'
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; //Criando uma variável superglobal (poderá ser acessada de qualquer lugar)
            }

            addition(); //Chamando a função
            echo $z; //Mostrar o valor da variável 
            //Return '100'
        ?>

    </body>
</html>

/* No exemplo acima, como 'z' é uma variável presente no array '$GLOBALS', 
ela também pode ser acessada de fora da função! */


/* PHP '$_SERVER'

'$_SERVER' é uma variável superglobal do PHP que contém informações sobre cabeçalhos, caminhos e locais de script.

O exemplo abaixo mostra como usar alguns dos elementos em '$_SERVER': */

<!DOCTYPE html>
<html>
    <body>

        <?php
            echo $_SERVER['PHP_SELF']; //Mostra o nome do arquivo que está sendo executado no script 
            echo "<br>";
            echo $_SERVER['SERVER_NAME']; //Mostra o nome do host do servidor
            echo "<br>";
            echo $_SERVER['HTTP_HOST']; //Mostra o cabeçalho do host
            echo "<br>";
            echo $_SERVER['HTTP_REFERER']; //Mostra a URL completa da página
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT']; //Mostra o nome do "agente usado"
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME']; //Mostra o caminho do script
        ?>

    </body>
</html>

//A tabela a seguir lista os elementos mais importantes que podem estar dentro de '$_SERVER':

/* Element/Code	Description


$_SERVER['PHP_SELF']	Returns the filename of the currently executing script


$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using


$_SERVER['SERVER_ADDR']	Returns the IP address of the host server


$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)


$_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)


$_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)


$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)


$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)


$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string


$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request


$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)


$_SERVER['HTTP_HOST']	Returns the Host header from the current request


$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)


$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol


$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page


$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page


$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server


$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script


$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)


$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)


$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages


$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script


$_SERVER['SCRIPT_NAME']	Returns the path of the current script


$_SERVER['SCRIPT_URI']	Returns the URI of the current page 

*/




/* PHP $ _REQUEST

PHP '$_REQUEST' é uma variável superglobal do PHP que é usada para coletar dados após o envio de um formulário HTML.

O exemplo abaixo mostra um formulário com um campo de entrada e um botão de envio. 

Quando um usuário envia os dados clicando em "Enviar", 

os dados do formulário são enviados para o arquivo especificado no atributo action da tag <form>. 

Neste exemplo, apontamos para o próprio arquivo para processamento de dados de formulário. 

Se você deseja usar outro arquivo PHP para processar dados de formulário, 

substitua-o pelo nome de arquivo de sua escolha. 

Então, podemos usar a variável super global '$_REQUEST' para coletar o valor do campo de entrada: 

*/

<!DOCTYPE html>
<html>
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!--Especificando o caminho dos dados no formulário -->
            Name: <input type="text" name="fname"> <!-- Criando uma entrada de dados com 'input'-->
            <input type="submit">
            </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { //Usando a variável superglobal para coletar o valor de entrada
                // collect value of input field
                $name = htmlspecialchars($_REQUEST['fname']);
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }
        ?>

</body>
</html>


/*  
PHP '$_POST'

PHP '$_POST' é uma variável superglobal do PHP que é usada para coletar dados de formulário após o envio de um formulário HTML com method = "post". 
'$_POST' também é amplamente usado para passar variáveis.


O exemplo abaixo mostra um formulário com um campo de entrada e um botão de envio. 

Quando um usuário envia os dados clicando em "Enviar", 

os dados do formulário são enviados para o arquivo especificado no atributo action da tag <form>. 

Neste exemplo, apontamos para o próprio arquivo para processar os dados do formulário. 

Se você deseja usar outro arquivo PHP para processar dados de formulário, 

substitua-o pelo nome de arquivo de sua escolha. 

Então, podemos usar a variável superglobal '$_POST' para coletar o valor do campo de entrada:

*/

<doctype! html>
<html>
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!--Especificando o caminho dos dados enviados -->
        Name: <input type="text" name="fname"> <!--Criando um campo de entrada de dados e um botão de envio -->
        <input type="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { //Usando a variável supergolbal '$_POST' para processar os dados enviados
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
            }
        ?>

    </body>
</html>

/* 
PHP '$_GET'
 
PHP '$_GET' é uma variável superglobal do PHP que é usada para coletar dados de formulário após o envio de um formulário HTML com method = "get".

'$_GET' também pode coletar dados enviados na URL.

Suponha que temos uma página HTML que contém um hiperlink com parâmetros:

<html>
    <body>

        <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

    </body>
</html>

Quando um usuário clica no link "Test $GET", os parâmetros "subject" e "web" são enviados para "test_get.php", 
e você pode acessar seus valores em "test_get.php" com '$_GET'.

O exemplo abaixo mostra o código em "test_get.php":

*/

<!DOCTYPE html>
<html>
    <body>

        <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a> <!--Quando clicar no link, ele acessará os valores do link -->

        
        <?php
            echo "Study " . $_GET['subject'] . " at " . $_GET['web']; //Parâmetros serão enviados para a tela como 'Study PHP at W3schools.com'
        ?>

    </body>
</html>

/* Expressões regulares PHP

O que é uma expressão regular?

Uma expressão regular é uma sequência de caracteres que forma um padrão de pesquisa. Ao pesquisar dados em um texto, 
você pode usar esse padrão de pesquisa para descrever o que está procurando.

Uma expressão regular pode ser um único caractere ou um padrão mais complicado.

As expressões regulares podem ser usadas para realizar todos os tipos de pesquisa de texto e operações de substituição de texto.

Sintaxe

No PHP, as expressões regulares são strings compostas por delimitadores, um padrão e modificadores opcionais.

$exp = "/w3schools/i";

No exemplo acima, '/' é o delimitador , 'w3schools' é o padrão que está sendo pesquisado 
e 'i' é um modificador que torna a pesquisa insensível a maiúsculas e minúsculas.

#O delimitador pode ser qualquer caractere que não seja uma letra, número, barra invertida ou espaço. 

#O delimitador mais comum é a barra (/), mas quando seu padrão contém barras, 
é conveniente escolher outros delimitadores, como # ou ~ */


/* Funções de Expressão Regular

O PHP oferece uma variedade de funções que permitem o uso de expressões regulares. 
As funções 'preg_match()', 'preg_match_all()' e 'preg_replace()' são algumas das mais comumente usadas:

Function	              Description

preg_match()	          Returns 1 if the pattern was found in the string and 0 if not


preg_match_all()	      Returns the number of times the pattern was found in the string, which may also be 0


preg_replace()	          Returns a new string where matched patterns have been replaced with another string 

*/

/* Usando 'preg_match ()'

A 'preg_match()' função dirá se uma string contém correspondências de um padrão.

Exemplo

Use uma expressão regular para fazer uma pesquisa sem distinção entre maiúsculas e minúsculas por "w3schools" 
em uma string: */

<!DOCTYPE html>
<html>
    <body>

        <?php
            $str = "Visit W3Schools"; //Variável com valor de string "Visit W3Schools"
            $pattern = "/w3schools/i"; //Criar uma variável com valor de string de expressão regular com padrão de 'w3schools'
            echo preg_match($pattern, $str); //Mostra na tela uma comparação de padrão entre os valores das variáveis 
            //Padrão foi encontrado, pois 'i' não difere letra maiúscula de minúscula
        ?>

    </body>
</html>

/* Usando preg_match_all ()

A 'preg_match_all()' função informará quantas correspondências foram encontradas para um padrão em uma string.

Exemplo

Use uma expressão regular para fazer uma contagem sem distinção entre maiúsculas e minúsculas 
do número de ocorrências de "ain" em uma string: 

*/

<!DOCTYPE html>
<html>
    <body>

        <?php
            $str = "The rain in SPAIN falls mainly on the plains."; //Variável com valor de string
            $pattern = "/ain/i"; //Variável com valor padrão de 'ain' sem diferenciar maiúsculas e minúsculas
            echo preg_match_all($pattern, $str); //Mostrar na tela as correspondências de padrão
            //Saída '4'
        ?>

    </body>
</html>

/* Usando preg_replace ()

A 'preg_replace()' função irá substituir todas as correspondências do padrão em uma string por outra string.

Exemplo

Use uma expressão regular que não diferencia maiúsculas de minúsculas 
para substituir Microsoft por W3Schools em uma string: */

<!DOCTYPE html>
<html>
    <body>

        <?php
            $str = "Visit Microsoft!"; //Variável com valor de string
            $pattern = "/microsoft/i"; //Variável com expressão regular sem diferenciar maiúscula de minúsculas
            echo preg_replace($pattern, "W3Schools", $str); //Substituir as correspondências por padrão 'w3Schools'
            //Ele pesquisará pelo padrão de 'microsoft' (sem diferenciar maiúscula de minúsculas) e substituirá por 'w3schools'
        ?>

    </body>
</html>

/* 
Modificadores de expressão regular

Os modificadores podem alterar a forma como uma pesquisa é realizada.

Modifier	Description

i	        Performs a case-insensitive search


m	        Performs a multiline search 
            (patterns that search for the beginning or end of a string will match the beginning or end of each line)


u	        Enables correct matching of UTF-8 encoded patterns

*/

/* 
Padrões de Expressão Regular

Os colchetes são usados ​​para encontrar uma variedade de caracteres:

Expression	Description

[abc]	    Find one character from the options between the brackets

[^abc]	    Find any character NOT between the brackets

[0-9]	    Find one character from the range 0 to 9

 */


/* 
Metacaracteres

Metacaracteres são caracteres com um significado especial:

Metacharacter	Description

|	            Find a match for any one of the patterns separated by | as in: cat|dog|fish

.	            Find just one instance of any character

^	            Finds a match as the beginning of a string as in: ^Hello

$	            Finds a match at the end of the string as in: World$

\d	            Find a digit

\s	            Find a whitespace character

\b	            Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b

\uxxxx	        Find the Unicode character specified by the hexadecimal number xxxx

*/ 


/*  
Quantificadores

Quantificadores definem quantidades:

Quantifier	Description

n+	        Matches any string that contains at least one n

n*	        Matches any string that contains zero or more occurrences of n

n?	        Matches any string that contains zero or one occurrences of n

n{x}	    Matches any string that contains a sequence of X n's

n{x,y}	    Matches any string that contains a sequence of X to Y n's

n{x,}	    Matches any string that contains a sequence of at least X n's



Nota: Se a sua expressão precisar pesquisar um dos caracteres especiais, você pode usar uma barra invertida (\) para fazer o escape. Por exemplo, 
para pesquisar um ou mais pontos de interrogação, você pode usar a seguinte expressão: $ pattern = '/ \? + /';
*/


/* 
Agrupamento

Você pode usar parênteses '( )' para aplicar quantificadores a padrões inteiros. 
Eles também podem ser usados ​​para selecionar partes do padrão a serem usadas como correspondência.

Exemplo

Use o agrupamento para pesquisar a palavra "banana" procurando "ba" seguido por duas ocorrências de "na" :

*/

<!DOCTYPE html>
<html>
    <body>

        <?php //Script PHP
            $str = "Apples and bananas."; //Variável com valor de string
            $pattern = "/ba(na){2}/i"; //Variável com valor de padrão de 'ba + duas vezes na' insensível a letra maiúscula e minúscula
            echo preg_match($pattern, $str); //Pesquisar a corresponência de padrão entre as duas variáveis e mostrar a saída na tela
            //saída '1'
        ?>

    </body>
</html>