# **Sobre o Projeto**

Esse projeto refere-se ao estudo sobre a PSR-11 (Container Interface)

- Dependency Injection
- Class Container
- Service Container

## **O que é a PSR-11**
A PSR-11 é uma especificação de interoperabilidade para contêineres de injeção de dependência em PHP (DI containers). PSR-11 é uma abreviação para "PHP Standard Recommendation 11". Foi proposta pelo PHP-FIG (PHP Framework Interop Group), uma organização que visa melhorar a interoperabilidade entre estruturas e bibliotecas PHP.

É possivel notar, via código, que não é necessário instanciar as classes, facilitando:

- Injeção de dependências
- Gerenciamento Centralizado de Recursos
- Desacomplamento (contribuindo assim para a testabilidade)


## **Como Executar**

É preciso dar permissão para o arquivo sail

```bash
chmod +x sail
```

Para ver se funcionou, rodar o seguinte comando

```bash
./sail php -v
```

Caso esteja funcionando, rodar:

```bash
./sail composer install
```

Depois executar:

```bash
./sail php public/index.php
```

## **Final**
Mostrar na prática, via código, como a PSR-11 funciona. <br>
**Obs:** Service container é uma das bases do Laravel, faz parte do Core e é de fundamental entendimento caso queria dominar o framework!