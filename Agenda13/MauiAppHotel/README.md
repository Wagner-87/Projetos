# 🏨 MauiAppHotel

Aplicativo móvel e desktop desenvolvido em **.NET MAUI** para gerenciamento de reservas de hotel, cálculo automatizado de diárias, controle de hóspedes e navegação entre páginas. Desenvolvido como parte das atividades práticas da disciplina de Desenvolvimento de Sistemas-2 (Técnico em Desenvolvimento de Sistemas).

---

## 🚀 Funcionalidades da Aplicação

- **Seleção de Acomodações**: Escolha entre diferentes categorias de quartos (Suíte Luxo, Suíte Executiva, Quarto Simples) com tarifas diferenciadas para adultos e crianças.
- **Controle de Hóspedes**: Utilização de *Steppers* para definir a quantidade de adultos e crianças por reserva.
- **Cálculo Automático**: Processamento dinâmico do valor total da estadia com base no número de diárias e na composição de hóspedes.
- **Navegação Completa (`NavigationPage`)**: Transição fluida entre a Tela Principal (`MainPage`), a Tela de Resumo (`Contratante`) e a Página Informativa (`Sobre`).

---

## ✨ Personalizações e Melhorias Implementadas

Em relação ao projeto original proposto na atividade, foram aplicadas as seguintes melhorias avançadas de usabilidade, regra de negócio e design:

1. **Validação Rigorosa de Datas**:
   - Implementação de restrição automática (`MinimumDate = DateTime.Today`) nos seletores de data (`DatePicker`) para impedir a seleção de dias passados.
   - Validações lógicas em C# para garantir que a data de *check-in* não seja inferior ao dia atual e que o *check-out* seja estritamente posterior ao *check-in*.

2. **Identidade Visual Personalizada (Estilo Resort)**:
   - Redesign completo da interface inspirado em hotéis de praia de luxo.
   - **Paleta de Cores Sofisticada**: Uso de tons em Azul Oceano (`#1E3D59`), Dourado Champagne (`#C5A880`) e Fundo Off-White (`#F9F8F6`).
   - Estruturação de layouts modernos com cartões em relevo (`Frame`), sombras e cantos arredondados.

3. **Página "Sobre" Aprimorada**:
   - Criação de uma tela institucional detalhada contendo informações do sistema, o ano de desenvolvimento (2026) e a identificação do desenvolvedor (**Wagner de Oliveira**).

---

## 🛠️ Tecnologias Utilizadas

- **.NET MAUI** (.NET 8/9+)
- **C#** (Lógica de Negócio e Programação Orientada a Objetos)
- **XAML** (Definição de Interfaces Gráficas)

---

## 📱 Como Executar o Projeto

1. Certifique-se de ter o **Visual Studio** instalado com a carga de trabalho de desenvolvimento de interface multiplataforma do .NET MAUI (`.NET Multi-platform App UI development`).
2. Clone este repositório no seu computador:
   ```bash
   git clone [https://github.com/SEU-USUARIO/MauiAppHotel.git](https://github.com/SEU-USUARIO/MauiAppHotel.git)