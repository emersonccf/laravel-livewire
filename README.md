# Configuração do ambiente para executar Laravel 11 com PHP 8.3 utilizando o Docker 

## Atenção: garanta que o Docker esteja instalado e funcionando de forma adequada no seu sistema operacional. Verifique se o NodeJs também está instalado.

### Siga os passos abaixo na sequencia em que são apresentados:

Clonar o repositório:
```
git clone https://github.com/emersonccf/laravel-livewire.git
```

Entrar na pasta do repositório:
```
cd laravel-livewire
```

Instala as dependências do NodeJS:
```
npm install && npm run build
```

Faça uma cópia do arquivo .env.example para .env e após a cópia faça os ajustes necessários nas variáveis de ambiente antes de criar e subir os containers pois as informações serão utilizadas neles. Faça os ajustes que julgar necessários: 
```
Windows: copy .env.example .env
Linux: cp .env.example .env
```

Baixa as imagens e cria os containers necessários, baseado nos arquivos docker-composer.yml e no Dockerfile, em segundo plano ( -d):
```
docker-compose up -d
```

Exibe a relação dos containers que foram criados com informações importantes como nome do serviço, status, porta onde cada um está alocado:
```
docker-compose ps
```

Acesse o container da aplicação:
```
docker-compose exec app bash
```

Após entrar no container, instale as dependências do PHP do projeto através do composer:
```
composer install
```

Gere uma nova APP_KEY para a aplicação:
```
php artisan key:generate
```

Gere as tabelas no Banco de Dados definido no .env (DB_DATABASE=laravel_livewire) e popule as tabelas com as seeds. Nesse ponto se ocorre algum erro reveja as configurações do arquivo .env e refaça os containers com o comando `docker-compose down` e depois `docker-compose up -d`:
```
php artisan migrate:refresh --seed
```

Ocorrendo tudo bem, já pode acessar o projeto pelo navegador:
```
http://localhost:8000
```

Fazendo login no sistema: já existe um usuário criado para login:
```
Usuário: admin@admin.com
Senha: 123
```

Para acessar o phpMyAdmin use o caminho abaixo e para acessar use o usuário e a senha definidos no arquivo .env:
```
http://localhost:8080
```

xxxxx:
```

```

xxxxx:
```

```

xxxxx:
```

```

xxxxx:
```

```

Para e remove containers e redes, mantém os dados:
```
docker-compose down
```

[Opcional] Caso tenha necessidade também pode acessar o container do MySql (Banco de Dados):
```
docker-compose exec -it mysql bash
```

Credenciais para acesso ao MySql:
```
mysql -u root -p <senha>
```
