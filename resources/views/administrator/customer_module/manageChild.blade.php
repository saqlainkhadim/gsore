<ul>
    @foreach($childs as $child)
        <li>
            {{ $child->username }}
            @if(count($child->childs))
                @include('administrator.customer_module.manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
    </ul>
