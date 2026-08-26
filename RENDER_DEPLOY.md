# Guia de Deploy no Render.com com Docker

Este guia explica passo a passo como fazer a publicação (deploy) da sua aplicação Laravel na plataforma **Render.com** utilizando Docker.

---

## 🚀 Método 1: Deploy Automático via Render Blueprint (Recomendado)

O projeto já inclui o arquivo `render.yaml`, que cria automaticamente o serviço Web (Docker) e o Banco de Dados PostgreSQL no Render.

### Passo a Passo:

1. Faça o **push** do código para um repositório no **GitHub** ou **GitLab**.
2. Acesse o painel do [Render.com](https://dashboard.render.com/) e faça login.
3. Clique no botão **New +** no canto superior direito e selecione **Blueprint**.
4. Conecte sua conta do GitHub/GitLab e selecione o repositório deste projeto.
5. O Render detectará automaticamente o arquivo `render.yaml`.
6. Preencha as variáveis de ambiente pendentes solicitadas:
   - **`APP_KEY`**: Gere uma chave rodando localmente `php artisan key:generate --show` e cole o valor gerado (ex: `base64:...`).
   - **`APP_URL`**: Insira a URL final gerada pelo Render (ex: `https://rotary-web.onrender.com`).
7. Clique em **Apply**. O Render iniciará a criação do banco PostgreSQL e o build do container Docker.

---

## 🛠️ Método 2: Deploy Manual no Render.com

Se você preferir criar os recursos manualmente pelo painel do Render:

### Step 1: Criar o Banco de Dados PostgreSQL (Opcional, se usar BD gerenciado)
1. No Render, clique em **New +** -> **PostgreSQL**.
2. Escolha um nome (ex: `rotary-db`), selecione a região e o plano (ex: Free).
3. Após criar, copie as credenciais geradas (*Host, Database, Username, Password, Port*).

### Step 2: Criar o Web Service Docker
1. No Render, clique em **New +** -> **Web Service**.
2. Conecte o repositório Git.
3. Escolha as configurações:
   - **Name**: `rotary-web`
   - **Runtime**: `Docker`
   - **Dockerfile Path**: `./Dockerfile`
   - **Plan**: Free ou Starter
4. Em **Environment Variables**, adicione as seguintes variáveis:

| Chave | Valor Exemplo / Instrução |
|---|---|
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` |
| `APP_KEY` | `base64:sua_chave_gerada_aqui` |
| `APP_URL` | `https://seu-app.onrender.com` |
| `DB_CONNECTION` | `pgsql` |
| `DB_HOST` | *(Internal Database Host do Render)* |
| `DB_PORT` | `5432` |
| `DB_DATABASE` | *(Database Name do Render)* |
| `DB_USERNAME` | *(Database User do Render)* |
| `DB_PASSWORD` | *(Database Password do Render)* |
| `LOG_CHANNEL` | `stderr` |
| `SESSION_DRIVER` | `database` |
| `CACHE_STORE` | `database` |
| `RUN_MIGRATIONS` | `true` |

5. Clique em **Create Web Service**.

---

## 🐳 Testando Localmente com Docker

Antes de enviar para o Render, você pode testar a imagem e os containers na sua máquina local com o Docker Desktop instalado:

```bash
# Constrói a imagem e inicia o container
docker compose up --build
```

Acesse a aplicação no navegador em: `http://localhost:8000`

Para parar o container:
```bash
docker compose down
```

---

## 🔍 Informações Importantes & Troubleshooting

- **Substituição de Porta**: O Render injeta dinamicamente uma variável `$PORT` (ex: 10000). O nosso `entrypoint.sh` e o template do Nginx configuram a escuta automaticamente nessa porta.
- **Migrações Automáticas**: Com `RUN_MIGRATIONS=true`, as migrações (`php artisan migrate --force`) serão executadas automaticamente durante a inicialização do container.
- **Logs**: Os logs da aplicação são direcionados para `stderr`/`stdout`, permitindo visualizar os erros diretamente no painel **Logs** do Render.com em tempo real.
