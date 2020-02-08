@component('mail::message')
# Puuuuushii liya

Yallah a weldi ha commande jdida jme3 karrek.

Khuna smitu : <strong>{{$data['name']}}</strong>
<br>
Ha fin sakn : <strong>{{ $data['city'] }}, {{ $data['adress'] }}</strong>
<br>
Ha num : <strong>{{$data['phone']}}</strong>
@component('mail::button', ['url' => 'quifit-maroc.com/Admin'])
Go to Admin panel
@endcomponent

Yallah t7errek,<br>
@endcomponent
