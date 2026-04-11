"""
Pesquisa de Opinião - TudoWeb
Programa para coletar dados de satisfação dos clientes.
"""

# Contadores
qtd_excelente = 0
qtd_ruim = 0

# Número de entrevistados
total_entrevistados = 50

for i in range(total_entrevistados):
    print(f"\nEntrevistado {i + 1}")

    nome = input("Digite o nome: ").strip().title()
    idade = int(input("Digite a idade: "))

    print("Opinião:")
    print("1 - EXCELENTE")
    print("2 - BOM")
    print("3 - RUIM")

    opiniao = int(input("Digite a opção: "))

    # Verificação da resposta
    if opiniao == 1:
        qtd_excelente += 1
    elif opiniao == 3:
        qtd_ruim += 1
    elif opiniao == 2:
        pass
    else:
        print("Opção inválida!")

# Resultado final
print("\n===== RESULTADO DA PESQUISA =====")
print(f"Total de entrevistados: {total_entrevistados}")
print(f"Quantidade de EXCELENTE: {qtd_excelente}")
print(f"Quantidade de RUIM: {qtd_ruim}")