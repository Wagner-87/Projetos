"""
Programa: Calculadora de Consumo e Custo de Energia Elétrica
Descrição: Calcula o consumo mensal (kWh) e o Custo Mensal em reais de um aparelho com base na potência (W), o tempo médio de uso diário (horas) e preço do KWh em reais. 
Autor: Seu Nome
Data: 2026
"""

# =========================
# Entrada de dados do usuário
# =========================

# Solicita o nome do aparelho
aparelho = input("Digite o nome do aparelho: ")

# Solicita a potência em watts e converte para número decimal (float)
potencia = float(input("Digite a potência do aparelho (em watts): "))

# Solicita o tempo de uso diário em horas e converte para float
horas_dia = float(input("Digite o tempo médio de uso diário (em horas): "))

# Solicita o preço do kwh e converte para float
preco_kWh = float(input("Digite o preço do kwh (R$) : "))


# =========================
# Processamento (cálculo)
# =========================

# Fórmula do consumo mensal:
# (potência em watts * horas por dia * dias do mês) / 1000
# O resultado é convertido de Wh para kWh
consumo_mensal = (potencia * horas_dia * 30) / 1000 

# Fórmula do custo mensal :
# (Consumo mensal em kwh * preço do kwh)
custo_mensal = (consumo_mensal * preco_kWh)  

# =========================
# Saída de dados (resultado)
# =========================

# Exibe um cabeçalho para organizar a saída
print("\n===== RESULTADO =====")

# Mostra o nome do aparelho informado
print(f"Aparelho: {aparelho}")

# Mostra o consumo com duas casas decimais
print(f"Consumo estimado: {consumo_mensal:.2f} kWh/mês")

# Mostra o custo mensal em reais com duas casas decimais
print(f"Custo mensal estimado: R$ {custo_mensal:.2f}")