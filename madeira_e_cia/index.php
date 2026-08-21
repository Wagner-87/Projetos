```php
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Madeira e Cia - Promoção</title>

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="container">

        <h1>Madeira e Cia Ltda.</h1>

        <p class="subtitulo">
            Promoção especial de aniversário!
        </p>

        <form action="resultado.php" method="POST">

            <label for="txtNome">
                Nome do cliente:
            </label>

            <input
                type="text"
                id="txtNome"
                name="txtNome"
                placeholder="Digite seu nome"
                required
            >

            <label for="txtValorCompra">
                Valor da compra:
            </label>

            <input
                type="number"
                id="txtValorCompra"
                name="txtValorCompra"
                placeholder="0,00"
                step="0.01"
                min="0"
                required
            >

            <label for="cmbPag">
                Forma de pagamento:
            </label>

            <select
                id="cmbPag"
                name="cmbPag"
                required
            >

                <option value="">
                    Selecione uma opção
                </option>

                <option value="deposito">
                    Depósito - 10% de desconto
                </option>

                <option value="boleto">
                    Boleto - 8% de desconto
                </option>

                <option value="cartaoCredito">
                    Cartão de crédito - sem desconto
                </option>

            </select>

            <button type="submit">
                Calcular desconto
            </button>

        </form>

        <div class="descontos">

            <h2>Descontos da promoção</h2>

            <p>
                💰 <strong>Depósito:</strong> 10%
            </p>

            <p>
                📄 <strong>Boleto:</strong> 8%
            </p>

            <p>
                💳 <strong>Cartão de crédito:</strong> sem desconto
            </p>

        </div>

    </div>

</body>

</html>
```

