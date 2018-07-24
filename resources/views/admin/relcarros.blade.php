<h1>Revenda Herbie</h1>
<h2>Relatorio de veiculos cadastrados</h2>

<table border=1 width="100%">(
<tr>
   <td>Modelo</td>
   <td>Ano</td>
   <td>Preço R$</td>
</tr>    

@foreach($carros as $c)
    <tr>
        <td>{{ $c->modelo }}</td>
        <td>{{ $c->ano }}</td>
        <td>{{ $c->number_format($c->preco, 2, ',', '.')}}</td>
    </tr>
@endforeach

</table>
    
