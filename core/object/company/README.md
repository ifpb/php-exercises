# Company

Crie uma variável que contenha essas informações:

| Name          | Founded | Industry                   | kind             |
| ------------- | ------- | -------------------------- | ---------------- |
| Amazon        | 1994    | E-Commerce, Cloud          | Internet company |
| Alphabet Inc. | 2015    | Search, Cloud, Advertising | Internet company |
| Facebook      | 2004    | Social                     | Internet company |

Projete uma classe para armazenar os dados anteriores conforme o diagrama a seguir:

<img src="assets/company-instance.svg" alt="Company" width="500">

Crie um método `__toString()` conforme o diagrama a seguir:

<img src="assets/company.svg" alt="Company" width="400">

para exibir o nome (sempre com tamanho de 15) e ano de fundação da empresa:

```
Amazon.........1994
```

Crie a classe `Companies` para agrupar uma coleção de `Company`:

<img src="assets/companies.svg" alt="Company" width="400">

no método `__toString()` o resultado final deve ser:

```
Alphabet Inc...2015
Amazon.........1994
Facebook.......2004
```

Para auxiliar todos os teste veja o arquivo `{{ page.path | replace:'README.md','' }}code/print/companies.print.php`:

```php
{% include_relative code/print/companies.print.php %}
```

> Resposta: [company.php](response/src/company.php) e [companies.php](response/src/companies.php)
