namespace MauiMeuCombustivel
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }
        // Quando pressionar Enter/Próximo no campo Marca -> pula para Modelo
        private void txt_marca_Completed(object sender, EventArgs e)
        {
            txt_modelo.Focus();
        }

        // Quando pressionar Enter/Próximo no campo Modelo -> pula para Etanol
        private void txt_modelo_Completed(object sender, EventArgs e)
        {
            txt_etanol.Focus();
        }

        // Quando pressionar Enter/Próximo no campo Etanol -> pula para Gasolina
        private void txt_etanol_Completed(object sender, EventArgs e)
        {
            txt_gasolina.Focus();
        }

        private void Button_Clicked(object sender, EventArgs e)
        {
            try
            {
                // Obter textos de Marca e Modelo
                string marca = txt_marca.Text;
                string modelo = txt_modelo.Text;

                // Validação simples para preenchimento de marca e modelo
                if (string.IsNullOrWhiteSpace(marca) || string.IsNullOrWhiteSpace(modelo))
                {
                    DisplayAlert("Atenção", "Por favor, informe a marca e o modelo do veículo.", "OK");
                    return;
                }

                // Converter valores dos preços
                double etanol = Convert.ToDouble(txt_etanol.Text);
                double gasolina = Convert.ToDouble(txt_gasolina.Text);

                string resultado = "";

                // Regra dos 70%
                if (etanol <= (gasolina * 0.7))
                {
                    resultado = $"O etanol está compensando mais para o seu {marca} {modelo}.";
                }
                else
                {
                    resultado = $"A gasolina está compensando mais para o seu {marca} {modelo}.";
                }

                // Exibir o alerta com o resultado personalizado
                DisplayAlert("Resultado", resultado, "OK");
            }
            catch (Exception ex)
            {
                DisplayAlert("Ops", "Verifique se digitou os preços corretamente (ex: 4.19).", "Fechar");
            }
        }
    }
}