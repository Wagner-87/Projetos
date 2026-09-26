# ⚙️ Controle de Manutenção Industrial em PHP

<<<<<<< HEAD
> **Atividade Prática:** Agenda 4 - Programação Web I   
> **Tecnologias:** PHP, HTML5  
=======
> **Atividade Prática:** Agenda 4 - Programação Web I  
> **Estudante:** Wagner  
> **Tecnologias:** PHP, HTML5 
>>>>>>> ae3cc894701fe382646eee25d3f5892659cc7181

Este repositório contém uma aplicação funcional simplificada desenvolvida para demonstrar o uso prático de **funções (customizadas e nativas)** e **estruturas de repetição (`foreach` e `for`)** na linguagem PHP.

---

## 📌 Sobre o Projeto

O sistema simula o controle e monitoramento do status de manutenção de equipamentos industriais. Com base na data atual e na data prevista para a próxima manutenção de cada máquina, a aplicação calcula automaticamente o status (se está em dia, agendada para o dia atual ou atrasada).

---

## 🛠️ Conceitos Utilizados

### 1. Funções Customizadas e Nativas
* **`calcularDiasRestantes($dataProximaManutencao)`**: Função própria criada com a instrução `return`. Ela aceita uma string de data e devolve a diferença em dias.
* **`strtotime()`**: Converte textos de datas em **Timestamp Unix** (segundos decorridos desde 1970) para permitir operações matemáticas diretas.
* **`date()`**: Formata a exibição da data atual do relatório e extrai o padrão `Y-m-d` sem fração de horas.
* **`abs()`**: Converte a contagem de dias negativos (atrasos) em valores absolutos para exibição amigável na interface.

### 2. Estruturas de Repetição
* **`foreach`**: Percorre o array associativo multidimensional `$equipamentos`, extraindo as chaves (`nome`, `setor`, `proxima_manutencao`) de cada máquina a cada volta do laço.
* **`for`**: Executa uma repetição contada de 1 a 3 para simular a geração sequencial de logs de verificação do sistema.

