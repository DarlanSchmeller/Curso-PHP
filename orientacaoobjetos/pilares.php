<div class="title">Pilares da OO: Teoria</div>

<?php
print('<p class="title">
    <b>1° Pilar: Encapsulamento</b>
        <br>
        // O encapsulamento é o princípio de esconder os detalhes internos de um objeto 
        e expor apenas as operações necessárias para interagir com ele, ou seja
        esconder sua complexidade.
</p>');

print('<p class="title">
    Modificadores de Acesso:
        <br>
        <b>Public:</b> // Visível para fora do objeto.
        <br>
        <b>Protected:</b>  // Visivel para dentro do objeto e por herança.
        <br>
        <b>Private:</b>  Visivel somente dentro do objeto.
</p>');



print('<p class="title">
    <b>2° Pilar: Herança</b>
        <br>
        // A herança é um mecanismo que permite criar uma nova classe (subclasse) baseada em uma classe existente (superclasse).
        A subclasse herda os atributos e métodos da superclasse e pode adicionar novos membros ou modificar os existentes conforme necessário.
        A herança promove a reutilização de código, pois as subclasses podem aproveitar a funcionalidade existente das superclasses, evitando a duplicação de código e facilitando a manutenção.
        Polimorfismo:
</p>');



print('<p class="title">
    <b>3° Pilar: Polimorfismo</b>
        <br>
        // Polimorfismo significa "muitas formas" e refere-se à capacidade de objetos 
        de uma classe serem tratados como objetos de sua superclasse.
        Existem duas formas de polimorfismo em POO: o polimorfismo de <b>sobrecarga</b> 
        (métodos com o mesmo nome, mas com diferentes parâmetros) e o polimorfismo de 
        <b>sobreposição</b> (subclasses implementam métodos herdados de forma diferente).
</p>');



print('<p class="title">
    <b>4° Pilar: Abstração</b>
        <br>
        // Abstração é o conceito fundamental da POO, que permite aos desenvolvedores 
        focarem nos aspectos relevantes de um objeto e ignorarem os detalhes irrelevantes.
        Em POO, uma abstração é representada por uma classe, que define as propriedades e 
        comportamentos essenciais do objeto. Por exemplo, uma classe "Carro" pode ter 
        propriedades como cor, modelo e marca, e métodos como ligar, desligar e acelerar.
        A abstração permite aos desenvolvedores criar modelos de objetos que refletem 
        entidades do mundo real, simplificando assim o desenvolvimento e a manutenção do 
        código.
</p>');