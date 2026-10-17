# Jogo da Velha (.NET MAUI) - Agenda 11

Aplicativo de **Jogo da Velha** desenvolvido em **C#** e **.NET MAUI** como parte das atividades da Agenda 11 do curso técnico em Desenvolvimento de Sistemas (ETEC).

## 🎨 Destaques e Personalizações Realizadas
Além da estrutura base proposta na atividade do material, o projeto foi aprimorado com as seguintes customizações visuais e de usabilidade:

* **Tema Visual em Degradê Verde:** Substituição do tema padrão por um fundo em gradiente moderno em tons de verde (`#0F2027` para `#71B280`) e botões com paleta coordenada (`#112211` com bordas e letras em verde suave).
* **Estilização Global Avançada (`ContentPage.Resources`):** Aplicação de um estilo unificado para todos os botões do tabuleiro, incluindo cantos arredondados (`CornerRadius="15"`) e fontes de tamanho otimizado (`FontSize="80"`).
* **Detecção Automática de Empate ("Deu Velha!"):** Implementação de um contador de rodadas integrado que deteta automaticamente quando as 9 casas são preenchidas sem vencedores, exibindo um alerta e reiniciando o tabuleiro.
* **Botão de Reinício Manual:** Adição de um botão dedicado na interface (`Reiniciar Jogo`), permitindo aos utilizadores reiniciar a partida a qualquer momento de forma prática.

## 🛠️ Tecnologias Utilizadas
* **C#**
* **.NET MAUI** (Multi-platform App UI)
* **XAML** (Design de Interface)
* **Visual Studio**

## 📂 Estrutura do Projeto
```text
MauiAppJogodaVelha/
├── Platforms/          # Configurações específicas de plataforma (Android, Windows, etc.)
├── Resources/          # Recursos visuais (ícones, fontes e estilos)
├── App.xaml            # Configurações globais do app
├── AppShell.xaml       # Estrutura de navegação (Shell)
├── MainPage.xaml       # Interface visual personalizada (XAML)
└── MainPage.xaml.cs    # Lógica de jogo, vitórias e empate automático (C#)