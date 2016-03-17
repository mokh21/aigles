{!! Form::model($produit, ['method' => 'PATCH', 'action' => ['ProduitsController@update', $produit->id]]) !!}

<html> Prix </html>
{!! Form::number('prix'); !!}
<html> <br><br> </html>

<html> Surface </html>
{!! Form::number('surface'); !!}
<html> <br><br> </html>

<html> Type </html>
{!!  Form::text('type'); !!}
<html> <br><br> </html>

<html> Localité </html>
{!!  Form::text('localite'); !!}
<html> <br><br> </html>

<html> Description </html>
{!!  Form::text('description'); !!}
<html> <br><br> </html>

<html> Code du Produit </html>
{!!  Form::text('code_p'); !!}
<html> <br><br> </html>

<html> Url De L'image </html>
{!!  Form::text('image'); !!}
<html> <br><br> </html>

<html> Url Du Visite Virtuelle </html>
{!!  Form::text('visite_virtuelle'); !!}
<html> <br><br> </html>

{!! Form::submit('modifier'); !!}


{!! Form::close() !!}

@if ($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
</ul>
@endif