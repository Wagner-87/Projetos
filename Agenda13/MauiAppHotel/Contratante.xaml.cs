namespace MauiAppHotel
{
    public partial class Contratante : ContentPage
    {
        public Contratante(Models.Quarto quartoSelecionado, DateTime checkIn, DateTime checkOut, int qtdAdultos, int qtdCriancas, string cupom)
        {
            InitializeComponent();

            // 1. Calcular a quantidade de dias da estadia
            int dias = (checkOut - checkIn).Days;
            if (dias <= 0) dias = 1; // Garante pelo menos 1 diária caso a conta dê zero

            // 2. Calcular o valor total com base nas diárias de adultos e crianças (com o asterisco * de multiplicação)
            double valorTotalAdultos = qtdAdultos * quartoSelecionado.ValorDiariaAdulto;
            double valorTotalCriancas = qtdCriancas * quartoSelecionado.ValorDiariaCrianca;
            double valorDiarioTotal = valorTotalAdultos + valorTotalCriancas;
            double custoBruto = valorDiarioTotal * dias;
            double custoTotal = custoBruto;

            // 3. Aplicar a regra do Cupom de Desconto
            string cupomTratado = cupom?.Trim().ToUpper() ?? string.Empty;
            double percentualDesconto = 0;

            if (cupomTratado == "RESORT10")
            {
                percentualDesconto = 0.10; // 10% de desconto
            }
            else if (cupomTratado == "VIP20")
            {
                percentualDesconto = 0.20; // 20% de desconto
            }

            double valorDesconto = 0;

            // Se encontrou um cupom válido, aplica o desconto no custo total
            if (percentualDesconto > 0)
            {
                valorDesconto = custoBruto * percentualDesconto;
                custoTotal = custoBruto - valorDesconto;
            }

            // 4. Exibir os resultados nos elementos visuais (Labels)
            lblQuarto.Text = $"Quarto: {quartoSelecionado.Descricao}";
            lblDatas.Text = $"Período: {checkIn:dd/MM/yyyy} até {checkOut:dd/MM/yyyy} ({dias} dias)";
            lblHospedes.Text = $"Hóspedes: {qtdAdultos} Adulto(s) e {qtdCriancas} Criança(s)";

            // 4. Exibição dos valores (Bruto, Economia e Total)
            lblValorBruto.Text = $"R$ {custoBruto:F2}";

            if (percentualDesconto > 0)
            {
                // Mostra o bloco de economia e ativa o destaque verde
                layoutEconomia.IsVisible = true;
                lblEconomia.Text = $"R$ {valorDesconto:F2} ({(percentualDesconto * 100)}% OFF)";
                lblValorTotal.Text = $"R$ {custoTotal:F2}";
            }
            else
            {
                // Esconde a linha de economia caso nenhum cupom válido seja inserido
                layoutEconomia.IsVisible = false;
                lblValorTotal.Text = $"R$ {custoTotal:F2}";
            }

        }

        private async void Button_Clicked(object sender, EventArgs e)
        {
            // Retorna para a página anterior (MainPage)
            await Navigation.PopAsync();
        }
    }
}