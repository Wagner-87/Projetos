namespace MauiAppJogodaVelha;

public partial class MainPage : ContentPage
{
    string vez = "X";
    int rodadas = 0; // Controlo para o empate (Deu Velha)

    public MainPage()
    {
        InitializeComponent();
    }

    private void Button_Clicked(object sender, EventArgs e)
    {
        Button btn = (Button)sender;
        btn.IsEnabled = false;
        rodadas++; // Conta mais uma jogada efetuada

        // Alterna entre X e O
        if (vez == "X")
        {
            btn.Text = "X";
            vez = "0";
        }
        else
        {
            btn.Text = "0";
            vez = "X";
        }

        // ==========================================
        // VERIFICAÇÕES DE VITÓRIA
        // ==========================================

        // --- Verificações para o X ---
        if (btn10.Text == "X" && btn11.Text == "X" && btn12.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }
        if (btn20.Text == "X" && btn21.Text == "X" && btn22.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }
        if (btn30.Text == "X" && btn31.Text == "X" && btn32.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }

        if (btn10.Text == "X" && btn20.Text == "X" && btn30.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }
        if (btn11.Text == "X" && btn21.Text == "X" && btn31.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }
        if (btn12.Text == "X" && btn22.Text == "X" && btn32.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }

        if (btn10.Text == "X" && btn21.Text == "X" && btn32.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }
        if (btn12.Text == "X" && btn21.Text == "X" && btn30.Text == "X") { DisplayAlert("Parabéns!", "O X ganhou!", "OK"); Zerar(); return; }


        // --- Verificações para o O (0) ---
        if (btn10.Text == "0" && btn11.Text == "0" && btn12.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }
        if (btn20.Text == "0" && btn21.Text == "0" && btn22.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }
        if (btn30.Text == "0" && btn31.Text == "0" && btn32.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }

        if (btn10.Text == "0" && btn20.Text == "0" && btn30.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }
        if (btn11.Text == "0" && btn21.Text == "0" && btn31.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }
        if (btn12.Text == "0" && btn22.Text == "0" && btn32.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }

        if (btn10.Text == "0" && btn21.Text == "0" && btn32.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }
        if (btn12.Text == "0" && btn21.Text == "0" && btn30.Text == "0") { DisplayAlert("Parabéns!", "O O ganhou!", "OK"); Zerar(); return; }

        // ==========================================
        // VERIFICAÇÃO DE EMPATE (DEU VELHA)
        // ==========================================
        if (rodadas == 9)
        {
            DisplayAlert("Empate!", "Deu Velha!", "OK");
            Zerar();
        }
    }

    // Método acionado pelo botão manual de reiniciar
    private void BtnReiniciar_Clicked(object sender, EventArgs e)
    {
        Zerar();
    }

    // Função para limpar o tabuleiro, reativar os botões e reiniciar contadores
    void Zerar()
    {
        btn10.Text = ""; btn11.Text = ""; btn12.Text = "";
        btn20.Text = ""; btn21.Text = ""; btn22.Text = "";
        btn30.Text = ""; btn31.Text = ""; btn32.Text = "";

        btn10.IsEnabled = true; btn11.IsEnabled = true; btn12.IsEnabled = true;
        btn20.IsEnabled = true; btn21.IsEnabled = true; btn22.IsEnabled = true;
        btn30.IsEnabled = true; btn31.IsEnabled = true; btn32.IsEnabled = true;

        vez = "X";
        rodadas = 0; // Reinicia a contagem de jogadas
    }
}