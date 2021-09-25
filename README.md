# Chia Price

## Buscando e Convertendo o Preço da Chia Network (XCH) para Real BRL

Retornando Apenas Valor da Chia em USD e BRL

```php
require __DIR__ . '/vendor/autoload.php';

Chia\Preco::agora();

//resultado
Array
(
    [chia] => 191,34
    [real] => 1.024,59
    [minhasChias] => 0,00
)

```

Retornando Apenas Valor da Chia em USD e BRL e calculando com seu total de chia

```php
Chia\Preco::agora('6.12411210');

//resultado
Array
(
    [chia] => 191,34
    [real] => 1.024,59
    [minhasChias] => 6.274,69
)
```

;)