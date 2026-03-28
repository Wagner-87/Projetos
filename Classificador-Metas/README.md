# 🎯 Classificador de Metas

![Python](https://img.shields.io/badge/Python-3.x-blue)  
![Status](https://img.shields.io/badge/Status-Em%20desenvolvimento-yellow)  
![Projeto](https://img.shields.io/badge/Projeto-Estudo-informational)

---

## 📌 Sobre o projeto

Este é um programa simples desenvolvido em Python para classificar o desempenho de um vendedor com base na porcentagem de meta atingida.

O usuário define os parâmetros das metas (Excelente, Muito bom e Regular) e informa o percentual alcançado. O sistema então retorna uma mensagem de feedback automático conforme regras definidas.

---

## 🎯 Funcionalidades

- Definir meta Excelente  
- Definir meta Muito bom  
- Definir meta Regular  
- Informar percentual atingido  
- Validar ordem das metas  
- Classificar desempenho automaticamente  

---

## 🧠 Regras utilizadas

```
Se meta ≥ Excelente → "Excelente! Bateu a meta e ganhou bônus."
Se meta ≥ Muito bom → "Muito bom! Quase lá, mantenha o foco."
Se meta ≥ Regular → "Atenção: Desempenho regular. Precisa de melhoria."
Se meta < Regular → "Alerta: Desempenho abaixo do esperado."
```

---

## 💻 Tecnologias utilizadas

- Python 🐍  
- Terminal / Prompt de comando  
- Git e GitHub  

---

## ▶️ Como executar

1. Abrir o terminal  
2. Ir até a pasta do projeto  
3. Executar o comando:

```bash
python app.py
```
---

## 💡 Exemplo de uso

```
Digite o alvo da meta excelente: 100
Digite o alvo da meta muito bom: 80
Digite o alvo da meta regular: 50
Digite a porcentagem da meta atingida: 85

Muito bom! Quase lá, mantenha o foco.
```
---

## ⚠️ Validações
- Verifica se as metas estão em ordem decrescente
- Identifica valores negativos como inválidos

---

## 👨‍💻 Autor
- Wagner
- Projeto desenvolvido para fins de estudo em programação Python.