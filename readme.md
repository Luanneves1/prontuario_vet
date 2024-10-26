# Clínica Veterinária - Projeto de Estudo PHP MVC

Este é um projeto de estudo para a implementação de uma aplicação web de uma clínica veterinária utilizando PHP com o padrão de arquitetura MVC (Model-View-Controller).

## Estrutura do Projeto

### Descrição dos Diretórios e Arquivos

- **class/**: Contém todas as classes do projeto.
  - **controllers/**: Controladores que gerenciam a lógica de negócios.
  - **models/**: Modelos que representam as entidades do sistema.
    - **Animal.php**: Classe que representa um animal.
    - **Especie.php**: Classe que representa uma espécie.
    - **Prontuario.php**: Classe que representa um prontuário.
    - **Tratamento.php**: Classe que representa um tratamento.
  - **views/**: Visualizações que gerenciam a apresentação dos dados.
- **config.php**: Arquivo de configuração que inclui o autoload das classes.
- **css/**: Diretório que contém os arquivos de estilo CSS.
  - **estilo.css**: Arquivo de estilo principal.
- **index.php**: Arquivo principal que inicia a aplicação.
- **readme.md**: Este arquivo de documentação.
- **script.sql**: Script SQL para criação do banco de dados.

## Configuração e Execução

1. **Clone o repositório:**
   ```sh
   git clone https://github.com/luanneves1/prontuario_vet.git