<?php
$op = " ";
$id = readline("digite seu nome:\n");
$age = readline("digite sua idade:\n");

if ($age >= 16) {
    echo "\nacesso liberado .\n";
} else {
    die ("\nacesso negado por requisito de idade.");
}

$login = readline("digite seu telefone ou cpf:\n");
$senha = readline("digite sua senha:\n");
if ($senha == "1234")
    echo "senha correta \n";
else
    echo "senha incorreta tente novamente \n";
    while ($senha != "1234"){
        $senha = readline("digite sua senha:\n");   
    }
if ($id <> " ")
    echo "bem vindo ", $id;

while ($op != 9) {
    

echo "\ntopicos da Política de Segurança da Informação (PSI) \n";
echo "1 - objetivos da PSI\n2 - escopo da politica\n3 - responsabilidades\n4 - boas praticas de segurança\n5 - consequencias de descumprimento\n9 - sair\n";
$op = readline(" escolha uma opção :\n ");
switch ($op){
    case 1;
    echo " topico 1- os objetivos da Política de Segurança da Informação (PSI) incluem proteger a confidencialidade, integridade e disponibilidade das informações, garantir a conformidade com leis e regulamentos, e promover uma cultura de segurança dentro da organização.\n";
    break;
        case 2;
        echo " topico 2- o escopo da política de segurança da informação define os limites e as áreas de aplicação da política, abrangendo aspectos como sistemas, redes, dados e usuários.\n";
        break;
            case 3;
            echo " topico 3- as responsabilidades envolvem a definição clara de papéis e responsabilidades para a segurança da informação, incluindo a designação de um responsável pela segurança e a implementação de políticas e procedimentos de segurança.\n";
            break;
                case 4;
                echo " topico 4- as boas práticas de segurança incluem medidas como atualização regular de software, uso de senhas fortes e treinamento em segurança.\n";
                break;
                    case 5;
                    echo " topico 5- as consequências de descumprimento da política de segurança da informação podem incluir penalidades financeiras, danos à reputação e responsabilidade legal.\n";
                    break;

                        default;
                        echo "opção inválida. Por favor, escolha uma opção válida.";
}   

}

?>