namespace MauiAppHotel
{
    public partial class Contratante : ContentPage
    {
        public Contratante(Models.Quarto quartoSelecionado, DateTime checkIn, DateTime checkOut, int qtdAdultos, int qtdCriancas)
        {
            InitializeComponent();

            // 1. Calcular a quantidade de dias da estadia
            int dias = (checkOut - checkIn).Days;
            if (dias <= 0) dias = 1; // Garante pelo menos 1 diária caso a conta dê zero

            // 2. Calcular o valor total com base nas diárias de adultos e crianças (com o asterisco * de multiplicação)
            double valorTotalAdultos = qtdAdultos * quartoSelecionado.ValorDiariaAdulto;
            double valorTotalCriancas = qtdCriancas * quartoSelecionado.ValorDiariaCrianca;
            double valorDiarioTotal = valorTotalAdultos + valorTotalCriancas;
            double custoTotal = valorDiarioTotal * dias;

            // 3. Exibir os resultados nos elementos visuais (Labels)
            lblQuarto.Text = $"Quarto: {quartoSelecionado.Descricao}";
            lblDatas.Text = $"Período: {checkIn:dd/MM/yyyy} até {checkOut:dd/MM/yyyy} ({dias} dias)";
            lblHospedes.Text = $"Hóspedes: {qtdAdultos} Adulto(s) e {qtdCriancas} Criança(s)";
            lblValorTotal.Text = $"Valor Total: R$ {custoTotal:F2}";
        }

        private async void Button_Clicked(object sender, EventArgs e)
        {
            // Retorna para a página anterior (MainPage)
            await Navigation.PopAsync();
        }
    }
}