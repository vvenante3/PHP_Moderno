Anotações referente ao curso de PHP Moderno -> Curso em vídeo de Prof Guanabara

O intuíto desse estudo é realizar práticas, anotações e versionamentos de códigos com o SourceTree

                                        Cliente-side X Server-Side

Cliente-Side (Front-End)

    solicitação de cliente (Request) --> DNS --> *carregamento de arquivos (ex: html, css) --> cópia dos arquivos --> retorna ao cliente (response)


Server-Side (Back-End)

    solicitação do cliente (Request) --> DNS --> *interpretador e processamento (ex: php, Db) --> cópia dos dados processados --> retorna ao cliente (response) 


----------------------------------------------------------


-> Servidor
    Navegador + Editor de Códigos + "A Tríade * "

-> A Tríade
    Apache + Banco Dados + PHP
    --------------------------
                AMP

Linux       -> *L*AMP
Windows     -> *W*AMP    -> Qualquer OS: XAMPP
MaciOS      -> *M*AMP


-----------------------------------------------------------


Áspas Duplas                        X       Áspas Simples
(interpretador de conteúdo)                 (não há interpretador de conteúdo)

"Curso \u{}" <- irá interpretar             'curso \u{}' -> irá retornar " curso \u{} "
o Codepoint Unicode

----------------------------------------------------------
                EXPRESSÕES ARITMÉTICAS 

0. () parenteses - não é operador
1.  ** (Potencialização)
2. * (multiplicação) / "/"(divisão) / % módulo/porcentagem
3. + (soma) / - (subtração)

----------------------------------------------------------
                SUPERGLOBAIS

PRINCIPAIS

$_GET       -> url
$_POST      -> console
$_REQUEST   -> ambos

$_COOKIE   -> setcookie(" ", " ", time() + 3600);
$_FILES    -> pegar arquivos
$_SESSION  -> variávies de sessão podem ser reutilizadas // precisa ter uma sessão iniciada
$_ENV      -> variávies de ambiente
$_SERVER   -> todas as variávies com os dados do servidor (software utilizado, server_name, server_port.. etc)
$GLOBALS   ->   

----------------------------------------------------------
                FORMULÁRIOS RETROALIMENTADOS

É quando você utiliza um arquivo .php junto com o .html (sem a necessidade de ter '2' arquivos);