# FoodClick
O FoodClick é um projeto acadêmico desenvolvido no Instituto Federal de Pernambuco, com foco no Campus Igarassu do IFPE.
 Seu principal objetivo é melhorar a venda de lanches dentro do campus, facilitando a comunicação entre vendedores e alunos, além de tornar o processo de compra mais rápido e organizado.

## Funcionalidades


* Visualização de cardápios: permite que os usuários vejam os lanches disponíveis.
* Realização de pedidos online: os alunos podem fazer pedidos sem precisar enfrentar filas.
* Agendamento ou retirada otimizada: possibilita organizar o horário de retirada dos pedidos.
* Facilidade no pagamento: Pode incluir opções digitais ou agilizar o pagamento no local.
* Gestão de vendas: ajuda os vendedores a controlarem pedidos e demandas.

## Tecnologias
  * HTML
  * CSS
  * PHP
  * JavaScript
  * Laravel

 ## Desenvolvedores

  [Eloisa](https://github.com/eloisagaaby)
  [Elioenai](https://github.com/Elieonai)

## Passo a Passo para preparar o Ambiente Laravel

* Passo 1: instalar o WSl
* passo 2: sudo apt update && sudo apt upgrade -y // Atualizar o WSL
* passo 3: sudo apt install php php-cli php-mbstring php-xml php-bcmath php-curl php-mysql unzip curl -y // Instalar o PHP e Extensões
* passo 4: cd ~
curl -sS https://getcomposer.org/installer | php    // Instalar o Composer
sudo mv composer.phar /usr/local/bin/composer
* passo 5: composer -v // Verificar se o Composer esta instalado
* passo 6: composer global require laravel/installer // Instalação do Laravel
* passo 7: echo 'export PATH="$HOME/.composer/vendor/bin:$PATH"' >> ~/.bashrc
source ~/.bashrc   //Adicionar o Composer ao PATH
