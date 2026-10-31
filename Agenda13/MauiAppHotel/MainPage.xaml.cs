using MauiAppHotel.Models;

namespace MauiAppHotel
{
    public partial class MainPage : ContentPage
    {
        public List<Quarto> ListaQuartos { get; set; } = new List<Quarto>
        {
            new Quarto { Descricao = "Suíte Luxo", ValorDiariaAdulto = 150.0, ValorDiariaCrianca = 75.0 },
            new Quarto { Descricao = "Suíte Executiva", ValorDiariaAdulto = 100.0, ValorDiariaCrianca = 50.0 },
            new Quarto { Descricao = "Quarto Simples", ValorDiariaAdulto = 60.0, ValorDiariaCrianca = 30.0 }
        };

        public MainPage()
        {
            InitializeComponent();

            BindingContext = this;
            pck_quarto.ItemsSource = ListaQuartos;

            // Bloquear datas passadas automaticamente nos DatePickers
            dtpck_checkin.MinimumDate = DateTime.Today;
            dtpck_checkout.MinimumDate = DateTime.Today;
        }

        private async void Button_Clicked(object sender, EventArgs e)
        {
            try
            {
                var quartoSelecionado = pck_quarto.SelectedItem as Quarto;
                if (quartoSelecionado == null)
                {
                    await DisplayAlert("Erro", "Por favor, selecione um quarto.", "OK");
                    return;
                }

                DateTime checkIn = dtpck_checkin.Date.Value;
                DateTime checkOut = dtpck_checkout.Date.Value;
                int adultos = (int)stp_adultos.Value;
                int criancas = (int)stp_criancas.Value;

                // Validação extra para impedir check-in em data passada
                if (checkIn < DateTime.Today)
                {
                    await DisplayAlert("Erro", "A data de check-in não pode ser anterior ao dia de hoje.", "OK");
                    return;
                }

                if (checkOut < checkIn)
                {
                    await DisplayAlert("Erro", "A data de check-out não pode ser anterior à data de check-in.", "OK");
                    return;
                }

                await Navigation.PushAsync(new Contratante(quartoSelecionado, checkIn, checkOut, adultos, criancas));
            }
            catch (Exception ex)
            {
                await DisplayAlert("Ops", ex.Message, "OK");
            }
        }

        private async void BtnSobre_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new Sobre());
        }

        private void stp_adultos_ValueChanged(object sender, ValueChangedEventArgs e)
        {
        }

        private void stp_criancas_ValueChanged(object sender, ValueChangedEventArgs e)
        {
        }
    }
}
