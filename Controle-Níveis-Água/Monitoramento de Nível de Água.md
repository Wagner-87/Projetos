# 💧 Monitoramento de Nível de Água

![Python](https://img.shields.io/badge/Python-3.10+-blue)
![Status](https://img.shields.io/badge/Status-Concluído-brightgreen)
![License](https://img.shields.io/badge/Licença-Educacional-lightgrey)
![Made with](https://img.shields.io/badge/Made%20with-Colorama-orange)

> Sistema simples em Python para simular o controle de nível de um reservatório, utilizando cores no terminal para facilitar a visualização.

---

## 📌 Sobre o projeto

Este programa simula um sistema de monitoramento de nível de água, onde cada nível do reservatório é exibido com uma cor diferente.

A proposta é tornar a leitura mais rápida e intuitiva, semelhante a sistemas reais de controle.

---

## ⚙️ Funcionamento

O sistema trabalha com uma lista de níveis:

```python id="h2t8y7"
[1, 2, 3, 4, 5]
```

Para cada nível, o programa:

* Identifica a situação do reservatório
* Define uma cor correspondente
* Exibe a informação no terminal

---

## 🎨 Níveis e cores

| Nível | Situação              | Cor         |
| ----- | --------------------- | ----------- |
| 1     | Muito baixo (CRÍTICO) | 🔴 Vermelho |
| 2     | Baixo                 | 🟡 Amarelo  |
| 3     | Médio                 | 🟢 Verde    |
| 4     | Alto                  | 🔵 Ciano    |
| 5     | Muito alto (ALERTA)   | 🔷 Azul     |

---

## 🧠 Conceitos aplicados

✔ Listas
✔ Funções
✔ Estrutura `match`
✔ Biblioteca externa (`colorama`)
✔ Organização de código (PEP 8 e snake_case)

---

## 🛠️ Tecnologias utilizadas

* Python 3.10+
* Colorama

---

## 📦 Instalação

```bash id="7q2xk6"
pip install colorama
```

---

## ▶️ Execução

```bash id="c5w5tp"
python nome_do_arquivo.py
```

---

## 🖥️ Exemplo de saída

```text id="3p9b5k"
=== MONITORAMENTO DO RESERVATÓRIO ===
Nível 1 → Muito baixo (CRÍTICO)
Nível 2 → Baixo
Nível 3 → Médio
Nível 4 → Alto
Nível 5 → Muito alto (ALERTA)
```

*(As mensagens aparecem coloridas no terminal)*

---

## 🎯 Objetivo do projeto

Este projeto foi desenvolvido para praticar:

* Organização de código
* Clareza na lógica
* Uso de bibliotecas externas
* Visualização no terminal

---

## 🚀 Possíveis melhorias

* Simulação em tempo real
* Alertas visuais mais avançados
* Interação com usuário
* Tratamento de erros

---

## 👨‍💻 Autor

Projeto desenvolvido para fins educacionais.
