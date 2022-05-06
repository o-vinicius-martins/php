<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente de Testes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section>
            <h1>Exercício 1</h1>
            <p>Crie um exercício que exiba a frase "Olá, Mundo!" ao final da execução.</p>
            <div>
                <form>
                    <input type="submit" value="Executar" name="executar">
                </form>
            </div>
            <div>
            <?php
            $exec = $_GET["executar"];
            var_dump($exec);
            //echo "Olá, Mundo!";
            ?>
            </div>
        </section>
    </main>
    

</body>
</html>