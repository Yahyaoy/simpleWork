@component('mail::message')
   # A heading

    hello my name is yahya

    - A list
    - B list
    - C list

   hello guys my name is yahya

    @component('mail::button',['url' => 'https://laracasts.com'])
        Visit Laracast ..
    @endcomponent

@endcomponent
