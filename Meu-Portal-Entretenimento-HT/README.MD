# Meu Portal de Entretenimento Digital

Projeto desenvolvido utilizando HTML5 e CSS3 para a atividade Agenda-13 de A_DS_I.

---

# Objetivo da Atividade

Criar uma página web com o tema:

- Filmes e Séries
- Música e Podcasts
- Games e Tecnologia

Aplicando conceitos fundamentais de:
- HTML
- CSS
- Flexbox
- Classes e IDs
- CSS Inline, Interno e Externo

---

# Tecnologias Utilizadas

- HTML5
- CSS3
- Flexbox

---

# Estrutura do Projeto

```text
portal-entretenimento/
│
├── index.html
├── style.css
├── reset.css
└── img/
    ├── plataf.jpeg
    ├── netflix.jpg
    ├── musica.jpg
    ├── podcast.jpg
    ├── games.webp
    └── tecnologias.webp
```

---

# Estrutura HTML

O projeto foi estruturado utilizando as principais tags semânticas do HTML:

| Tag | Função |
|---|---|
| `<header>` | Cabeçalho da página |
| `<main>` | Conteúdo principal |
| `<section>` | Separação das categorias |
| `<h1>` | Título principal |
| `<h2>` | Títulos das seções |
| `<p>` | Parágrafos |
| `<img>` | Inserção de imagens |

---

# CSS Utilizado

A atividade exigia o uso dos três tipos de CSS:

## 1. CSS Inline

Aplicado diretamente no título principal:

```html
<h1 id="principal" style="color: #c0392b; text-align: center;">
```

---

## 2. CSS Interno

Aplicado dentro da tag `<style>` no arquivo HTML:

```css
.titulo {
    color: darkblue;
    text-align: center;
}
```

---

## 3. CSS Externo

Arquivo separado chamado `style.css`:

```html
<link rel="stylesheet" href="style.css">
```

---

# Flexbox

Foi utilizado Flexbox para organizar as três seções lado a lado.

Exemplo:

```css
.container{
    display: flex;
}
```

---

# Classes e IDs

## Classes utilizadas

```css
.container
.secao
.titulo
.imagem
```

## ID utilizado

```css
#principal
```

---

# CSS Reset

O projeto utiliza um arquivo `reset.css` baseado no modelo Eric Meyer para remover estilos padrões do navegador.

Exemplo:

```css
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
```

---

# Funcionalidades do Projeto

- Organização em três seções principais
- Imagens ilustrativas
- Layout com Flexbox
- Estilização com CSS
- Bordas arredondadas
- Estrutura organizada
- Comentários no código
- Separação correta dos arquivos

---

# Aprendizados

Durante o desenvolvimento deste projeto foram praticados:

- Estruturação de páginas HTML
- Utilização de imagens locais
- Criação de folhas de estilo CSS
- Uso de Flexbox
- Aplicação de Classes e IDs
- Organização de projetos web
- Integração entre HTML e CSS

---

# Interação com IA

Durante o desenvolvimento foram realizadas interações com o ChatGPT para:
- revisão da estrutura HTML;
- auxílio com CSS;
- organização do Flexbox;
- estilização das seções;
- criação do README;
- melhorias visuais do projeto.

---

# Como Executar o Projeto

1. Baixe os arquivos do projeto;
2. Abra a pasta no Visual Studio Code;
3. Execute o arquivo:

```text
index.html
```

4. O navegador abrirá a página automaticamente.

---

# Autor

## Wagner Oliveira

Projeto desenvolvido para fins educacionais.