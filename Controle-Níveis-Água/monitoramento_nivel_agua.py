"""
Programa: Monitoramento de Nível de Água
Descrição: Exibe o status dos níveis do reservatório com cores no terminal.
Autor: Wagner Oliveira
Data: 01-05-2026
"""

from colorama import Fore, Style, init


# Inicializa o Colorama
init()


# Lista de níveis do reservatório
niveis_reservatorio = [1, 2, 3, 4, 5]


def definir_cor_mensagem(nivel_reservatorio):
    """
    Retorna a cor e a mensagem conforme o nível do reservatório.
    """
    match nivel_reservatorio:
        case 1:
            return Fore.RED, "Muito baixo (CRÍTICO)"
        case 2:
            return Fore.YELLOW, "Baixo"
        case 3:
            return Fore.GREEN, "Médio"
        case 4:
            return Fore.CYAN, "Alto"
        case 5:
            return Fore.BLUE, "Muito alto (ALERTA)"


def exibir_niveis(lista_niveis):
    """
    Exibe os níveis do reservatório com cores no terminal.
    """
    titulo = "=== MONITORAMENTO DO RESERVATÓRIO ==="
    print(Style.BRIGHT + titulo + Style.RESET_ALL)

    for nivel in lista_niveis:
        cor, mensagem = definir_cor_mensagem(nivel)
        print(cor + f"Nível {nivel} → {mensagem}" + Style.RESET_ALL)


if __name__ == "__main__":
    exibir_niveis(niveis_reservatorio)