# Sistema de Gestão de Colaboradores

Este é um sistema de gestão de colaboradores desenvolvido em PHP utilizando o framework Laravel. O sistema permite o cadastro de unidades, colaboradores, cargos e a associação entre colaboradores e cargos com notas de desempenho.

## Estrutura do Projeto

O projeto é organizado em diferentes modelos e migrações para representar as entidades do sistema.

### Modelos

1. **Unidade**: Representa uma unidade da empresa.
2. **Colaborador**: Representa um colaborador da empresa, associado a uma unidade.
3. **Cargo**: Representa um cargo na empresa.
4. **CargoColaborador**: Tabela pivot para associar colaboradores a cargos, com uma nota de desempenho.

### Migrações

1. **CreateUnidadesTable**: Cria a tabela para armazenar as unidades da empresa.
2. **CreateColaboradoresTable**: Cria a tabela para armazenar os colaboradores, associados a uma unidade.
3. **CreateCargosTable**: Cria a tabela para armazenar os cargos disponíveis na empresa.
4. **CreateCargoColaboradoresTable**: Cria a tabela pivot para associar colaboradores a cargos, com uma nota de desempenho.

## Funcionalidades dos Modelos

- **Unidade**:
  - Permite associar colaboradores à unidade.
- **Colaborador**:
  - Pertence a uma unidade.
  - Pode estar associado a múltiplos cargos.
- **Cargo**:
  - Pode ter vários colaboradores associados.
- **CargoColaborador**:
  - Associa colaboradores a cargos, permitindo armazenar notas de desempenho.

## Utilização do Laravel

O Laravel é um framework PHP que simplifica o desenvolvimento web com uma sintaxe expressiva e elegante. O projeto utiliza recursos do Laravel como:

- **Eloquent ORM**: Para mapear objetos do banco de dados para modelos PHP e vice-versa.
- **Migrações**: Para criar e gerenciar o esquema do banco de dados de forma programática.

## Configuração

Para configurar e executar o projeto:

1. Clone o repositório.
2. Instale as dependências utilizando o Composer (`composer install`).
3. Configure o arquivo `.env` com as informações do banco de dados.
4. Execute as migrações (`php artisan migrate`) para criar as tabelas no banco de dados.

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver sugestões de melhorias, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

Este README foi escrito utilizando Markdown para fornecer uma documentação clara e concisa do projeto. Se houver dúvidas ou sugestões adicionais, sinta-se à vontade para entrar em contato.
