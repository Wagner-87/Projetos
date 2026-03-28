"""
Programa: Classificador de Metas
Descrição: O programa recebe a porcentagem de uma meta batida por um vendedor e retornar uma mensagem baseada em regras pré-definidas:
Se meta ≥ 100 → Excelente
Se meta ≥ 80 → Muito bom
Se meta ≥ 50 → Regular
Se meta <50 → Alerta
 
Autor: Wagner
Data: 28-03-2026
"""


# Definição dos parametros das metas
meta_excelente = float(input("Digite o alvo da meta excelente: "))
meta_muitobom = float(input("Digite o alvo da meta muito bom: "))
meta_regular = float(input("Digite o alvo da meta regular: "))

# Validação da ordem das metas
if meta_excelente > meta_muitobom and meta_muitobom > meta_regular :

    # Solicita ao usuário a porcentagem da meta atingida pelo vendedor
    meta = float(input("Digite a porcentagem da meta atingida: "))

    # Verifica se o valor informado é inválido (negativo)
    if meta < 0:
        print("Erro: A porcentagem da meta não pode ser negativa.")
        
    # Caso o valor seja válido, inicia a classificação
    elif meta >= meta_excelente :
        print("Excelente! Bateu a meta e ganhou bônus.")
    elif meta >= meta_muitobom :
        print("Muito bom! Quase lá, mantenha o foco.")
    elif meta >= meta_regular :
        print("Atenção: Desempenho regular. Precisa de melhoria.")
    else:
        print("Alerta: Desempenho abaixo do esperado. Procure o gestor.")
else:
    print("Erro: As metas devem estar em ordem decrescente!")