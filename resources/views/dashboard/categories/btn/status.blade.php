@isset($categories)
    @foreach ($categories as $category)            
        <tr>
        <td>{{ $category->getActive() }}</td>
        </tr>
    @endforeach
@endisset