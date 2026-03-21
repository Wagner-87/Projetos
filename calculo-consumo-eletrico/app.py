"""
Programa: Calculadora Inteligentede Consumo de Energia Elétrica
Descrição: Calcula o consumo mensal (kWh) de um aparelho com base
na potência (W) e no tempo médio de uso diário (horas).
Autor: Wagner Oliveira
Data: 21-03-2026
"""

# =========================
# Entrada de dados 
# =========================

# Solicita aparelho
aparelho = input("Digite o nome do aparelho: ")

# Solicita a potência em watts e converte para número decimal
potencia = float(input("Digite a potência do aparelho (em watts): "))

# Solicita o tempo de uso diário em horas e converte para float
horas_dia = float(input("Digite o tempo médio de uso diário (em horas): "))


# =========================
# Processamento (cálculo)
# =========================

# Fórmula do consumo mensal:
# (potência (watts) * horas por dia * dias por mês) / 1000
# O resultado é convertido de Wh para kWh
consumo_mensal = (potencia * horas_dia * 30) / 1000


# =========================
# Saída de dados (resultado)
# =========================

# Exibe um cabeçalho para organizar a saída
print("\n===== RESULTADO =====")

# Mostra o nome do aparelho informado
print(f"Aparelho: {aparelho}")

# Mostra o consumo com duas casas decimais
print(f"Consumo estimado: {consumo_mensal:.2f} kWh/mês")