# Sistema de Gerenciamento de Orçamentos  

Um sistema CRUD inspirado no Trello, desenvolvido em **PHP** com integração ao banco de dados **MySQL**, projetado para facilitar o gerenciamento de orçamentos de forma visual e intuitiva.  

## Funcionalidades  
- **Cadastro de orçamentos**: Registre novos orçamentos com detalhes personalizados.  
- **Atualização de dados**: Edite informações de qualquer orçamento.  
- **Remoção de registros**: Exclua orçamentos que não são mais necessários.  
- **Listagem organizada**: Visualize todos os orçamentos de maneira clara e estruturada.  
- **Interface inspirada no Trello**: Gestão visual com organização em cartões.  

## Estrutura do Projeto  
```  
├── index.php              # Página principal  
├── conexao.php            # Arquivo de conexão com o banco de dados  
├── cadastrar.php          # Página para adicionar novos orçamentos  
├── editar.php             # Página para editar orçamentos existentes  
├── excluir.php            # Página para excluir orçamentos  
├── estilo.css             # Arquivo de estilização (CSS)  
└── README.md              # Documentação do projeto  
```  

## Tecnologias Utilizadas  
- **Linguagem de Programação**: PHP  
- **Banco de Dados**: MySQL  
- **Estilização**: CSS  
- **HTML**: Estrutura do sistema  

## Objetivo  
Este projeto foi criado com o objetivo de simular um sistema de gerenciamento de orçamentos, ajudando os usuários a organizar e monitorar informações de maneira eficiente. A interface foi inspirada no Trello para proporcionar uma experiência intuitiva e prática.  

## Pré-requisitos  
Antes de rodar o projeto, certifique-se de ter instalado:  
1. **PHP** (versão 7.4 ou superior)  
2. **Servidor Apache** (ex.: XAMPP ou WAMP)  
3. **Banco de Dados MySQL**  

## Como Configurar e Executar  
1. Clone o repositório para sua máquina local:  
   ```bash  
   git clone https://github.com/MissolaPedro/Sistema-de-Gerenciamento-de-Orcamentos.git  
   ```  
2. Configure o banco de dados:  
   - Crie um banco de dados no MySQL.  
   - Execute o script SQL fornecido no repositório para criar as tabelas necessárias.  
3. Ajuste o arquivo `conexao.php` com as credenciais do seu banco de dados:  
   ```php  
   $host = 'localhost';  
   $usuario = 'seu_usuario';  
   $senha = 'sua_senha';  
   $banco = 'nome_do_banco';  
   ```  
4. Inicie o servidor local (ex.: usando XAMPP ou WAMP).  
5. Acesse o sistema no navegador em `http://localhost/Sistema-de-Gerenciamento-de-Orcamentos`.  

## Contribuições  
Contribuições são bem-vindas! Para isso:  
1. Faça um fork do projeto.  
2. Crie uma branch para sua funcionalidade (`git checkout -b feature/nova-funcionalidade`).  
3. Commit suas mudanças (`git commit -m 'Adicionei uma nova funcionalidade'`).  
4. Faça um push para a branch (`git push origin feature/nova-funcionalidade`).  
5. Abra um Pull Request.  

## Licença  
Este projeto está sob a licença MIT. Para mais informações, consulte o arquivo [LICENSE](LICENSE).  
